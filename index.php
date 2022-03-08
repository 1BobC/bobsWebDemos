<!-- First attempt at using php -->

<h1>First attempt with PHP</h1>
<p>
<?php
    echo "Hello to you!\n";
?> 
</p>

<p><?php
    $data = array("TWD ", "provides technical tutorials", " and they are good!");
    echo $data[0];
    echo $data[1];
    echo $data[2];
?></p>
<p><?php
    echo "  And these arrays say...", " - ", "Thank you TWD!";
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
            echo 
            $data[1];
            echo 
            "Thank you TWD";
        ?>
        </p>



