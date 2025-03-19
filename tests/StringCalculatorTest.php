<?php

namespace Test;

use App\StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{

    /**
     * @dataProvider dataProviderForTestAdd
     */
    public function testAdd(?string $input, ?int $expected): void
    {
        $stringCalculator = new StringCalculator;

        $currentSum = $stringCalculator->add($input);

        $this->assertEquals($expected, $currentSum);
    }

    public function dataProviderForTestAdd()
    {
        yield 'should return 0 for empty string' => [
            'input' => '',
            'expected' => 0,
        ];
        yield 'should return 0 for null' => [
            'input' => null,
            'expected' => 0,
        ];
        yield 'should return 0 for 0' => [
            'input' => '0',
            'expected' => 0,
        ];
        yield 'should return 1 for 1' => [
            'input' => '1',
            'expected' => 1,
        ];
        yield 'should return 33 for 32,1' => [
            'input' => '32,1',
            'expected' => 33,
        ];
        yield 'should return 6 for 1,2,3' => [
            'input' => '1,2,3',
            'expected' => 6,
        ];
    }
}