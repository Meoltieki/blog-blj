<?php include 'model/model.new.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "stylesheet.css">
    <title>New Posts</title>
</head>

<body>

<div class = header><h1>BLOG</h1> </div>

    <?php include 'include.php'?>



    <form action = "model/model.home.php" method ="GET">
    
    
    
 
     <?php foreach ($pdo->query($sql) as $row) { ?>

        <div class = "php">

           <p><?=  $row['created_by']?> </p><br /> 
           <p> <?=  $row['post_title']?></p> <br /><br />
           <p><?=  $row['post_text']?> </p><br /><br />
           <p><?= $row ['creadet_at']?></p>

        </div>

    <?php } ?>
    
        

        
    
    </br><footer  id = "footer">Autor/in: du. </footer>
</body>
</html>

