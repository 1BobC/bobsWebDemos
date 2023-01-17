<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Many Fields PHP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.CSS">
    </head>
    <body>
    <h4>Form input types 4:36:30 to 4:49:40</h4>
    <form method="post" action= "more.php">
        <p><label for="input01">Account:</label>
        <input type= "text" name= "account" id="inp01" size= "40" ></p>
        <p><label for="input02">Password:</label>
        <input type= "password" name= "pw" id="inp02" size= "40" ></p>
        <p><label for="input03">Nick Name:</label>
        <input type= "text" name= "nick" id="inp03" size= "40" ></p>   
        <p>Preferred Time:<br/>
        <input type= "radio" name="when" value= "am">AM<br>
        <input type= "radio" name="when" value= "pm" checked>PM</p>
        <input type= "checkbox" name="class1" value="fcode12" checked>
            fcode12 - HTML<br>
        <input type= "checkbox" name="class" value="pcode34">
            pcode34 - CSS<br>
        <input type= "checkbox" name="class">
        <!-- try this with and without a value -->
            ncode56 - JavaScript<br></p>    
        <input type = "submit"/>
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
    <?php
    ?>
        <script src="" async defer></script>
    </body>
</html>
