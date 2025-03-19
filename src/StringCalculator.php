<?php

namespace App;

class StringCalculator
{
    public function add(?string $input): ?int
    {
        return array_sum(explode(',', $input));
    }
}