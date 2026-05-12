<?php

namespace BrainGames\Games\CalcGame;

function generateQuestion()
{
        $operations = ['+', '-', '*'];
        $op = $operations[array_rand($operations)];
        $a = rand(1, 100);
        $b = rand(1, 100);

        $question = "$a $op $b";
        $answer = match ($op) {
            '+' => $a + $b,
            '-' => $a - $b,
            '*' => $a * $b,
        };

        return [$question, (string) $answer];
}
