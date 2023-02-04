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
    <h2>Validate incoming guessing game data</h2>
    <form method= "post">
    <p><label for = "guess">Input Guess</label>
    <input type= "text" name="guess" id="guess"/></p>
    <!-- <p> -->
    <?php
    if (! isset($_GET["guess"]) ) {
        echo("Missing guess parameter");
    }else if (strlen($_GET["guess"]) <1 ) {
        echo("Your guess is too short");
    }else if ( ! isnumeric($_GET["guess"])) {
        echo("Your guess is not a number");
    }else if (strlen($_GET["guess"]) <42 ) {
        echo("Your guess is too low"); 
    }else if (strlen($_GET["guess"]) >42 ) {
        echo("Your guess is too high");
    }else {
        echo("Congratulations your guess is correct!");
    }
    ?>
    <!-- </p> -->
     <input type = "submit"/>
    </form>
    <pre> 
        $_POST:
    <?php
        print_r($_POST);
    ?> 
    <p>"Whoa! 04:59:11 Data verification for a guessing game not finished (does'nt work!)"</p>


    <?php
    echo"<p>Page End</p>";
    ?>
    
    <!-- 
   
     -->
        <script src="" async defer></script>
    </body>
</html>
