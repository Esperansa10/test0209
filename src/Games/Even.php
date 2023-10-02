<?php

namespace BrainGames\Even;

use BrainGames\Cli;
use function cli\greet;
use function cli\line;
use function cli\prompt;

 



function even($name)
{
   line('Answer "yes" if the number is even, otherwise answer "no".');
   $random = '';
    
    for($i = 1; $i <= 3; $i++) {

        line($random = rand(1, 10)); 
        $answer = prompt('Your answer');
        
        if ($random % 2 === 1 && $answer === 'yes') {
            return line("'yes' is wrong answer ;(. Correct answer was 'no'. Let's try again, " . $name . "!"); ; 
        }
        else if ($random % 2 === 0 & $answer === 'no')  {
            return line("'no' is wrong answer ;(. Correct answer was 'yes'. Let's try again, " . $name . "!"); 
        }
        else if ($random % 2 === 1 & $answer !== 'no')  {
            return line("'no' is wrong answer ;(. Correct answer was 'yes'. Let's try again, " . $name . " "); 
        }
        else if ($random % 2 === 0 & $answer !== 'yes')  {
            return line("Sorry, I didn't understand you, please repeat"); 
        }
        else {
            line("Correct");
        }
        
    }
    line("Congratulations, " . $name . "!");
} 

 