<?php

use Src\Printer;
use Src\Replacement\Linio;

class PrinterTest extends PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider emptyReplaceProvider
     */
    public function testReplaceEmpty($n, $expected)
    {
        $printer = new Printer();
        $this->assertEquals($expected, $printer->replace($n));
    }

    public function emptyReplaceProvider()
    {
        return [
            [1, 1],
            [2, 2],
            [3, 3]
        ];
    }

    /**
     * @dataProvider replaceProvider
     */
    public function testReplace($n, $expected)
    {
        $printer = new Printer();
        $printer->addReplacer(new Linio);
        $this->assertEquals($expected, $printer->replace($n));
    }

    public function replaceProvider()
    {
        return [
            [1, 1],
            [2, 2],
            [3, 'Linio']
        ];
    }
}