<?php


echo date('d l m');

echo date('h:i:sA');
$timezone = date_default_timezone_get();
echo "The current server timezone is: " . $timezone."<br>";

date_default_timezone_set('Asia/Kolkata');
echo date('d l m');

echo date('h:i:sA');
?>