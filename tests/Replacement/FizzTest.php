<?php

use Src\Replacement\Fizz;

class FizzTest extends PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider replaceProvider
     */
    public function testCanReplace($n, $expected)
    {
        $fizz = new Fizz();
        $this->assertEquals($expected, $fizz->canReplace($n));
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
        $fizz = new Fizz();
        $this->assertEquals('Fizz', $fizz->getReplacer());
    }
}