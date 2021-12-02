<?php include 'model/model.home.php'?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="robots" content="noindex">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Monoton&effect=neon">

  <div class="font-effect-neon">BLOG</div></br></br>
</head>

<body>

    


    <?php  include 'include.php'; ?>


    <div class="error-box">
        <ul>
            <?php foreach ($errors as $error) { ?>
                <li><?= $error ?></li>
            <?php } ?>
        </ul>
    </div>


    <main>
       
        <div class="kasten">
        <form action="index.php" method="POST">
            
            <label for="name">Name</label><br />

            <input type="text" id="name" name="name" value="<?= htmlspecialchars($name ?? '') ?>"><br /><br />
            

            <label for="betreff">Betreff</label><br />

            <input type="text" id="betreff" name="betreff" value="<?= htmlspecialchars($betreff ?? '') ?>"><br /><br />


            <label for="post">Post</label><br />

            <textarea name="post" id="post" cols="40" rows="5"><?= ($post ?? '') ?></textarea></br>

            <label for="link">Bild</label><br />
            <input type="text" id="link" name="link" border-radius: 5px 5% value="<?= htmlspecialchars($link ?? '') ?>"><br /><br />

            <input class="button glow-button" type="submit" value="Posten"></br>
        
        </form>
        </div>
    </main>
    
    </br>
    <footer>Autor/in: du.</br></br> <a href = "https://creativecommons.org/licenses/by/3.0/">licenses to the music</a></footer>

</body>

</html>