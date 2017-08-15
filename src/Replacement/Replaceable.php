<?php

namespace Src\Replacement;

interface Replaceable
{
    public static function canReplace($n);

    public static function getReplacer();
}