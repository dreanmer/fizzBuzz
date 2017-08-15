<?php

namespace Src\Replacement;

class Buzz implements Replaceable
{
    public static function canReplace($n)
    {
        return !($n % 5);
    }

    public static function getReplacer()
    {
        return 'Buzz';
    }
}