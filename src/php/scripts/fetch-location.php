<?php
require_once(dirname(__DIR__)."/config/config.php");

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = @$_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = @$_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = @$_SERVER['REMOTE_ADDR'];
}

$reqURL = "https://ipinfo.io/" . $ip ."?token=" . IPINFO_ACCESS_TOKEN;
$res = file_get_contents($reqURL);
$resArr = (Array)json_decode($res);
if (sizeof($resArr) < 8) return; //Response couldn't be obtained. Terminating the script.

$city = $resArr['city'];
$state = $resArr['region'];
$country = $resArr['country'];
$coordinates = $resArr['loc'];

?>