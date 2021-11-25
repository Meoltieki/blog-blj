<?php



$user = 'root';
$password = '';
$database = 'blog';

$pdo = new PDO('mysql:host=localhost;dbname='. $database, $user, $password);

        $sql = "SELECT creadet_at, created_by, post_title, post_text FROM posts ";
        

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
    <meta name="robots" content="noindex">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "stylesheet.css">
    <title>New Posts</title>
</head>

<body>

<div class = header><h1>BLOG</h1> </div>

    <?php include 'include.php' ?>

    

    <form action = "new.php" method ="GET">
    
    
    
 
     <?php foreach ($pdo->query($sql) as $row) { ?>

        <div class = "php">

           <p><?=  $row['created_by']?> </p><br /> 
           <p> <?=  $row['post_title']?></p> <br /><br />
           <p><?=  $row['post_text']?> </p><br /><br />
           <p><?= $row ['creadet_at']?></p>

        </div>

    <?php } ?>
    
        

        
    
    </br><footer>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</footer>
</body>
</html>


