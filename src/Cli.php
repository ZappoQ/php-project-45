<?php

namespace BrainGames;

use function cli\line;
use function cli\prompt;

if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}
function hello() {
    line('Welcome to the Brain Game!');

    $name = prompt('May I have your name?');

    line("Hello, %s!", $name);
}