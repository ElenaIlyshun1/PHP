<?php
//отримання даних від користувача 
//request - all
//get - 
//post
//print_r($_GET);//ті самі дані в адресній строці
//print_r($_POST);//тільки для розробників виводить масив даних що вводять

// if($_POST["name"]== "")
// echo "Enter name . <a href='/php/test'>change</a>";
// else
// header("Location:coments.php");//направляє на початкову сторінку

if(isset($_POST["name"]))
{
    if($_POST["name"]== "")
    echo "Enter name . <a href='/php/test'>change</a>";
    else
    header("Location:coments.php") ;
}
