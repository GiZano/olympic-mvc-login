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

    if( $_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action']) && $_GET['action'] == 'logout' ){
        logout();
        startSuccessMessage();
        addMessagePart("Logged out!");
    }

    header('Location: ./index.php');

?>