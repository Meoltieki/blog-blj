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
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "stylesheet.css">
        <title>Document</title>
    </head>
    
    <body>
    
    <div class="header">
        <h1>BLOG</h1>
    </div>

    <?php  include 'include.php'; ?>
    <div id = "others">
    <?php
    foreach ($pdo->query($sql) as $row) { 
        $link = $row['url'];
        $description = $row['description'];
            echo "<a href='" . $link . "'class='otherblogs'>". $description . "</a><br>";
            }
            ?>
     </div>
    </body>
    </html>