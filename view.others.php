<?php include 'model/model.others.php'?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monoton&effect=neon">


        <title>Document</title>
    </head>
    <div class="card">
    HELLO =)
    </div>

    <body>
    
    
    <div class="font-effect-neon">BLOG</div></br></br>

    <?php  include 'view/include.php'; ?>
    
    <div id = "wrapper">
    <?php
    foreach ($pdo->query($sql) as $row) { 
        $link = $row['url'];
        $description = $row['description'];
            echo "<p><a   href=  '  "   .  $link  .  " 'class='otherblogs  '  >"  . $description .   " </a></p>";
            }
            ?> </br></br>
     </div>
     
     </br><footer  id = "footer">Autor/in: du.</br></br> <a href = "https://creativecommons.org/licenses/by/3.0/">licenses to the music</a></footer>

    </body>
    </html>