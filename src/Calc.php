<?php

namespace BrainGames\Even;

use BrainGames\Cli;
use function cli\greet;
use function cli\line;
use function cli\prompt;

 
function calc($name)
{
   line('Hello, Sam!');
   line('What is the result of the expression?');
    
   


    for($i = 1; $i <= 3; $i++) {

    $result = '';
    $arr = ['+','-','*'];
    $operator = $arr[array_rand($arr)];
    $random1 = rand(1,10); 
    $random2 =  rand(1,10); 

    line('Question: '. $random1 . ' ' . $operator . ' ' . $random2); 
    $answer = prompt('Your answer');
    $answerint = intval($answer); 
        
        //считаем result 
        if ($operator === '+'){
            $result = $random1+$random2 ; 
        }
        else if  ($operator === '-'){
            $result = $random1-$random2   ; 
            }
        else {
            $result = $random1*$random2  ;
        } 
        // закончили считать result
        
        //сравниваем result и answer   
        if ($result === $answerint) {
        line("Correct!");  
        }
             
        else {
            return line($answer . " is wrong answer ;(. Correct answer was " . $result); 
            line("Let's try again, " . $name ." !");
          

        }
        
    }
    line("Congratulations, " . $name . "!");
} 

 