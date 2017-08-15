<?php

namespace Src\Replacement;

class Fizz implements Replaceable
{
    public static function canReplace($n)
    {
        return !($n % 3);
    }

    public static function getReplacer()
    {
        return 'Fizz';
    }
}