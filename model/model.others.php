<?php

$pdo = new PDO('mysql:host=mysql2.webland.ch;dbname=d041e_dagomez', 'd041e_dagomez', '54321_Db!!!');
    $sql = "SELECT description, url FROM urls ORDER BY description asc";

    function connectToIPDatabase(){
    try {
        return new PDO('mysql:host=mysgl12.webland.ch;dbname=041e_dagomez', 'd041e_dagomez', '54321_Db!!!', [
            PDO::ATTR_ERRMODE                    =>      PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND         =>     'SET NAMES utf8',
        ]);
    } catch (PDOException $e){
        die('keine  Verbindung möglich: ' .$e->getMessage());

    }
   
    }
   
    ?>
    