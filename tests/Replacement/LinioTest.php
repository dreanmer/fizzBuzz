<?php

use Src\Replacement\Linio;

class LinioTest extends PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider replaceProvider
     */
    public function testCanReplace($n, $expected)
    {
        $linio = new Linio();
        $this->assertEquals($expected, $linio->canReplace($n));
    }

    public function replaceProvider()
    {
        return [
            [1, false],
            [2, false],
            [3, true],
            [4, false],
            [5, false],
            [6, true]
        ];
    }

    public function testGetReplacer()
    {
        $linio = new Linio();
        $this->assertEquals('Linio', $linio->getReplacer());
    }
}