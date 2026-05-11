<?php

namespace BrainGames\Engine;

function runGame($gameDescription, $generateQuestion)
{
    echo "Welcome to the Brain Games!\n";
    echo "May I have your name? ";
    $name = trim(fgets(STDIN));
    echo "Hello, $name!\n";

    echo $gameDescription . "\n";

    $rounds = 3;

    for ($i = 0; $i < $rounds; $i++) {
        [$question, $correctAnswer] = $generateQuestion();

        echo "Question: $question\n";
        echo "Your answer: ";
        $userAnswer = trim(fgets(STDIN));

        if ($userAnswer === $correctAnswer) {
            echo "Correct!\n";
        } else {
            echo "'$userAnswer' is wrong answer ;(. Correct answer was '$correctAnswer'.\n";
            echo "Let's try again, $name!\n";
            return;
        }
    }

    echo "Congratulations, $name!\n";
}
