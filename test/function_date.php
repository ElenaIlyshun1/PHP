<?php
$start = microtime(true);
echo time() . "<br />";
echo microtime(true) . "<br />";
$time = mktime(12, 5, 55, 5, 5, 2020);
echo "Time of work script :" .  (microtime(true) - $start) . " sek <br />";
echo date("Y-m-d H:i:s", $time);


$array = getdate($time);
print_r($array);

////перевіряє чи є така дата
echo "<br />" . checkdate(2, 29, 2020);
