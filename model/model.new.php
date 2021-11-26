<?php



$user = 'root';
$password = '';
$database = 'blog';

$pdo = new PDO('mysql:host=localhost;dbname='. $database, $user, $password);

        $sql = "SELECT creadet_at, created_by, post_title, post_text FROM posts Order BY ID DESC";

        $tt = "SELECT comment From comment Order By ID";

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {  

        $comment = $_POST['comment'] ?? '';
        $comment = htmlspecialchars($comment);  

        $comment = trim($comment);

        $conn = new PDO('mysql:host=localhost;dbname=' . $database, $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $tt = $conn->prepare("INSERT INTO comment (comment) VALUES (:comment) ");

        $tt->execute([':comment' => $comment]);
        echo "New record created successfully";
        $conn = null;
 }
?>