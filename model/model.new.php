<?php



$user = 'root';
$password = '';
$database = 'blog';

$pdo = new PDO('mysql:host=localhost;dbname='. $database, $user, $password);

        $sql = "SELECT creadet_at, created_by, post_title, post_text FROM posts Order BY ID DESC";
        
?>