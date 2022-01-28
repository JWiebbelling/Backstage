<?php

// check if email and password post variables are set 
if(isset($_POST['email']) && isset($_POST['password'])){
    // load database connection
    require 'db_connection.php';

    // save variables 
    $email = $_POST['email']; 
    $password = sha1($_POST['password']);

    // check if email exist in database 
    // make query to get user with email = email 
    $prepared = $conn->prepare("SELECT * FROM users WHERE email=:email AND password=:password");
    
    $prepared->execute([
        'email' => $email,
        'password' => $password,
    ]);

    // fetch results 
    $results = $prepared->fetchAll(PDO::FETCH_ASSOC);

    // check if there are results 
    if(empty($results)){
        header( "Location: /PhP/index.php?error=wrong_credentials" );
    }
    else{
        echo 'Logged in succesfully!';
    }
}

else
{    
    header( "Location: /backstage");
}

?>


