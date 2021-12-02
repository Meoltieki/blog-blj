<?php include 'model/model.new.php'



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  
    <title>New Posts</title>
</head>

<body>
<div class = header><h1>BLOG</h1> </div>

    <?php include 'include.php'?>



    <form action = "model/model.new.php" method ="GET">
    
    
    
 
     <?php foreach ($pdo->query($sql) as $row) { ?>

       
        <div class = "php">
            
           <p><b><?=  $row['created_by']?></b> </p><br /> 
    
           <p> <?=  $row['post_title']?></p> <br />
           <p><?=  $row['post_text']?> </p><br />
           <p> <img src=<?= $row ['link']?> width = "350"  height= "200"> </p>
           
           <p><?= $row ['creadet_at']?></p>
           
        </div>
                
        

            <form action = "model/model.new.php" method = "POST">

                <?php foreach ($pdo->query($tt) as $row) { ?> 
                    
                    <p><?= $row ['comment']?></p>

                <?php } ?>
            
            </form>

     </form>
            
    <?php } ?>  

    <form action = "model/model.new.php" method = "POST">

       
       
        
            <label for="comment">Comment</label><br />
            <textarea name="comment" id="comment" cols="40" rows="2"><?= ($comment ?? '') ?></textarea></br>

             <input type="submit" value="Comment"></br>

            
             
        </form></br>


     

    
    
        

        
    
    </br><footer  id = "footer">Autor/in: du. </footer>
</body>
</html>


