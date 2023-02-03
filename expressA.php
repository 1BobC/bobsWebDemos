<!-- continuation of file express php -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dr Chuck PHP continuation</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.CSS">
    </head>
    <body>
    <!-- Continue with Data Security, Integrity, Validation 04:50:10 -->
    <!-- This is the code that makes the data you entered persist BUT am not sure how to run it with 'guess' ?? -->
    <?php
    $oldguess= isset($_POST['guess']) ? $_POST['guess'] : '';
    ?>
    <p>Guessing game...</p>
    <form method= "post">
        <p><label for= "guess">Input Guess</label>
        <!-- <input type= "text" name= "guess" id= "guess"
        size= "40" value= "<?= $oldguess ?>"/></p> -->
        <input type= "text" name= "guess" id= "guess"
        size= "40" value= "<?= htmlentities($oldguess) ?>"/></p>
        <input type= "submit" />
    </form>
            <?= $oldguess ?>
            <!-- This is a shorthand version of the echo code below -->
</br>  
            <?php echo ($oldguess); ?>
<!-- All in place so let's see... -->
<!-- Yippee! Thanks Dr Chuck! -->
<!-- BUT if an HTML character is in the guess and you echo it,  THEN TROUBLE! - see change above... -->


    <?php
    echo"<p>Page End</p>";
    ?>
    
    <!-- 
   
     -->
        <script src="" async defer></script>
    </body>
</html>
