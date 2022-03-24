<?php
    use \Core\Controller, \Core\Request;
    class UserController extends \Core\Controller{
        public function addAction(){
            echo "test";
             $this->render('register');
        }
    }
?>