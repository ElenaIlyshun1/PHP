<?php

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

//require_once "views/header.html";
//require_once "views/main.html";
//require_once "views/footer.html";
require_once "register.php";