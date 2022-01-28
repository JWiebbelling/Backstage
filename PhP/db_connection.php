<?php

    //variables for DB
    $server_name = 'localhost';
    $username = 'root';
    $DBpassword = '';
    $db_name = 'backstage';

    //try to make the conenction
    try{
        
        //connetion
        $conn = new PDO("mysql:host=$server_name;dbname=$db_name", $username, $DBpassword);
 
        //set up the PDO errror mode to exeption
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOExeption $e) {

    }
    
?>