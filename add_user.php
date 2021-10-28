<?php

    $user_name = $_POST['user_name'];
    
    $user = 'root';
    $pass = 'WebDevelopment';
    $db = 'gamechangerdb';

    $conn = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

    
    $stmt = $conn->prepare("insert into users(user_name)values(?)");
    $stmt->bind_param("s",$user_name);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    
    header('Location: http://' .$_SERVER['HTTP_HOST'] . '/Web_Application_Project/Web_Application_Project/');
?>