<?php

//Variable
//method 1

$a = 10;
$b = 20;

//Method 1
echo "A Value is ",$a;
echo "<br/>B Value is ",$b;
//Method 2
echo "<br/>A Value is ",$a."<br/>B Value is ",$b;
//Method 3
echo "<br/>A Value is $a<br/>B Value is $b";
//Method 4
echo '<br/>A Value is $a<br/>B Value is $b';
//In Single quotes it will display variable as a string
//In double quotes it will replace variable value

//Method 5
echo "<br/>A Value is $a<br/>B Value is $b Sum is".($a+$b);