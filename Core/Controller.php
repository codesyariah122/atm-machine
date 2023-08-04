<?php
/**
* @author : Puji Ermanto <pujiermanto@gmail.com>
* @return construct
**/

namespace Core;

class Controller {
    
    protected static $view;

    public function __construct() {
        session_start();
        $this->view = new View();
    }
}


