<?php

// Lunch API Version 0.1


date_default_timezone_set('Europe/London');

header("Content-Type: application/json");

// Setup the outputs
$isLunch = (date('H') == 12);
$lunchTime = "12:00";

$response = array("lunchTime" => $lunchTime, "isLunch" => $isLunch)

die(json_encode($response));

?>
