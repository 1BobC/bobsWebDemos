<!-- Expressions 3:08:00 -->
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
    echo'First expression example.' ;
    echo("<br>");
    $x = "15" + 27 ;    
    echo($x) ;
    echo("<br>"); 
    $y = "27" * 150 ;   
    echo($y) ;
?> 
<?php
    $x = "<br>" . 'Hi there, ' . ' everybody'  ;
    echo($x);
?>
<?php
    $www = 123 ;
    $msg = $www > 100 ? "Large" : "Small" ;
    echo "<br>First: $msg " ;
    $msg = ($www % 2 == 0) ? "Even" : "Odd" ;
    echo "<br> Second: $msg " ;
?>
 
        <script src="" async defer></script>
    </body>
</html>
