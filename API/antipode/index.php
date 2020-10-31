<?php

$latitude = $_GET['latitude'];
$longitude = $_GET['longitude'];

$inverseLatitude = -$latitude;
$inverseLongitude = ($longitude>0) ? -(180 - abs($longitude)) : (180 - abs($longitude));

$response = [
    'latitude' => $inverseLatitude,
    'longitude' => $inverseLongitude
];

header('Content-Type: application/json');
echo json_encode($response);//Send response

?>