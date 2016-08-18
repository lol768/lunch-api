<?php

// Lunch API Version 0.1


date_default_timezone_set('Europe/London');

header("Content-Type: application/json");

// Setup the outputs
$isLunch = (date('H') == 12 && date('i') == 15);
$lunchTime = "12:15";
$lunchType = "Unknown";

$response = array("lunchTime" => $lunchTime, "isLunch" => $isLunch, "lunchType" => $lunchType);

die(json_encode($response));

?>
