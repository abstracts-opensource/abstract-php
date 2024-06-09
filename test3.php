<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require("./vendor/autoload.php");

use X\Model\Element\X;

echo "<pre>";

$test = new X('test', [], function ($x) {
  var_dump($x);
  // var_dump("55");
  return "666";
}, true);
// var_dump($test);
// var_dump($test->id);

echo "</pre>";