<?php

$user = 'root';
$password = '';
$database = 'blog';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
try {
    $name = $_POST['name'] ?? '';
    $betreff = $_POST['betreff'] ?? '';
    $post = $_POST['post'] ?? '';

    $conn = new PDO('mysql:host=localhost;dbname=' . $database, $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $conn -> prepare("INSERT INTO posts (created_by, post_title, post_text, created_at) VALUES (:name, :betreff, :post, now())");

    $sql->execute([':name' => $name, ':betreff' => $betreff, ':post' => $post]);
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }

  $conn = null;
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

    <form action = "index.php" method ="POST">

    <label for = "name">Name</label><br/>

    <input type = "text" id = "name" name ="name" value="<?=htmlspecialchars($name ?? '' )?>" ><br/><br/>

    <label for = "betreff">Betreff</label><br/>

    <input type = "text" id = "betreff" name ="betreff" value="<?=htmlspecialchars($betreff ?? '') ?>" ><br/><br/>
    
    
    <label for = "post">Post</label><br/>

    <textarea name= "post" id = "post" cols = "40" rows = "5"value="<?=htmlspecialchars($post ?? '') ?>"></textarea></br>

    

    <input type = "submit" value = "Posten"></br>
    </form>
    </main>

    </br><footer>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</footer>
    
</body>
</html>