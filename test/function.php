<?php
$x = 15;
 if(isset($x)) echo "Is number***";//визначає чи є зміння чи ні
 else echo "No number***";
echo "<hr>";

unset($x);//видалає повністю всю змінну
if(isset($x)) echo "Is number";
else echo "No number";
echo "<hr>";

$a = "15";
$bool = true;
$null = 0;
 echo "Is Numeric - " . is_numeric($a)."<br/>";//чи це число
 echo "Is Integer - " . is_integer($a)."<br />";//чи це число
 echo "Is Double - " . is_double($a)."<br />";//чи дробове
 echo "Is String - " . is_string($a)."<br />";//чи строка
 echo "Is Boolean - " . is_bool($bool)."<br />";//
 echo "Is Scalar - " . is_scalar($a)."<br />";//чи це звичайна переміння
 echo "Is null - " . is_null($null)."<br />";
 echo "Is array - " . is_array($a)."<br />";//massive
 echo "Type - " . gettype($a)."<br />";
 echo "Type - " . gettype($null)."<br />";



 

