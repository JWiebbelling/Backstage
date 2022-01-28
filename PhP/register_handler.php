<?php

    if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name']))
    {

        require 'db_connection.php';

        $name  = $_POST['name'];
        $email = $_POST['email'];
        $password = sha1($_POST['password']);

        $stmt = $conn->prepare("INSERT INTO users (name, email, password) 
                                VALUES (:name, :email, :password)");

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        $stmt->execute();
        
        header("Location: /PhP/index.php?register=succes");
    }
    else
    {
        header("Location: /backstage");
    }
?>