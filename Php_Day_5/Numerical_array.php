<?php
//Numerical Array
//Method 1
$a[0] = 10;
$a[1] = 20;
$a[2] = 20.50;
$a[3] = "P";
$a[4] = "6";
//Method 2 //Index Dynamic Array
$a[] = 10;
$a[] = 20;
$a[] = 20.50;
$a[] = "P";
$a[] = "6";
//Method 3
//Always use this method to create an array
$a = array(10,20,30,"P","C++",10.50,"php");
//Print Array Value
echo $a[3];
//Print Whole Array
for($i=0;$i< count($a);$i++){
    echo "<br/>".$a[$i];
}

$sum = array_product($a);
echo $sum;

//3 Inbuild Functions toDebug an Array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";