<?php

$betreff = $_POST ['betreff'] ?? '';


$user = 'root';
$password = '';
$database = 'blog';

$pdo = new PDO('mysql:host=localhost;dbname=' . $database, $user, $password,[

PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);

if(isset($_POST['submit'])) {
    $betreff = $_POST ['betreff'] ?? '';
    $post=$_POST['post'];
    

$query = "INSERT INTO posts (betreff, post)
VALUES ('$betreff', '$post')";

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "stylesheet.css">
    <title>Blog</title>
</head>

<body>

    <div class = header><h1>BLOG</h1> </div>


    <?php
        include 'include.php';
     ?>

     
    <main>

    <form action = "index.php" method ="post">

    <label for = "betreff">Betreff</label><br/>

    <input type = "text" id = "betreff" name ="betreff" value="<?= $betreff ?? '' ?>" ><br/><br/>
    
    
    <label for = "post">Post</label><br/>

    <textarea name= "post" id = "post" cols = "40" rows = "5"></textarea></br>

    </form>

    <input type = "submit" value = "Posten"></br>
    </main>

    </br><footer>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</footer>
    
</body>
</html>