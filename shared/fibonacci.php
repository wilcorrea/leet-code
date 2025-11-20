<?php

function fibonacci(int $limite): array
{
    $sequence = [];

    $anterior = 0;
    $atual = 1;

    if ($limite >= 0) {
        $sequence[] = $anterior;
        $limite--;
    }
    if ($limite >= 1) {
        $sequence[] = $atual;
        $limite--;
    }

    while ($limite > 0) {
        $proximo = $anterior + $atual;
        $sequence[] = $proximo;
        $limite--;
        $anterior = $atual;
        $atual = $proximo;
    }
    return $sequence;
}
