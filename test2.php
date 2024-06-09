<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

header('Content-Type: application/json; charset=utf-8');

require("./vendor/autoload.php");

use X\Element;
use X\Bridge\Document;
use X\Annotations\NodeName;

// use X\Model\Bridges\Markup\ImportMarkup;
// use X\Model\Bridges\Markup\ExportMarkup;

// class Element {
//   function do_foo() {
//     echo "Doing foo.";
//   }
// }

// $reflection = new ReflectionClass('div');
// echo $reflection;

// $bar = new Element;
// var_dump($bar);

// $attributes = (object) array('class' => 'foo');
// $children = [
//   (object) array('p' => '555'),
//   (object) array('h1' => ['555', true, 909090, (object) array('span' => '909090')]),
// ];
// $element = (object) array('div' => [$attributes, $children]);
// var_dump($element);

$contentAML = file_get_contents('src/resources/abstract/app/test2.html');

// $document = new Document();
// var_dump($document->fromMarkup($contentAML));

// $model = new AmlModel($contentAML);
// $markup = new AmlMarkup($model->model);

// $import = new ImportMarkup($contentAML);
// var_dump($import);
// $model = $import->model;
// var_dump($model);
// var_dump(json_encode($model, JSON_PRETTY_PRINT));
// $json = json_encode($model);
// var_dump($json);
// $element = Element::fromMarkup($contentAML);
// $element->setChildren(function ($resource) {
//   var_dump($resource->properties);
//   return [999999];
// });
// var_dump($element);


// $markup = $element?->toMarkup();
// $json = $element?->toJson();
// echo $json;

// var_dump(json_decode($json));

// $markup = new Export($model);
// echo $markup->xml();
// echo $markup->html();

// $processor = new Processor($contentAML);
// echo $processor->html(true, true, true);

// $processor->merge(false);

// echo '
// <script>
//   let json = ' . ($json ?  $json : '{}') . ';
//   console.log(json);
// </script>';


print_r($contentAML);
$obj = Document::formMarkup($contentAML);
var_dump($obj);
