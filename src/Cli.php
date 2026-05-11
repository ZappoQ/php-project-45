<?php

namespace BrainGames;

function hello()
{
    echo 'Welcome to the Brain Game!' . PHP_EOL;
    echo 'May I have your name? ';
    $name = trim(fgets(STDIN));
    echo 'Hello, ' . $name . '!' . PHP_EOL;
}
