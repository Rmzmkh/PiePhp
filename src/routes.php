<?php
    namespace Core;

    Router::connect('/', ['Controller' => 'AppController', 'action' => 'indexAction']);
    Router::connect('/register', ['Controller' => 'UserController', 'action' => 'addAction']);
?>