<?php
$str = "The worl is a book and those who do not travel read onle one page";
////lenght
echo strlen($str) . "<br />";
echo strpos($str, "i") . "<br />";

if (strpos($str, "i")==false ) echo "not found";
else echo "found";

////delete
substr($str, 3 , -2);
/////заміна
echo str_replace("is", "abc",$str). "<br />";
/////жирний шрифт
echo "<b> $str</b>". "<br />";
///передача даних одним шрифтом
echo htmlspecialchars($str). "<br />";
/////верхній та нижній регіст
echo strtolower($str). "<br />";
echo strtoupper($str). "<br />";
////шифрування(не дуже секюрна)
echo md5($str)."<br />";
/////видаляє пробіли
echo trim("      hello    hello   ") . "<br />";



