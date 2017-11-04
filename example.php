<?php

require "src/Brainly.php";

use Brainly\Brainly;

$query = "siapa penemu lampu?";
$st = new Brainly($query);
$st->limit(10);
$result = $st->exec();

print_r($result);