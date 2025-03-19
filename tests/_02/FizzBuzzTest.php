<?php

namespace Test\_02;

use App\_02\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testFizzBuzz_shouldReturnOne()
    {
        $expectedValue = 1;
        $fizzBuzz = new FizzBuzz();
        $fizzBuzz->fizzBuzz();

        $actualValue = $fizzBuzz->value(1);

        $this->assertEquals($expectedValue, $actualValue);
    }
}