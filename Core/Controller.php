<?php
/**
* @author : Puji Ermanto <pujiermanto@gmail.com>
* @return construct
**/

namespace Core;

class Controller {
    
    protected $view;

    public function __construct() {
        $this->view = new View();
    }
}


