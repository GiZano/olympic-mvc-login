<?php

    /*

    ********************************************
    *                                          *
    * MVC - MODEL                              *
    * Project: Volunteer Milano-Cortina Portal *
    * Author: GiZano                           *
    *                                          *
    ********************************************

    */   
    
    ### Functions Section ###

    /**
     * Initializes Session with standard harcoded credentials
     * @return void
     */
    function createSession(){

        $credentials = [
            [
                "username" => "volunteer",
                "password" => "milan2026"
            ]
        ];

        if( !isset($_SESSION['credentials']) ){
            $_SESSION['credentials'] = $credentials;
        }
    }

    /**
     * Checks if there are credentials that match the same username and password
     * If correct, saves the user data inside "logged user"
     * @param string $username
     * @param string $password
     * @throws InvalidArgumentException 
     * @throws RunTimeException
     * @return void
     */
    function login(string $username, string $password){
        $found = false;

        if( count($_SESSION['credentials']) > 0){
            foreach($_SESSION['credentials'] as $creds){
                if($creds['username'] == $username && $creds['password'] == $password){
                    $found = true;
                    $_SESSION['logged_user'] = $creds;
                    break;
                }
            }

            if( !$found ){
                throw new InvalidArgumentException("Wrong username or password!");

            }
        }else{
            throw new RunTimeException("No users available!");
        }
    }

    /**
     * Unsets the logged user data inside the session
     * @return void
     */
    function logout(){

        unset($_SESSION['logged_user']);

    }


    function register($username, $password){
        $found = false;

        if( count($_SESSION['credentials']) > 0 ){
            foreach( $_SESSION['credentials'] as $creds ){
                if( $creds['username'] == $username){
                    $found = true;
                    throw new InvalidArgumentException("Username already exists!");
                }
            }
        }
        
        if( !$found ){
            $_SESSION['credentials'][] = [
                'username' => $username,
                'password' => $password
            ];
        }

    }

    ### Messages Handling ###

    /**
     * Resets message
     * @return void
     */
    function resetMessage(){
        unset($_SESSION['message']);
    }

    /**
     * Set the first part of the error message
     * @return void
     */
    function startErrorMessage(){
        resetMessage();
        $_SESSION['message'] = "<p style='color:red'> Error: ";
    }

    /**
     * Set the first part of the success message
     * @return void
     */
    function startSuccessMessage(){
        resetMessage();
        $_SESSION['message'] = "<p style='color:green'> Success: ";
    }

    /**
     * Add message part to message in session (only if it's correctly initialized)
     * @param mixed $message
     * @return void
     */
    function addMessagePart($message){
        if(isset($_SESSION['message'])){
            $_SESSION['message'] = $_SESSION['message'] . $message . ' - ';
        }
    }

    /**
     * Finish message by removing the excess ' - ' and putting the closing tag
     * Reset message if no messages were actually added
     * @return void
     */
    function finishMessage(){
        if( isset($_SESSION['message'])){
            if($_SESSION['message'] == "<p style='color:red'> Error: " || $_SESSION['message'] == "<p style='color:green'> Success: "){
                resetMessage();
            }else{
                $_SESSION['message'] = substr($_SESSION['message'], 0, strlen($_SESSION['message'])-1);
            }
        }
    }

?>