<?php
require_once(dirname(__DIR__)."/../src/php/config/config.php");


$lattitude = $_GET['lattitude']; // -22.951944; 
$longitude = $_GET['longitude']; // -46.541944;

$queryURL = "https://api.opencagedata.com/geocode/v1/json?". "key=" . OPENCAGE_API_TOKEN . "&q=". $lattitude . urlencode(",") . $longitude . "&language=en&pretty=1";
$queryRes = file_get_contents($queryURL);
$queryRes = urldecode($queryRes);
$queryRes = json_decode($queryRes);//Final stdclass response

$city = $queryRes->results[0]->components->city;
$state = $queryRes->results[0]->components->state;
$country = $queryRes->results[0]->components->country;

$response = [
    'city' => $city,
    'state' => $state,
    'country' => $country,
];

header('Content-Type: application/json');
echo json_encode($response);//Send response

?>