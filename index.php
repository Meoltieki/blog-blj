<?php

$errors = [];

$user = 'root';
$password = '';
$database = 'blog';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'] ?? '';
    $name = htmlspecialchars($name);
    $betreff = $_POST['betreff'] ?? '';
    $betreff = htmlspecialchars($betreff);
    $post = $_POST['post'] ?? '';
    $post = htmlspecialchars($post);

    $name = trim($name);
    $betreff = trim($betreff);
    $post = trim($post);

    if ($name === '') {
        $errors[] = 'Du hast keine Namen.';
    }

    if ($betreff === '') {
        $errors[] = 'Um was geht es denn?';
    }
    if ($post === '') {
        $errors[] = 'Da steht ja nichts?!';
    }


    if (count($errors) === 0) {

        $conn = new PDO('mysql:host=localhost;dbname=' . $database, $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $conn->prepare("INSERT INTO posts (created_by, post_title, post_text ) VALUES (  :name, :betreff, :post) ");

        $sql->execute([':name' => $name, ':betreff' => $betreff, ':post' => $post]);
        echo "New record created successfully";
        $conn = null;
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
    <link rel="stylesheet" href="stylesheet.css">
    <title>Blog</title>
</head>

<body>

    <div class="header">
        <h1>BLOG</h1>
    </div>


    <?php  include 'include.php'; ?>


    <div class="error-box">
        <ul>
            <?php foreach ($errors as $error) { ?>
                <li><?= $error ?></li>
            <?php } ?>
        </ul>
    </div>


    <main>

        <form action="index.php" method="POST">

            <label for="name">Name</label><br />

            <input type="text" id="name" name="name" value="<?= htmlspecialchars($name ?? '') ?>"><br /><br />

            <label for="betreff">Betreff</label><br />

            <input type="text" id="betreff" name="betreff" value="<?= htmlspecialchars($betreff ?? '') ?>"><br /><br />


            <label for="post">Post</label><br />

            <textarea name="post" id="post" cols="40" rows="5"><?= ($post ?? '') ?></textarea></br>



            <input type="submit" value="Posten"></br>
        </form>
    </main>

    </br>
    <footer>Autor/in: du.</footer>

</body>

</html>