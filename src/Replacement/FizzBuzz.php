<?php

namespace Src\Replacement;

class FizzBuzz implements Replaceable
{
    public static function canReplace($n)
    {
        return !($n % 15);
    }

    public static function getReplacer()
    {
        return 'FizzBuzz';
    }
}