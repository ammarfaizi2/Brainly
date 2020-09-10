<?php

require __DIR__."/../src/Brainly.php";

use Brainly\Brainly;

define("data", realpath(__DIR__."/..")."/brainly");

if (isset($_GET["q"])) {

  if (!is_string($_GET["q"])) {
    $code   = 400;
    $status = "error";
    $msg    = "q must be a string";
    goto ret;
  }

  $code   = 200;
  $status = "success";
  $msg    = (new Brainly($_GET["q"], 100))->exec();
} else {
  $code   = 400;
  $status = "error";
  $msg    = "";
}

ret:
http_response_code($code);
echo json_encode(
  [
    "code"   => $code,
    "status" => $status,
    "msg"    => $msg
  ]
);
