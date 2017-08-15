<?php

use Src\Replacement\Linianos;

class LinianosTest extends PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider replaceProvider
     */
    public function testCanReplace($n, $expected)
    {
        $linianos = new Linianos();
        $this->assertEquals($expected, $linianos->canReplace($n));
    }

    public function replaceProvider()
    {
        return [
            [1, false],
            [2, false],
            [3, false],
            [4, false],
            [5, false],
            [15, true]
        ];
    }

    public function testGetReplacer()
    {
        $linianos = new Linianos();
        $this->assertEquals('Linianos', $linianos->getReplacer());
    }
}