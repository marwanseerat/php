<?php
    if($_POST){
        
        foreach($_POST['arr'] as $x)
        {
        echo $x . "<br>";
        }
    }
    else 
        echo "<h1> you are don </h1>";
?>
