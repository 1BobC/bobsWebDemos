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
        <input type= "checkbox" name="class" value="fcode12" checked>
            fcode12 - HTML<br>
        <input type= "checkbox" name="class" value="pcode34">
            pcode34 - CSS<br>
        <input type= "checkbox" name="class">
        <!-- try this with and without a value -->
            ncode56 - JavaScript<br></p> 
            <br>
        <!-- Drop down/ option box for drink and snack -->
        <p><label for="inp06">Which drink:
        <select name="Fizz" id="inp06">
            <option value="0">--Please select--</option>
            <option value="1">Coke</option>
            <option value="2">Pepsi</option>
            <option value="3">Water</option>
            <option value="4">Lemon</option>
            <option value="5">Orange</option>
        </select>
        </p>
        <!-- value can be text or integer -->
        <!-- one item can be shown as selected eg ..."3" selected>Water... -->
        <p><label for="inp07">Which snack:
        <select name="Snack" id="inp07">
            <option value="0">--Please select--</option>
            <option value="1">Peanuts</option>
            <option value="2">Burger</option>
            <option value="3">Chips</option>
            <option value="4">Apples</option>
            <option value="5">Pears</option>
        </select>
        </p>
        <br/>
        <!-- Text area -->
        <p><label for="inp08">Tell us all about yourself:<br/>
            <textarea rows= "10" cols= "40" id= "inp08" name="about">
                Well...
        </textarea>
        </p>  
         <!--Multiple select - Mmm... problematic for users!  -->
         <!-- Use control + click when selecting -->
        <p><label for="input09">Who is awsome?<br/>
        <select multiple="multiple" name= "code[]" id="input09">
            <option value="Finn">Finn</option>
            <option value="Freya">Freya</option>
            <option value="Hucky">Hucky</option>
            <option value="Orla">Orla</option>
        </select>
        <br/>
        <!-- Multiple buttons based on the Submit button Look out for use later in this tutorial -->
        <!-- <p>
            <input type="submit" name="dopost" value="Submit"/>
            <input type="button" 
            onclick="location.href='http://www.wa4a.com/'; return false;"
            value= "Escape">
        </p> -->
        <!-- Input box -->
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
