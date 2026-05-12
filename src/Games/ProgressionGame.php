<?php

namespace BrainGames\Games\ProgressionGame;

function generateProgression(int $start, int $step, int $length)
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $i * $step;
    }
    return $progression;
}

function generateRound(): array
{
    $length = rand(5, 10);
    $start = rand(1, 20);
    $step = rand(1, 10);

    $progression = generateProgression($start, $step, $length);

    $hiddenIndex = rand(0, $length - 1);
    $correctAnswer = (string) $progression[$hiddenIndex];
    $progression[$hiddenIndex] = '..';

    $question = implode(' ', $progression);

    return [$question, $correctAnswer];
}
