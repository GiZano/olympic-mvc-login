<?php

    /*

    ********************************************
    *                                          *
    * MVC - CONTROLLER                         *
    * Project: Volunteer Milano-Cortina Portal *
    * Author: GiZano                           *
    *                                          *
    ********************************************

    */

    require_once __DIR__ . '/../model/data.php';

    createSession();

    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] == 'login'){
        require_once __DIR__ . '/./login.php';
    }

    if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && $_GET['action'] == 'logout'){
        require_once __DIR__ . '/./logout.php';
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['action'] == 'register'){
        require_once __DIR__ . '/./register.php';
    }

    if( isset($_SESSION['logged_user']) ){

        require_once __DIR__ . '/../view/volunteer_view.php';
    }else{
        
        $username = (isset($_SESSION['username']) ? $_SESSION['username'] : '');
        require_once __DIR__ . '/../view/home_view.php';
    }


 ?>