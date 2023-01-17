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
        ini_set('display_errors', 1); 
        //phpinfo();
        ?>  

     

        <h3>First expression example:</h3>
<?php
    echo'First expression example.' ;
    echo("<br>");
    
    //$x = "15" + 27 ;  
    $t = 15;
    $u = 27;  
    $x = $t + $u;
    echo"<p>The answer to the Universe, Life and Everything is: $x</p>" ;
    //echo("<br>"); 
    $y = "27" * 150 ;   
    echo"<p>The answer is: ($y)</p>";
?> 
<?php
    $x ='Hi there, ' . ' everybody' ;
    echo"<p>The answer is:($x)</p>";
?>
    <h3>Ternery Operator:</h3>
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
    <h3>Concatination or += etc:</h3>
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
    <h3>Conversion Casting:</h3>
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
    <h3>Equality V Identity:</h3>
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
    <h3>Simple for loop:</h3>
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
    <h3>ARRAYS:</h3>
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
    // print_r ($va);<?php
    
    ?>
    $va = array("One Two", "Three Four");
    //echo"array va is also: ", $va;<h4>Write your own functions.</h4>
    print_r ($va);
    
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
    <?php
    echo "Looping through an array with 'count'", "<br>";
    $ay = array("Kelly", "Shona", "Lyndsay", "Mike");
    for ($i = 0; $i < count($ay); $i++) {
        echo"I = ", $i, " Val = ", $ay[$i];
    }
    echo"<br>";
    ?>
    <?php
    echo"<br>";
    echo "An array of arrays", "<br>";
    $race = array(
        'entrants' => array(
            'team1' => "black",
            'team2' => "red",
            'team3' => "green",
            'team4' => "blue"
        ),
        'officials' => array(
            'starter' => "tom",
            'time' => "dick",
            'marshal1' => "harry",
            'marshal2' => "harriet"
        ),
        'support' => array(
            'mechanic' => "finn",
            'food' => "freya",
            'drink' => "shona",
            'towels' => "me"
        )
        );
        echo$race["entrants"] ["team3"];
        
        echo$race["officials"] ["marshal2"];
        echo"<br>";
        echo$race["support"] ["towels"];
        echo"<br>";
    ?>
    <!-- From 4:02:21 Built-in functions 
        examples and NB can be similar to C string functions-->   
        <h3>Built-in functions:</h3> 
        <?php
        echo"<br>";
        echo strrev(" .dlroW olleH");
        echo"<br>";
        echo str_repeat("Hi di hi. ", 2);
        echo"<br>";
        echo strtolower("HERE WE, HERE WE, HERE WE... ARE!");
        echo"<br>";
        echo strlen("The quick brown fox... etc.");
        echo"<br>";
    ?>  
      <!--Write your own functions  -->
      <h3>Write your own functions:</h3>
    <?php
      function _meet() {
        print "<p>Hallo.</p>";
      }
      function _greet() {
        print "<p>Es freut mich zu kennen lernen.<p>";
      }
      echo"<br>";
      echo _meet() ; 
      echo _greet();
      echo"<br>";
    ?>  
    <!-- echo"<p>The answer to the Universe, Life and Everything is: $x</p>" ; 
    OK for styling variables but for functions?
    Include style ref in the function-->
    <?php
    echo"<h4>Function return values in text and in numerals</h4";
    function _gruss() {
        return "<p>Hallo</p>";
    }
    echo"<br>";
    print _gruss(). "<p>June</p>";
    print _gruss(). "<p>Bob</p>";
    echo"<br>";
  
    function _gross(int $m, int $n) {
        $o = $m + $n;
        return "<p>$o</p>";
    }
    print "<p>99 plus 1001. Some sum eh!</p>". _gross(99, 1001);
    echo "<p>199 plus 2001. Some sum eh!</p>". _gross(199, 2001);
    echo"<br>";
    ?>
    <h3>Have a go at the 'Guessing game' form GET check url</h3>
<form>
    <p><label for = "guess">Input Guess</label>
    <input type= "text" name="guess" id="guess"/></p>
    <input type = "submit"/>
</form method="get"> <!--can be here--->
    <pre>
        $_GET:
    <?php
        print_r($_GET);
    ?>   
    </pre>
    <h3>Have a go at the 'Guessing game' form POST and check url</h3>
    <form method="post"> <!--or here--->
    <p><label for = "guess1">Input Guess</label>
    <input type= "text" name="guess1" id="guess1"/></p>
    <input type = "submit"/>
</form>
    <pre> 
        $_POST:
    <?php
        print_r($_POST);
    ?> 
    </pre>  
    <!-- See note below -->
    <h4>Form input types 4:36:30 to 4:49:40</h4>
    <form method="post" action= "more.php">
        <p><label for="input01">Account:</label>
        <input type= "text" name= "account" id="inp01" size= "40" ></p>
        <p><label for="input02">Password:</label>
        <input type= "password" name= "pw" id="inp02" size= "40" ></p>
        <p><label for="input03">Nick Name:</label>
        <input type= "text" name= "nick" id="inp03" size= "40" ></p>   
        <input type = "submit"/>
    </form>   
    <pre> 
        $_POST:
    <?php
        print_r($_POST);
    ?> 
    </pre>    
   <!-- This example only works in a file called more php Doh! -->

    

    <?php
    echo"<p>Page End</p>";
    ?>
    <?php
    ?>
        <script src="" async defer></script>
    </body>
</html>
