<?php



$pdo = new PDO('mysql:host=mysql2.webland.ch;dbname=d041e_meoltieki', 'd041e_meoltieki', '54321_Db!!!');

        $sql = "SELECT creadet_at, created_by, post_title, post_text, link FROM posts Order BY ID DESC";

?>