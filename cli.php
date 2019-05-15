<?php

require "src/Brainly.php";

use Brainly\Brainly;

print "Masukkan pertanyaan: ";
$query = trim(fgets(STDIN));
print "Masukkan limit query (jumlah maksimal yang ditampilkan, default 10): ";
$limit = trim(fgets(STDIN));

if ($limit === "") {
	$limit = 10;
} else {
	$limit = (int)$limit;
}

$st = new Brainly($query);
print "Loading...\n";
$result = $st->exec();

if (count($result) === 0) {
    print "Not found!\n";
} else {
    foreach ($result as $k => $r) {
    	print "=============================================\n";
    	print "[Result ke-".(++$k)."]\n";
    	$r["content"] = trim(html_entity_decode(strip_tags($r["content"]), ENT_QUOTES, "UTF-8"));

    	foreach ($r["answers"] as &$rr) {
    		$rr = trim(html_entity_decode(strip_tags(str_replace("<br />", "\n", $rr)), ENT_QUOTES, "UTF-8"));
    	}

    	unset($rr);

    	$r["pertanyaan"] = $r["content"];
    	$r["jawaban"] = $r["answers"];

    	unset($r["content"], $r["answers"]);

    	print_r($r);

    	if ($k === $limit) {
    		break;
    	}
    }
}
