<?php

class Number
{
    // readonly property to hold the value
    public function __construct(
        public readonly int $value
    ) {
    }

    public function isPerfect(): bool
    {
        $sum = 0;
        $number = 1;
        while ($number <= $this->value / 2) {
            $mod = $this->value % $number;
            if ($mod === 0) {
                $sum += $number;
            }
            $number++;
        }
        return $sum === $this->value;
    }
}
