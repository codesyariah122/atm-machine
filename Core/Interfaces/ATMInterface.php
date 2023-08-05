<?php
namespace Core\Interfaces;

interface ATMInterface {
    public function authenticate();
    public function checkBalance();
    public function deposit($amount);
    public function withdraw($amount);
    public function transfer($amount, $targetAccount);
}