<?php
    echo "<b><u>String Operation</u></b><br>";
    $str = "Tejesh";
    echo $str;
    echo "<br>";
    $len = strlen($str);
    echo "The length of the String is ".$len."<br>"; // . is used to concatinate multiple String
    echo "The Number of words in the string is: ".str_word_count($str)."<br>";  
    echo "Reverse: ".strrev($str)."<br>";
    echo "Find Word: ".strpos($str, "sh") ."<br>";
    echo "Replace Word: ".str_replace("Tejesh", "Master_Coder", $str)."<br>";
?>