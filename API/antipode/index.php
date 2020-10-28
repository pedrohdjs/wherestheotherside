<?php

$lattitude = $_GET['lattitude'];
$longitude = $_GET['longitude'];

$inverseLattitude = -$lattitude;
$inverseLongitude = 180 - abs($longitude);

$response = [
    'lattitude' => $inverseLattitude,
    'longitude' => $inverseLongitude
];

header('Content-Type: application/json');
echo json_encode($response);//Send response

?>