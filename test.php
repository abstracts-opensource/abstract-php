<?php
require("./vendor/autoload.php");


use \X\Compiler;
use \X\Interfacer;

$interface = Interfacer::resource('src/resources/abstract/app/upload.html');

$content = Compiler::compile($interface);


echo $content;