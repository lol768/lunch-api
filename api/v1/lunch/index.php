<?php

// Lunch API Version 0.1


date_default_timezone_set('Europe/London');

header("Content-Type: application/json");

// Setup the bred random with the day of the month
srand(date('j'));

// Setup the outputs
$isLunch = (date('H') == 12 && date('i') == 15);
$lunchTime = "12:15";
$lunchType = "Standard";
$bred = 90 ;

// Check for tuesdays lunch type
if(date('D') == "Tue") {
    $lunchType = "Special";
    $bred = 10;
}

// Add some randomness to the bred likelyhood
$bred = $bred + rand(-10, 10);

if($bred > 99) {
    $bred = 99;
}

if($bred < 1 ) {
    $bred = 1;
}


// Set this flag when henry comes in with a new haircut
$henryHairCut = false;

$response = array("lunchTime" => $lunchTime, "isLunch" => $isLunch, "lunchType" => $lunchType, "hasHenryHadAHairCut" => $henryHairCut, "likelyhoodOfBread" => $bred);

die(json_encode($response));

?>
