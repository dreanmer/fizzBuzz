<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Src\Printer;
use Src\Replacement\IT;
use Src\Replacement\Linianos;
use Src\Replacement\Linio;

$replacers = [
    new Linianos,
    new Linio,
    new IT
];

$printer = new Printer($replacers);
$printer->print(100, 1, '<br/>');