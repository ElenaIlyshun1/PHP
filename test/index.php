<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Today is <?php echo date('d.m.Y h:i');?>
</body>
</html> -->

<?php
echo 'test';

//змінна
$_variable1 = 100;//integer(int)
$_variable2 = 200.12;//float
echo '<hr>';
echo 'test : $_variable1';//show text
echo '<hr>';
echo "test : $_variable1";//show number
$c = 'Howdy ho!';//string
$d = "Howdy ho!";
$e = array(1,5,8,9,6,15,25);//massiv numbers
$f = array(
    'Olya',
    'Mukola',
    'Anni',
    "Greg"
);//massiv string
echo '<hr>';
echo $_variable1;
echo '<hr>';
echo $_variable2;
echo '<hr>';
echo $e[5];
echo '<hr>';
echo $f[2];
$r = array(
'name'=>"Alan",
'surname'=>'Amorov',
'age'=>20,
'byear'=>1998,
'education'=>array('school in 2005','college in 2015'),
'married'=>true,
'smoking'=>false,
'geek'=>true

);//asotiation massiv
echo '<hr>';echo "  ";
echo $r['name'];echo "  ";
echo $r['surname'];echo "  ";
echo $r['age'];echo "  ";
echo $r['byear'];
echo '<hr>';echo "  ";
echo $r['education'][0];echo "  ";
echo $r['education'][1];
$h = true;//or false
echo '<hr>';
///koncatenation .
$name = 'Alan';
$surname = 'Murow';
echo $name . ' '. $surname;
///////////////////////////// or , and, <, > ,==, !=,<=
echo '<hr>';
//$weather = "rain";
//$weather = "snowy";
$weather = "hot";
//$weather = "windy";
if ($weather == 'rain')
{
    echo 'Take your umbrella';
}
if ($weather == 'snowy')
{
    echo 'Put on coat';
}
if ($weather == 'hot')
{
    echo 'Put on the hat';
}
if ($weather == 'windy')
{
    echo 'Sit at home';
}
echo '<hr>';
/////////for
for($i=1;$i<=10;$i++)
{
    //echo $i;
    if ($i%2==0)
    {
        echo $i . 'guys umber';
    }
    else{
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
   foreach($names as $value)
   {
       echo $value . '<br>';
   }
   echo '<hr>';
  
   $numbers = array(5,4,8,6,9
   );
      foreach($numbers as $num)
      {
          echo 'Kyb of number' . $num . ' = ' .($num * $num) . '<br>';
      }
      echo '<hr>';
      ////////////////funcltion
      function get_bigger($a, $b)
      {
          if ($a > $b)
          {
              echo $a;
          }
          else{
              echo $b;
          }
          echo '<br>';
      }  
      get_bigger(5,7); 
      echo '<hr>';
      ///////////function abs, round, ceil, floor, rand, min, max
 echo abs(-3000);echo '<br>';//абсолютне число
 echo round(50.30);echo '<br>';//заокруглює по правилах загальних
 echo ceil(50.11);echo '<br>';//округлює завжди в більшу сторону
 echo floor(15.15);echo '<br>';//округлює завжди в меншу сторону
 echo rand(0,100);echo '<br>';//випадкове число
 echo min(5,4,8,3,9,1);echo '<br>';
 echo max(5,4,8,3,9,1);echo '<br>';
