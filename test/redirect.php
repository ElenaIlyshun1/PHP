<?php
//echo "hello";
header("Location: http://google.com");
header("Location: main.html");
exit;

////email message 
$message = "message \nfrom me";
$from = "lenailyshun@gmail.com";
$to = "lenailyshun@gmail.com";
$subject = "Theme massage";
$subject = "=utf-8?B?".base64_encode($subject)."?=";
$headers = "From: $from\r\nReply-to:$from\r\nContent-type:text/plain; charset=utf-8\r\n";
mail($to,$subject,$message,$headers);

////COOKie тільки в браузері зберігаються

setcookie("num",20);//create
setcookie("num", 20, time() + 7); //delete 7 cek
if (isset($_COOKIE["num"]))
echo  "Cookie create";
else
echo  "Cookie not create";

////скільки разів користувач обновиви сторінку
$num = (isset($_COOKIE["num"]))?$_COOKIE["num"]:0;
$num++;
setcookie("num", $num, time() + 4); 
echo  "Користувач обновив сторінку $num разів";


///$_SESSION на сервері зберігаються
session_start();
$num = (isset($_SESSION["num"]))?$_SESSION["num"]:0;
$num++;
$_SESSION["num"] = $num; 
echo  "Користувач обновив сторінку $num разів";

session_destroy();//delete sesion