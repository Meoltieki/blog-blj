<?php
$user = 'root';
$password = '';
$database = 'blog';

$conn = new PDO('mysql:host=localhost;dbname=' .$database, $user, $password);

$limit = 10;
$statement = $conn->prepare("SELECT `created_by`, `creadet_at`, `post_title`,`post_text` FROM `posts` ORDER BY `id` DESC LIMIT :limit");
$statement->bindParam(':limit', $limit, PDO::PARAM_INT);
$statement->execute();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "stylesheet.css">
    <title>New Posts</title>
</head>

<body>

<div class = header><h1>BLOG</h1> </div>

    <?php include 'include.php' ?>


</body>
</html>


