<?php

namespace Test;

use App\FizzBuzz;
use Generator;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /**
     * @dataProvider dataProviderForTestFizzBuzz
     */
    public function testFizzBuzz(int $number, string $expected)
    {
        $fizzBuzz = new FizzBuzz;

        $fizzBuzz->fizzBuzz();

        $actual = $fizzBuzz->getValue($number);
        $this->assertEquals($expected, $actual);
    }

    public function dataProviderForTestFizzBuzz(): Generator
    {
        yield 'should Return One' => [
            'number' => 1,
            'expected' => '1',
        ];
        yield 'should Return Two' => [
            'number' => 2,
            'expected' => '2',
        ];
        yield 'should Return Fizz for Three' => [
            'number' => 3,
            'expected' => 'Fizz',
        ];
        yield 'should Return Buzz for Five' => [
            'number' => 5,
            'expected' => 'Buzz',
        ];
        yield 'should Return Fizz for Six' => [
            'number' => 6,
            'expected' => 'Fizz',
        ];
        yield 'should Return FizzBuzz for Fifteen' => [
            'number' => 15,
            'expected' => 'FizzBuzz',
        ];
        yield 'should Return Twenty Three' => [
            'number' => 23,
            'expected' => '23',
        ];
        yield 'should Return Fizz for Ninety-Nine' => [
            'number' => 99,
            'expected' => 'Fizz',
        ];
        yield 'should Return Buzz For One Hundred' => [
            'number' => 100,
            'expected' => 'Buzz',
        ];
    }
}