<?php

namespace BrainGames\Engine;

function runGame($gameFunc, $name, $rounds = 3)
{
        $score = 0;

    for ($i = 0; $i < $rounds; $i++) {
        list($question, $correctAnswer) = $gameFunc();
        echo "Question: $question\n";
        echo "Your answer: ";
        $userAnswer = trim(fgets(STDIN));

        if ($userAnswer === (string)$correctAnswer) {
            echo "Correct!\n";
            $score++;
        } else {
            echo "'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.\n";
            echo "Let's try again, $name!\n";
            return;
        }
    }

    if ($score === $rounds) {
        echo "Congratulations, $name!\n";
    }
}
