<?php

use Src\Printer;
use Src\Replacement\Fizz;

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
        $printer = new Printer([new Fizz]);
        $this->assertEquals($expected, $printer->replace($n));
    }

    /**
     * @dataProvider replaceProvider
     */
    public function testAddReplace($n, $expected)
    {
        $printer = new Printer();
        $printer->addReplacer(new Fizz);
        $this->assertEquals($expected, $printer->replace($n));
    }

    public function replaceProvider()
    {
        return [
            [1, 1],
            [2, 2],
            [3, 'Fizz']
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
        $this->expectOutputString('1,2,Fizz,4,5,Fizz,7,8,Fizz,10');
        $printer = new Printer();
        $printer->addReplacer(new Fizz);
        $printer->print(10, 1, ",");
    }
}