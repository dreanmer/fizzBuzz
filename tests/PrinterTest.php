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

    public function testCleanPrint()
    {
        $this->expectOutputString('1,2,3,4,5,6,7,8,9,10');
        $printer = new Printer();
        $printer->print(10, 1, ",");
    }

    public function testeReplacingPrint()
    {
        $this->expectOutputString('1,2,Linio,4,5,Linio,7,8,Linio,10');
        $printer = new Printer();
        $printer->addReplacer(new Linio);
        $printer->print(10, 1, ",");
    }
}