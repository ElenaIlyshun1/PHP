<?php

//connect to the database
//$db = mysqli_connect('localhost', 'root', '', 'registration');
//session_start();
//if register button is clicked

//if (isset($_POST['register'])) {

$username = $email = $password_1 = $password_2 = "";
$error_username = "";
$error_email = "";
$error_password_1 = "";
$error_password_2 = "";
$boolean = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // $username = htmlspecialchars($_POST["username"]);
    // $email = htmlspecialchars($_POST["email"]);
    // $password_1 = htmlspecialchars($_POST["password_1"]);
    // $password_2 = htmlspecialchars($_POST["password_2"]);
    // ////зберігає дані що були введені в полях в браузері
    // $_SESSION["username"] = $username;
    // $_SESSION["email"] = $email;
    // $_SESSION["password_1"] = $password_1;
    // $_SESSION["password_2"] = $password_2;
    function validation_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if (empty($_POST["username"]))
    {
        $error_username = "Username required...";
        $boolean = false;
    }
     else {
        $username = validation_input($_POST["username"]);
        $boolean = true;
    }

    if (empty($_POST["email"])) {
        $error_email = "Email required...";
        $boolean = false;
    } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $error_email = "Invalid email";
        $boolean = false;
    } else {
        $email = validation_input($_POST["email"]);
        $boolean = true;
    }
    function strlenght($str)
    {
        $ln = strlen(($str));
        if ($ln > 15) {
            return "Password should less then 15 charecter";
        } else if ($ln < 5 && $ln >= 1) {
            return "Password should greater then 3 charecter";
        }
        return;
    }
    $lenght = strlenght($password_1);
    if (empty($_POST["password_1"])) {
        $error_password_1 = "Password field required...";
        $boolean = false;
    } else if ($lenght) {
        $error_password_1 = $lenght;
        $boolean = true;
    } else {
        $password_1 = validation_input($_POST["password_1"]);
        $boolean = true;
    }
    if (empty($_POST["password_2"])) {
        $error_password_2 = "Confirm Password  required...";
        $boolean = false;
    } else if ($_POST["password_2"] != $password_1) {
        $error_password_2 = "Password nor match...";
        $boolean = false;
    }
    if (isset($_POST['register'])) {
        $boolean = true;
    } else {
        $boolean = false;
    }
    
    
    if ($boolean)
    {
    $dbname = "registration";
    $con = mysqli_connect("localhost", "root", "", $dbname);
    if (!$con)
    {
        die("Connection failed :" + mysqli_connect_error());
    }
    function NewUser()
    {
        $sql = "INSERT INTO users (username, email, password) VALUES ('$_POST[username]', '$_POST[email]', '$_POST[password_1]')";
        $query = mysqli_query($GLOBALS['con'], $sql);
        if($query)
        {
            echo "<script> alert ('Record inserted successfully...');</script>";
        }
    }
    function SingUp()
    {
        $sql = "SELECT * FROM users WHERE username = '$_POST[username]'and email = '$_POST[email]'"; 
        $res = mysqli_query($GLOBALS['con'], $sql);
        if (!$row = mysqli_fetch_array($res))
        {
            NewUser();
        }
        else{
            echo "<script> alert ('You are already registered User');</script>";
        }
        
}
if (isset($_POST["registration"]))
{
    SingUp();
    mysqli_close($GLOBALS['con']);
    $boolean = false;
}
    // if ($password_1 != $password_2) {
    //     $error_password_2 = "Two password do not match";
    //     array_push($errors);
    //     //$error = true;
    // }
    // echo count($errors);
    // ///save user to database
    // if (count($errors) == 0) {
    //     $password = md5($password_1);
    //     $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    //     mysqli_query($db, $sql);
    // }
   
}

}