<!-- Expressions 3:08:00 -->
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dr Chuck PHP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.CSS">
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
    $x = "<br>" . 'Hi there, ' . ' everybody' . "<br>" ;
    echo($x);
?>

<?php
    echo "<br>" ;
    echo "Ternery Operator " ;
    $www = 123 ;
    $msg = $www > 100 ? "Large" : "Small" ;
    echo "<br>" ;
    echo "First: $msg " ;
    $msg = ($www % 2 == 0) ? "Even" : "Odd" ;
    echo "<br>" ;
    echo "Second: $msg " ;
    $msg = ($www % 2) ? "Odd" : "Even" ;
    echo "<br>" ;
    echo "Third: $msg <br>" ;
?>
 
 <?php
    echo "<br>" ;
    echo "Side effect assignment with contractions (eg concatination or += etc) 3:17:16" ;
    $out = "Hello" ;
    $out = $out . "  " ;
    $out .= "World!" ; 
    echo "<br>" ;
    echo "$out" ;
    $count = 0 ;
    $count += 1 ;
    echo "<br>" ;
    echo "Count is: $count" ;    
 ?>

 <?php
    echo "<br>";
    echo "Conversion (php aggressive implicit), Casting (explicic specific individual) 3:19:00";
    $a = 56; $b = 12;
    $c = $a / $b;
    echo "<br>";
    echo "C: $c";
    $d = "100" + 36.5 + TRUE;
    echo "<br>";
    echo "D: " . $d;
    echo "<br>";
    echo "D2: " . (string) $d;
    $e =  (int) 9.9 - 1 ;
    echo "<br>";
    echo "E: $e";
    // $f = "sam" + 25;
    //echo "<br>";
    //echo "F: $f ";
    //$g = "sam" . 25;
    //echo "<br>G: $g";
    echo "<br>Python needs specific casting for the code above to prevent trace backs";
    echo "<br><br>But this code using FALSE and TRUE is in another world!";
    echo "<br> A" . FALSE . "B";
    echo "<br> X" . TRUE . "Y";
    ?>

<?php
    echo "<br>Equality V Identity (== is aggressive!) - Ready?";
    if (123 == "123") print ("<br>Equality 1" );
    if (123 == "100" + 23) print ("<br>Equality 2" );
    if (FALSE == "0") print ("<br>Equality 3" );
    if ((5 < 6) == "2" - "1") print ("<br>Equality 4" );
    if ((5 < 6) === TRUE) print ("<br>Equality 5" );
    echo "<br>Chuck says: use === on TRUE, FALSE, NULL. The documentation says so!";
 ?>

<?php
    echo "<br><br>More on PHP variables and expressions from 3:25:16";
 ?>

<?php
    echo "<br>";
    echo "Triple equals examples both work / not work";
    $vv = "Hello World!";
    echo "<br>" . "First;" . strpos($vv, "Wo") ;
    echo "<br>" . "Second;" . strpos($vv, "He") ;
    echo "<br>" . "Third;" . strpos($vv, "ZZ") ;
    if (strpos($vv, "He") == FALSE) echo "<br>" . "Wrong A" ;
    if (strpos($vv, "ZZ") == FALSE) echo "<br>" . "Right B" ;
    if (strpos($vv, "He") !== FALSE) echo "<br>" . "Right C" ;
    if (strpos($vv, "ZZ") !== FALSE) echo "<br>" . "Wrong C1" ;
    if (strpos($vv, "He") === FALSE) echo "<br>" . "Wrong D" ;
    if (strpos($vv, "ZZ") === FALSE) echo "<br>" . "Right D1" ;
    print_r(FALSE); print(FALSE);
    echo "<br>". "Where were they?";
    echo "<br><br>" . "Reached 3:27:31";
 ?>
<?php
    echo "<br>";
 ?>
<?php
    echo "<br>". "Simple for loop 3:37:05";
        // before loop starts
                    // loop runs while true (top test)
                                // run after each iteration
    for ($count=1; $count<= 6; $count++) {
        echo "$count times 6 is " . $count * 6;
        echo "<br>";
    }
?> 
<?php
    echo "<br>";
 ?>
 <?php
    echo "<br>". "ARRAYS, starting 3:42:00" ;
    echo "<br>";
    echo  "<br>". "Integer indices". "<br>";
    $stuff = array("Hi", "there");
    echo "Array 'stuff' integer 1 is: ", $stuff[1], "<br>"; 
    echo  "Key  / value". "<br>";
    $moreStuff = array("name" => "Bob",
                        "course" => "WA4E");
    echo "Array key is: course. Value is: ", $moreStuff["course"], "<br>";
    echo ("<pre><br>");
    ?>
    <?php
    $moreStuff = array("name" => "Bob",
    "course" => "WA4E");
    //echo ("<pre><br>");
    //print_r("Array key is: name. Value is: ", $moreStuff["name"]);
    echo "Array key is: name. Value is: ", $moreStuff["name"];
    //echo ("<br><pre><br>");
    echo "<br>";
    ?>

    <?php
    //Playing with presentation for debug
    echo"Array = ('name' => 'June', 'course' => 'Deutsch');";
    echo"<br>";
    $AmoreStuff = array("name" => "June", "course" => "Deutsch");
    //echo("<pre>/n" );
    //print_r("Array key is: name. Value is: ", $AmoreStuff["name"]);
    echo"<br>";
    echo"Array key is: name. Value is: ", $AmoreStuff["name"];
    //echo("/n<pre>/n" );
    ?>

    <?php 
    // echo"<br>";
    // echo"Building up an array";
    // echo"<br>";
    // echo"array va() is:";
    // echo"<br>";
    // $va = array();
    // $va[] = "One Two";
    // $va[] = "Three Four";
    // print_r ($va);
    $va = array("One Two", "Three Four");
    //echo"array va is also: ", $va;
    print_r ($va);
    ?>
    <?php
    echo"<br>";
    echo "Looping through an array with 'foreach'", "<br>";
    $stuff =  array("name" => "June",
                     "activity" => "Choir",
                    "name" => "Bob",
                    "activity" => "Coding",
                    "name" => "Finn",
                    "activity" => "Jiu-Jitsu");
    foreach($stuff as $k => $v) {
        echo "Key = ", $k, ".  Value = ", $v, ". <br>";
    } 
             
    ?>

        <script src="" async defer></script>
    </body>
</html>
