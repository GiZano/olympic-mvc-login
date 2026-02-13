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

    // Register Logic
    if( $_SERVER['REQUEST_METHOD'] == "POST" && $_POST['action'] == 'register'){
        startErrorMessage();

        if( isset($_POST['username']) ){
            $username = $_POST['username'];
        }else{
            addMessagePart("username not set!");
        }

        if( isset($_POST['password']) ){
            $password = $_POST['password'];
        }else{
            addMessagePart("password not set!");        
        }

        try{
            register($username, $password);
            resetMessage();
            startSuccessMessage();
            addMessagePart("user registered!");
        }catch (Exception $e) {
            addMessagePart($e->getMessage());
        }

    }

    header('Location: ./index.php');


?>