<?php

$errors = [];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'] ?? '';
    $name = htmlspecialchars($name);
    $betreff = $_POST['betreff'] ?? '';
    $betreff = htmlspecialchars($betreff);
    $post = $_POST['post'] ?? '';
    $post = htmlspecialchars($post);
    $link = $_POST['link'] ?? '';
    $link = ($link);
    

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

        $conn = new PDO('mysql:host=mysql2.webland.ch;dbname=d041e_meoltieki', 'd041e_meoltieki', '54321_Db!!!');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $conn->prepare("INSERT INTO posts (created_by, post_title, post_text, link ) VALUES (  :name, :betreff, :post, :link) ");

        


        $sql->execute([':name' => $name, ':betreff' => $betreff, ':post' => $post,  ':link' => $link ]);
        echo "New record created successfully";
        $conn = null;
    }

   

   


}



        
