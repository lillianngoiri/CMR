<?php
$path = 'information.json';
$jsonString = file_get_contents($path);
$jsonData = json_decode($jsonString, true);
var_dump($jsonData);
?>