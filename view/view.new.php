<?php include 'model/model.new.php'



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monoton&effect=neon">


  
<title>New Posts</title>

</head>

<body>
<div class="font-effect-neon">BLOG</div></br></br>  

<?php  include 'view/include.php'; ?>



    <form action = "model/model.new.php" method ="GET">
    
    
    
 
     <?php foreach ($pdo->query($sql) as $row) { ?>

       
        <div class = "php">
            
           <p><b><?=  $row['created_by']?></b></b></p>

    
           <p> <?=  $row['post_title']?> <br /><br /></p>


           <br /><br /><p><?=  $row['post_text']?> </p><br /><br />

           <p> <img src=<?= $row ['link']?> width = "350"  height= "200"><br /><br /> </p>
           
           <p><?= $row ['creadet_at']?><br /></p>
           
        </div>

     </form></br></br>
            
    <?php } ?>  

  


     

    
    
        

        
    
    </br><footer  id = "footer">Autor/in: du.</br></br> <a href = "https://creativecommons.org/licenses/by/3.0/">licenses to the music</a></footer>
</body>
</html>


