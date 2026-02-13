<?php

    /*

    ****************************************
    *                                      *
    * MVC - INDEX (entry point)            *
    * Project: Login Milano-Cortina        *
    * Author: GiZano                       *
    *                                      *
    ****************************************

    */

    // To be able to have a pseudo-persistant database of data for registration features
    session_start();

    // require the core controller of the project
    require_once __DIR__ . '/controller/home.php';

?>