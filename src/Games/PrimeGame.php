<?php

namespace BrainGames\Games\PrimeGame;

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    if ($number === 2) {
        return true;
    }

    if ($number % 2 === 0) {
        return false;
    }
    for ($i = 3; $i <= sqrt($number); $i += 2) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function generateRound(): array
{
    $question = rand(1, 100);
    $correctAnswer = isPrime($question) ? 'yes' : 'no';

    return [(string) $question, $correctAnswer];
}
