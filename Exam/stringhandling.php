<?php
$str = "Hello how are you?";
echo "<h1>String length</h1>";
echo "length of the string \"$str\" is : ",strlen($str);
echo "<h1>Number of words in a string</h1>";
echo "Number of strings in \"$str\" is : ", str_word_count($str);
echo "<h1>Reverse a string</h1>";
echo "string reverse of \"$str\" is : ",strrev($str);
?>