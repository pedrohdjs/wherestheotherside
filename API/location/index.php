<?php
require_once(dirname(__DIR__)."/../src/php/config/config.php");


$latitude = floatval($_GET['latitude']);
$longitude = floatval($_GET['longitude']);

$queryURL = "https://api.opencagedata.com/geocode/v1/json?". "key=" . OPENCAGE_API_TOKEN . "&q=". $latitude . urlencode(",") . $longitude . "&language=en&pretty=1";
$queryRes = file_get_contents($queryURL);
$queryRes = urldecode($queryRes);
$queryRes = json_decode($queryRes);//Final stdclass response

$category = $queryRes->results[0]->components->_category;
if($category === "natural/water"){
    $response = [
        'isWater' => true,
    ];  
}

else{
    $city = $queryRes->results[0]->components->city ?? 'Some city';
    $state = $queryRes->results[0]->components->state ?? 'some state';
    $country = $queryRes->results[0]->components->country ?? 'some country';
    
    $response = [
        'isWater' => false,
        'city' => $city,
        'state' => $state,
        'country' => $country,
    ];  
}

header('Content-Type: application/json');
echo json_encode($response);//Send response

?>