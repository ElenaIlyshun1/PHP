<?php
$x = 15;
if (isset($x)) echo "Is number***"; //визначає чи є зміння чи ні
else echo "No number***";
echo "<hr>";

unset($x); //видалає повністю всю змінну
if (isset($x)) echo "Is number";
else echo "No number";
echo "<hr>";

$a = "15";
$bool = true;
$null = 0;
echo "Is Numeric - " . is_numeric($a) . "<br/>"; //чи це число
echo "Is Integer - " . is_integer($a) . "<br />"; //чи це число
echo "Is Double - " . is_double($a) . "<br />"; //чи дробове
echo "Is String - " . is_string($a) . "<br />"; //чи строка
echo "Is Boolean - " . is_bool($bool) . "<br />"; //
echo "Is Scalar - " . is_scalar($a) . "<br />"; //чи це звичайна переміння
echo "Is null - " . is_null($null) . "<br />";
echo "Is array - " . is_array($a) . "<br />"; //massive
echo "Type - " . gettype($a) . "<br />";
echo "Type - " . gettype($null) . "<br />";

//////////для роботи з масивами
$array = array(15, 8, 75, 46, 5);
echo count($array); ////кількість елементів
echo "<br />";
sort($array); ////сортування по зростанню не зберігаючи ключі
print_r($array);
echo "<br />";
rsort($array); //сортування по спаданню не зберігаючи ключі
print_r($array);
echo "<br />";
asort($array); ////сортування асоціативного масиву по зростанню зберігаючи ключі
print_r($array);
echo "<br />";
$alist = array("555" => 55, "11" => 11, "88" => 880);
arsort($alist); ////сортування асоціативного масиву по спаданню зберігаючи ключі
print_r($alist) . "<br />";
echo "<br />";
ksort($alist); ////сортування асоціативного масиву по спаданню по ключах 
print_r($alist) . "<br />";
echo "<br />";
krsort($alist); ////сортування асоціативного масиву по спаданню по ключах 
print_r($alist) . "<br />";
echo "<br />";
//////перемішати елементи
shuffle($array);
print_r($array);
echo "<br />";
/////співпадіння елементу
in_array(8, $array);
////add two massiv
$arr_1 = array(15, 5);
$arr_2 = array(8, 9, 12);
$arr_3 = array_merge($arr_1, $arr_2);
print_r($arr_3);
echo "<br />";
echo "<hr/>";
////slice massive
$arrDone = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
print_r($arrDone);
echo "<br />";
$arrDone = array_slice($arrDone, 1, -2);
print_r($arrDone);
echo "<br />";
