<?php

namespace Src\Replacement;

class Linio implements Replaceable
{
    public static function canReplace($n)
    {
        return !($n % 3);
    }

    public static function replace($n)
    {
        return 'Linio';
    }
}