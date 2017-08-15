<?php

use Src\Replacement\Buzz;

class BuzzTest extends PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider replaceProvider
     */
    public function testCanReplace($n, $expected)
    {
        $buzz = new Buzz();
        $this->assertEquals($expected, $buzz->canReplace($n));
    }

    public function replaceProvider()
    {
        return [
            [1, false],
            [2, false],
            [3, false],
            [4, false],
            [5, true]
        ];
    }

    public function testGetReplacer()
    {
        $buzz = new Buzz();
        $this->assertEquals('Buzz', $buzz->getReplacer());
    }
}