<?php
date_default_timezone_set('Europe/London');
echo (date('H') == 12) ? '{"isLunch": true}' : '{"isLunch" : false}';
