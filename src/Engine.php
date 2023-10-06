<?php

namespace BrainGames\Engine;

use BrainGames\Even;
use BrainGames\Calc;
use function cli\line;
use function cli\prompt;
use function Even\even;
use function Calc\calc;

// function engine($answer, $result, $username, $type)
function engine($type) {

line('Welcome to the Brain Game!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);

    if ($type === 'even') {
        line('Answer "yes" if the number is even, otherwise answer "no".');
        
    }
    else {
        line('What is the result of the expression?');
    }

    if ($type === 'even') {
     
        Even\even($name); 
    } 
    else {
        Calc\calc($name); 
        }; 

        return line("Congratulations, " .  $name . "!");

    }       




function results($answer, $result, $username) {
    

    if($answer === $result) {
        for($i = 0; $i <= 4; $i++) { 
            $i++; 
        line("Correct");
        Even\even($username);  
        }
    }
        else {
        return  line($answer . " is wrong answer ;(. Correct answer was " . $result .". Let's try again, " . $username . "!"); 
    }
}

