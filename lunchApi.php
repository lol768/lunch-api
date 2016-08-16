<?php
date_default_timezone_set('Europe/London');
header("Content-Type: application/json");
die(json_encode(["isLunch" => date('H') == 12]));