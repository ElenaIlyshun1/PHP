<?php
session_start();
if (isset($_POST["register"])) {
    $username = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $password_1 = htmlspecialchars($_POST["password_1"]);
    $password_2 = htmlspecialchars($_POST["password_2"]);
    ///зберігає дані що були введені в полях в браузері
    $_SESSION["username"] = $username;
    $_SESSION["email"] = $email;
    $_SESSION["password_1"] = $password_1;
    $_SESSION["password_2"] = $password_2;
    $error_username = "";
    $error_email = "";
    $error_password_1 = "";
    $error_password_2 = "";
    $error = true;
    if (strlen($username) == 0) {
        $error_username = "Enter name";
        $error = true;
    }
    if ($email == "" || !preg_match("/@/", $email)) {
        $error_email = "Невірно введений емейл";
        $error = true;
    }
    // if (strlen($password_1) == 0) {
    //     $error_subject = "Введіть тему повідомлення";
    //     $error = true;
    // }
    // if (strlen($password_1) == 0) {
    //     $error_message = "Введіть повідомлення";
    //     $error = true;
    // }
    if (!$error) {
        $file=fopen("db.txt","r");
        $finduser = false;
        while(!feof($file))
        {
            $line = fgets($file);
            $array = explode(";",$line);
            if(trim($array[0]) == $_POST['username'])
            {
                $finduser=true;
                break;
            }
        }
        fclose($file);
    
        if( $finduser )
        {
            echo $_POST["username"];
            echo ' existed!';
        }
        else
        {
            $file = fopen("db.txt", "a");
            
            fputs($file,$_POST["user"].";".password_hash($_POST["pass"], PASSWORD_DEFAULT)."\r\n");
            fclose($file);
            echo $_POST["user"];
            
            echo " registered successfully!";
                echo '<script type="text/javascript"> window.open("login.php","_self");</script>'; 
        }
        //header("Location: success.php");
        exit;
    }


// $email = "";
// $pass = "";

// if (!empty($_POST)) {
//     $email = $_POST['email'];
//     $pass = $_POST['password'];
//     if (isset($_POST['check'])) {
//         $check = $_POST['check'];
//         echo $check;
//     }
// }
//require_once "views/header.html";
//require_once "views/main.html";
//require_once "views/footer.html";
require_once "register.php";