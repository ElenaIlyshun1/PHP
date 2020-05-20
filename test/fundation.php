<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Today is <?php echo date('d.m.Y h:i'); ?>
</body>
</html> -->

<?php
echo 'test';
//змінна
$x = 12; ///global
function test() //local
{
    $x = 10; //local
    $GLOBALS["x"] = 7;
    global $x; //-тільки в функції
}

function test_2()
{
    static $id; //тількі в функції, але вона якби глобальна
    $id++;
    echo $id;
}
////////////////////////////
$_variable1 = 100; //integer(int) - global
$_variable2 = 200.12; //float
echo '<hr>';
echo 'test : $_variable1'; //show text
echo '<hr>';
echo "test : $_variable1"; //show number
$c = 'Howdy ho!'; //string
$d = "Howdy ho!";
echo '<br>';
echo $_variable1;
echo '<hr>';
echo $_variable2;
$e = array(1, 5, 8, 9, 6, 15, 25); //massiv numbers
$f = array(
    'Olya',
    'Mukola',
    'Anni',
    "Greg"
); //massiv string
echo '<hr>';
echo $e[5];
echo '<hr>';
echo $f[2];
//asotiation massiv
$r = array(
    'name' => "Alan",
    'surname' => 'Amorov',
    'age' => 20,
    'byear' => 1998,
    'education' => array('school in 2005', 'college in 2015'),
    'married' => true,
    'smoking' => false,
    'geek' => true
);

echo '<hr>';
echo "  ";
echo $r['name'];
echo "  ";
echo $r['surname'];
echo "  ";
echo $r['age'];
echo "  ";
echo $r['byear'];
echo '<hr>';
echo "  ";
echo $r['education'][0];
echo "  ";
echo $r['education'][1];
$h = true; //or false
echo '<hr>';
echo "  ";
//////massiv
$array = array(12, -3, 55, 45, "string", false);
$array[] = "new element";
for ($i = 0; $i < count($array); $i++) {
    echo "el with index $i= " . $array[$i] . '<br>';
}
echo '<hr>';
///koncatenation .
$name = 'Alan';
$surname = 'Murow';
echo $name . ' ' . $surname;
///////////////////////////// or , and, <, > ,==, !=,<=
echo '<hr>';
//$weather = "rain";
//$weather = "snowy";
$weather = "hot";
//$weather = "windy";
if ($weather == 'rain') {
    echo 'Take your umbrella';
}
if ($weather == 'snowy') {
    echo 'Put on coat';
}
if ($weather == 'hot') {
    echo 'Put on the hat';
}
if ($weather == 'windy') {
    echo 'Sit at home';
}
echo '<hr>';
/////////for
for ($i = 1; $i <= 10; $i++) {
    //echo $i;
    if ($i % 2 == 0) {
        echo $i . 'guys umber';
    } else {
        echo $i . 'odd
        umber';
    }
    echo '<br>';
}
echo '<hr>';
/////////foreach
$names = array(
    'Olya',
    'Mukola',
    'Anni',
    "Greg"
);
foreach ($names as $value) {
    echo $value . '<br>';
}
echo '<hr>';

$numbers = array(
    5, 4, 8, 6, 9
);
foreach ($numbers as $num) {
    echo 'Kyb of number' . $num . ' = ' . ($num * $num) . '<br>';
}
echo '<hr>';
////////////////funcltion
function get_bigger($a, $b)
{
    if ($a > $b) {
        echo $a;
    } else {
        echo $b;
    }
    echo '<br>';
}
get_bigger(5, 7);
echo '<hr>';
///////////function abs, round, ceil, floor, rand, min, max
echo abs(-3000);//по модулю
echo '<br>'; //абсолютне число
echo round(50.30);//заокруглює по правилах загальних
echo '<br>'; 
echo ceil(50.11);//округлює завжди в більшу сторону
echo '<br>'; 
echo floor(15.15);//округлює завжди в меншу сторону
echo '<br>'; 
echo rand(0, 100);//випадкове число
echo mt_rand(0, 100);//випадкове число
echo '<br/>'; 
echo min(5, 4, 8, 3, 9, 1);
echo '<br/>';
echo max(5, 4, 8, 3, 9, 1);
echo '<br/>';
$z = 1;
echo sin($z);
echo cos($z);
echo asin($z);
echo acos($z);
echo atan($z);
/////////////const
define("PI", 3.14);
echo PI;
////////////////get average asotiation massive
$sum = 0;
echo getAverage(array("first" => 5, "sek" => 15, "third" => 25, "forth" => 35)); //"first - key
function getAverage($array)
{
    foreach ($array as $key => $value) {
        $sum += $value; /////local 
    }
    return $sum / count($array);
}
echo "<br/>";
//////////////////двухмірні масиви
$array = array(array(12, 5.5, "hello", true), array('test'), array(55, "happy"));
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        echo $array[$i][$j] . " | ";
    }
    echo "<br/>";
}
