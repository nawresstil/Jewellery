<?php

// $conn = mysqli_connect('localhost','root','','user_db');

$servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "prods";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }
?>