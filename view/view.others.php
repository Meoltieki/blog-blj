<?php include 'model/model.others.php'?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
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
     </br><footer  id = "footer">Autor/in: du.</br></br> <a href = "https://creativecommons.org/licenses/by/3.0/">licenses to the music</a></footer>
    </body>
    </html>