<?php

namespace Src\Replacement;

class Linianos implements Replaceable
{
    public static function canReplace($n)
    {
        return !($n % 15);
    }

    public static function replace($n)
    {
        return 'Linianos';
    }
}