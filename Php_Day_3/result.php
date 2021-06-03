<?php

$a = $_POST['txt1'];
$b = $_POST['txt2'];
$c = $_POST['txt3'];
$d = $_POST['txt4'];
$e = $_POST['txt5'];
$f = $_POST['txt6'];
$g = $_POST['txt7'];
$h = $_POST['txt8'];
$total = $e+$f+$g+$h;
$percentage = ($total/400)*100;
$min=35;
$max=100;
$e='Php';
$f='Cns';
$g='Java Script';
$h='Database';
    if($total<=100){
        echo "Out of 400 your total is $total.You are fail";
	}
    else if($total >100 && $total<=150){
        echo "Out of 400 your total is $total and your percentage is $percentage.Your grade is C and you  are PASS";
	}
    else if($total>150 && $total<=320){
        echo "Out of 400 your total is $total and your percentageis $percentage.Your grade is B and you are PASS";
	}
    else if($total>320 && $total<=400){
	echo "Out of 400 your total is $total and your percentageis $percentage .Your grade is A and you are PASS";
	}
    else if(!is_numeric($total)){
	echo "Not a valid input please enter Number between 1-100";
	}


?>