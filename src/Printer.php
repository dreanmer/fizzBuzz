<?php

namespace Src;

use Src\Replacement\Replaceable;

class Printer
{
    private $replacers = [];

    public function __construct($replacers = [])
    {
        foreach ($replacers as $replacer) {
            $this->addReplacer($replacer);
        }
    }

    public function addReplacer(Replaceable $replacer)
    {
        $this->replacers[] = $replacer;
    }

    public function print($to = 100, $from = 1, $separator = "\n")
    {
        $numbers = range($from, $to);
        $replacedNumbers = $this->processRange($numbers);
        echo implode($separator, $replacedNumbers);
    }

    private function processRange($range)
    {
        return array_map(function($n){
            return $this->replace($n);
        }, $range);
    }

    public function replace($n)
    {
        foreach ($this->replacers as $replacer) {
            if ($replacer->canReplace($n)) {
                return $replacer->getReplacer();
            }
        }
        return $n;
    }
}