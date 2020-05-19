<?php
//include "function.php";
//require_once "function.php";
//echo $num;
//$res = Sum(4,8);

//echo "Result = " .$res;

// $arr = [2,52,45,7,8,5,69,58,77];
// for( $i = 0; $i < count($arr); $i ++){
// echo $arr[$i]." ";
// }

// foreach($_SERVER as $key)


$email = "";
$pass = "";

if (!empty($_POST)) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if (isset($_POST['check'])) {
        $check = $_POST['check'];
        echo $check;
    }
}




// echo "Email = " . $email;
// echo "Password = " . $pass;

require_once "views/header.html";
require_once "views/main.html";
require_once "views/footer.html";

// print_r($_GET);