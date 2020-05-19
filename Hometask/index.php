<?php
echo '1. Дано номер дня тижня (1 – понеділок і т.д.). Визначити чи це вихідний день.  (if)';

echo '<br>';
$day = 6;
if ($day == 6 or $day == 7 )
{
    echo 'It is a holiday day!!';
}
else if ($day >= 1 and $day <= 5 )
{
    echo 'It is a working day!!';
}
else{
    echo 'There is no such day!!!';
}
echo '<hr>';
echo '2. *Дано тварина (номер тварини. 1 – жираф. 2 – орел. тощо). Вивести клас, до якого відноситься тварина (хижак, травоїдна). (Switch)';
$animal = '1. giraffe';
//$animal = '2. eagle';
//$animal = '3. elephant';
//$animal = '4. mouse';
//$animal = '5. chicken';
//$animal = '6. wolf';
//$animal = '7. rebbit';
//$animal = '8. fox';
switch($animal) {
    case 1: echo '<br>' . 'Animal '. $animal . ' ' . 'is ' . ' Herbivorous '; break;
    case 2: echo '<br>' . 'Animal '. $animal . ' ' . 'is ' .'Predator'; break;
    case 3: echo '<br>' . 'Animal '. $animal . ' ' . 'is ' . ' Herbivorous '; break;
    case 4: echo '<br>' . 'Animal '. $animal . ' ' . 'is ' . ' Herbivorous '; break;
    case 5: echo '<br>' . 'Animal '. $animal . ' ' . 'is ' . ' Herbivorous '; break;
    case 6: echo '<br>' . 'Animal '. $animal . ' ' . 'is ' .' Predator '; break;
    case 7: echo '<br>' . 'Animal '. $animal . ' ' . 'is ' .' Herbivorous '; break;
    case 8: echo '<br>' . 'Animal '. $animal . ' ' . 'is ' .' Predator '; break;
    default: echo "No match!"; break;
}
echo '<hr>';
echo '3. *Дано країна. Вивести назву континенту. (Switch)';
echo '<br>';
//$country = 'Ukraine';
//$country = 'Kenya';
//$country = 'China';
//$country = 'Israel';
//$country = 'Italy';
$country = 'Monaco';
//$country = 'Costa Rica';
//$country = 'Honduras';
//$country = 'Brazil';
//$country = 'Peru';

switch($country) {
    case 'Ukraine': echo 'Country - '. $country . '; Continent - '. 'Europe' . '<br>' ; break;
    case 'Kenya': echo 'Country - '. $country . '; Continent - '. 'Africa' . '<br>' ; break;
    case 'China': echo 'Country - '. $country . '; Continent - '. 'Asia' . '<br>' ; break;
    case 'Israel': echo 'Country - '. $country . '; Continent - '. 'Asia' . '<br>' ; break;    
    case 'Italy': echo 'Country - '. $country . '; Continent - '. 'Europe' . '<br>' ; break;
    case 'Monaco': echo 'Country - '. $country . '; Continent - '. 'Europe' . '<br>' ; break;
    case 'Costa Rica': echo 'Country - '. $country . '; Continent - '. 'North America' . '<br>' ; break;
    case 'Honduras': echo 'Country - '. $country . '; Continent - '. 'North America' . '<br>' ; break;
    case 'Brazil': echo 'Country - '. $country . '; Continent - '. 'South America' . '<br>' ; break;
    case 'Peru': echo 'Country - '. $country . '; Continent - '. 'South America' . '<br>' ; break;
    default: echo "No match!"; break;
}

echo '<hr>';
echo '4. Є 10 чисел. Знайти суму та середнє арифметичне цих чисел. - while';
$arr =  [1,15,48,25,3,6,45,88,47,99];

$i=0;
$count = 10;
$sum=0;
echo '<br>';
echo 'All number : ';
foreach($arr as $num)
{
    echo  $num . '  ' ;
}
while($i < $count)
{ 
     $sum += $arr[$i];
     $i++;   
}
echo '<br>';
echo 'Sum  = '. $sum;
echo '<br>';
echo 'Avg  = '. $sum/$count;



