<?php
ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require("./vendor/autoload.php");

use \X\Processor;
use \X\Resource;
use \X\Naming;

$contentAML = Resource::get('src/resources/abstract/app/test.html');


$processor = new Processor($contentAML, false);

$processor->merge(false);