<?php

namespace Src\Replacement;

class IT implements Replaceable
{
    public static function canReplace($n)
    {
        return !($n % 5);
    }

    public static function replace($n)
    {
        return 'IT';
    }
}