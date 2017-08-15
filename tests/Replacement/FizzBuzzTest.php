<?php

use Src\Replacement\FizzBuzz;

class FizzBuzzTest extends PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider replaceProvider
     */
    public function testCanReplace($n, $expected)
    {
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals($expected, $fizzBuzz->canReplace($n));
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
        $fizzBuzz = new FizzBuzz();
        $this->assertEquals('FizzBuzz', $fizzBuzz->getReplacer());
    }
}