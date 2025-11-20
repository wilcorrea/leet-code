<?php

declare(strict_types=1);

class FibonacciTest extends PHPUnit\Framework\TestCase
{
    public function testRunFibonacci(): void
    {
        require_once __DIR__ . '/shared/fibonacci.php';
        $sequence = fibonacci(10);

        // echo "Fibonacci sequence up to 5: " . implode(', ', $sequence) . PHP_EOL;
        $this->assertSame(34, $sequence);
    }
}
