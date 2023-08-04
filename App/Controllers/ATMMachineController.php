<?php
namespace App\Controllers;

use Core\Controller;
use Core\Interfaces\ATMInterface;
use App\Data\WebSource;

class ATMMachineController extends Controller  implements ATMInterface {

    private $balance;

    public function __construct() {
        $this->balance = 1000;
        $_SESSION['balance'] = $this->balance;
    }

    public function views($layout, $param)
    {
         $contents = WebSource::renderContents($param['page']);

         extract($contents);

         ob_start();
         require_once $param['view'];
         $content = ob_get_clean();

         ob_start();
         require_once $layout;
         $output = ob_get_clean();

         echo $output;
    }

    public function index(){
        $layout = 'App/Views/AppLayout.php';
        $view = 'App/Views/index.php';

        $dataViews = [
            'title' => 'Atm Machine',
            'page' => 'atm',
            'view' => $view
        ];

        self::views($layout, $dataViews);
    }

    public function checkBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            return "Deposit successful. New balance: " . $this->balance;
        } else {
            return "Invalid deposit amount.";
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            return "Withdrawal successful. New balance: " . $this->balance;
        } else {
            return "Invalid withdrawal amount or insufficient funds.";
        }
    }

    public function transfer($amount, $targetAccount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            return "Transfer to $targetAccount successful. New balance: " . $this->balance;
        } else {
            return "Invalid transfer amount or insufficient funds.";
        }
    }
}

