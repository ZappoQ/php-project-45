<?php

namespace BrainGames\Games\GcdGame;

function findGcd(int $a, int $b): int
{
    $a = abs($a);
    $b = abs($b);

    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }

    return $a;
}

function generateQuestion(): array
{
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);

    $question = "$num1 $num2";
    $correctAnswer = (string) findGcd($num1, $num2);

    return [$question, $correctAnswer];
}
