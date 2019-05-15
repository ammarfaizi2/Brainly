<?php

require "src/Brainly.php";

use Brainly\Brainly;

$query = "siapa penemu lampu?";
$st = new Brainly($query);
$result = $st->exec();

if (count($result) === 0) {
	print "Not found!\n";
} else {
	print json_encode($result, 128);
}
