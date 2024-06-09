<?php
$start_time = microtime(true);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require("./vendor/autoload.php");

echo 'INITIALIZE: ' . round((microtime(true) - $start_time) * 1000, 2) . " ms\n";

use X\Handlers\ResourceHandler as Resource;

use X\Model\Bridges\Markup\ImportMarkup;
use X\Model\Bridges\Markup\ExportMarkup;

$observe_time = microtime(true);

$contentAML = Resource::get('src/resources/abstract/app/performance.html');

echo 'GET RESOURCE: ' . round((microtime(true) - $observe_time) * 1000, 2) . " ms\n";

$observe_time = microtime(true);

$import = new ImportMarkup($contentAML);
$model = $import->model;

echo 'IMPORT: ' . round((microtime(true) - $observe_time) * 1000, 2) . " ms\n";

// $observe_time = microtime(true);

// $markup = new ExportMarkup($model);
// $xml = $markup->xml();

// echo 'EXPORT (XML): ' . round((microtime(true) - $observe_time) * 1000, 2) . " ms\n";

// $observe_time = microtime(true);

// $markup = new ExportMarkup($model);
// $html = $markup->html();

// echo 'EXPORT (HTML): ' . round((microtime(true) - $observe_time) * 1000, 2) . " ms\n";

// $observe_time = microtime(true);

// echo $xml . "\n\n";

// echo 'RENDER: ' . round((microtime(true) - $observe_time) * 1000, 2) . " ms\n";

// echo 'OVERALL: ' . round((microtime(true) - $start_time) * 1000, 2) . " ms\n";
?>