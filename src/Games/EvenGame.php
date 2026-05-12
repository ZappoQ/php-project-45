<?php

namespace BrainGames\Games\EvenGame;

function isEven($number)
{
    return $number % 2 === 0;
}

function generateQuestion()
{
    $question = rand(1, 100);
    $correctAnswer = isEven($question) ? 'yes' : 'no';

    return [$question, $correctAnswer];
}
