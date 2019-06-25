<?php
header( 'Location: http://www.google.com') ;
$ip = $_SERVER['REMOTE_ADDR'];
$fo = fopen("ip.txt", "a");
$fw = fwrite($fo, "$ip\n");
fclose($fo);
?>