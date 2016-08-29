<?php

// Lunch API Version 0.1


date_default_timezone_set('Europe/London');

header("Content-Type: application/json");

// Setup the bred random with the day of the month
srand(date('j'));

// Setup the outputs
$isLunch = (date('H') == 12 && date('i') >= 15);
$lunchTime = "12:15";
$lunchType = "Standard";
$bread = 90 ;

// Check for tuesdays lunch type
if(date('D') == "Tue") {
    $lunchType = "Special";
    $bred = 10;
}
// Add TTL (Time to Lunch)
$datetime1 = strtotime('now');
$datetime2 = strtotime('12:15:00 BST');

$secs = $datetime2 - $datetime1;

// Add some randomness to the bread likelihood
$bread = $bread + rand(-10, 10);

if($bread > 99) {
    $bread = 99;
}

if($bread < 1 ) {
    $bread = 1;
}


// Set this flag when henry comes in with a new haircut
$henryHairCut = false;

$response = array("lunchTime" => $lunchTime, "isLunch" => $isLunch, "lunchType" => $lunchType, "timeTillLunch" => $secs,  "hasHenryHadAHairCut" => $henryHairCut, "likelihoodOfBread" => $bread);

die(json_encode($response));

?>
