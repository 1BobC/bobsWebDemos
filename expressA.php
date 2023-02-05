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
    <!-- Do again from video -->

    <h2>Validate incoming guessing game data</h2>
    <form method= "get">
    <p><label for = "guess">Input Guess</label>
    <input type= "text" name= "guess" id= "guess"
        size= "40" /></p>
     <input type = "submit"/>
    </form>
    
    
    <p><?php
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
    
    ?></p>

    
    <pre> 
        $_GET:
    <?php
        print_r($_GET);
    ?> 
    </pre>
    "Whoa! 04:59:11 Data verification for a guessing game not finished (does'nt work!)"
    <h4>Whoa again! you have been trying to make isolated examples work, Dr C will put it together, 
        so watch and wait and learn!!!</h4>

    <?php
    echo"<p>Page End</p>";
    ?>
    
    <!-- 
   
     -->
        <script src="" async defer></script>
    </body>
</html>
