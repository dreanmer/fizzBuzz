<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Src\Printer;
use Src\Replacement\Buzz;
use Src\Replacement\FizzBuzz;
use Src\Replacement\Fizz;

$replacers = [
    new FizzBuzz,
    new Fizz,
    new Buzz
];

$printer = new Printer($replacers);
$printer->print(100, 1, '<br/>');