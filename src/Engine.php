<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function engine($answer, $result,  $username) {
    if($answer === $result) {
    return line("Correct");
    }
    else {
    return line($answer . " is wrong answer ;(. Correct answer was " . $result .". Let's try again, " . $username . "!"); 
}
}
