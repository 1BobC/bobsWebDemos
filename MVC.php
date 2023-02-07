<!-- MVC 05:00:00 -->
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dr Chuck MVC</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="MVC.CSS">
    </head>
    <body>
    <h2>MVC 05:00:00 Guessing game</h2>
    <p>Model</p>
    <?php
        $oldguess= '';
        $message= false;
        if (isset($_POST['guess']) ) {
            //Nifty trick
            //Other data validation code can be put in - around here? 
            //context comes in here
            $oldguess= $_POST['guess'] + 0;            
            if ($oldguess= 42) {
                $message= "Great job!";    
            }else if ($oldguess < 42) {
                $message= "No, too low";
            }else{ $message= "No, too high";
        }
    }
    ?>
    
    <p>View</p>
    <?php   
        if ($message !== false) {
            //add code to check if message is false?
            echo ("<p>$message</p>\n");
        }        
    ?>
    <form method= "post">
        <p><label for= "guess">Input Guess</label>
        <input type= "text" name= "guess" id= "guess"
        size= "40" value= "<?php htmlentities($oldguess) ?>"/></p>
            <!-- and context comes in here -->
        <input type= "submit"/> 
    </form>
    <pre> 
        $_POST:
    <?php
        print_r($_POST);
    ?> 
    </pre>    

    <?php
    echo"<p>Page End</p>";
    ?>
    
        <script src="" async defer></script>
    </body>
</html>