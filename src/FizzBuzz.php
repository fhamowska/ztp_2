<?php

namespace App;

class FizzBuzz
{
    private array $result = [];

    public function fizzBuzz(): void
    {
        for($i=0; $i<100; $i++)
        {
            if($this->isDivisibleByFifteen($i+1)) {
                $this->result[$i] = 'FizzBuzz';
            } else if($this->isDivisibleByThree($i+1)) {
                $this->result[$i] = 'Fizz';
            } else if($this->isDivisibleByFive($i+1)) {
                $this->result[$i] = 'Buzz';
            } else {
                $this->result[$i] = $i + 1;
            }
        }
    }

    public function getValue(int $number): string
    {
        return (string) $this->result[$number-1];
    }

    private function isDivisibleByThree(int $number): bool
    {
        return 0 === $number % 3;
    }

    private function isDivisibleByFive(int $number): bool
    {
        return 0 === $number % 5;
    }

    private function isDivisibleByFifteen(int $number): bool
    {
        return $this->isDivisibleByThree($number) && $this->isDivisibleByFive($number);
    }
}