<?php

use Src\Replacement\IT;

class ITTest extends PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider replaceProvider
     */
    public function testCanReplace($n, $expected)
    {
        $IT = new IT();
        $this->assertEquals($expected, $IT->canReplace($n));
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
        $IT = new IT();
        $this->assertEquals('IT', $IT->getReplacer());
    }
}