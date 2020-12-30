<?php
$num1 = $_POST['n1'];
$num2 = $_POST['n2'];
if($num1>$num2){
    echo "Entre el numero $num1 y $num2 el mayor es $num1";
}elseif($num2>$num1){
    echo "Entre el numero $num2 y $num1 el mayor es $num2";
}else{
    echo "El numero $num1 y $num2 son iguales";
}