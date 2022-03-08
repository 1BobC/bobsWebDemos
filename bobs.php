<!-- <!DOCTYPE html> 
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.CSS">
<title></title>
</head>

<body>


<script src="jscript.js"></script>
<span class="px-viewport-dimensions tr px-viewport-dimensions--hidden"></span>
</body>

</html> -->
<link rel="stylesheet" href="style.CSS">

<h1>This is html but a bit slow to code</h1>

<p>This is still html but hope that the php code follows...</p>
<h4><?php
    $data = array("TWD ", "Makes technical tutorials", " on Youtube");
    echo $data[0];
    echo $data[1];
    echo $data[2];
?></h4>
<p><?php
    echo "  And these arrays say...";
    echo $data[0];
    echo $data[1];
    echo $data[2];
    echo ",    So thank you very much TWD!";
?></p>
<p><?php 
    echo "What is the answer of six times seven\n";
    $answer = 6 * 7 ;
    echo "If the answer is:  $answer, what was the question?\n";
?>
</p> 
<p>
        <?php
            echo 
            "Hello to you!\n";
        ?> 
        </p>
    
        <p>
        <?php
            $data = array("a", "b", "c");
            echo"Data array ";
            echo 
            $data[0],[1],[2];
            echo 
            ":  Thank you very much TWD";
        ?>
        </p>
<h1>Ok so far but I see the difference now that html is shown directly in the browser -</h1>
<h1>while  php code has to go to a php server and back to the browser. </h1>
<h1>Maybe I will find an elegant solution - eventually!</h1>