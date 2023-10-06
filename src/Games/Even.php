<?php

namespace BrainGames\Even;

use BrainGames\Cli;
use BrainGames\Engine;
use function cli\greet;
use function cli\line;
use function cli\prompt;
use function Engine\engine; 

 
function even($name)
{
   
   $random = '';
   $username = $name;     
    line($random = rand(1, 10)); 
        $answer = prompt('Your answer');
        
        if ($random % 2 === 1 && $answer === 'yes') {
          $result = 'no';   $answer = 'yes'; 
                       
        }
        else if ($random % 2 === 0 & $answer === 'no')  {
          $result = 'yes'; 
           $answer = 'no'; 
           return  Engine\results($answer, $result, $username);             
           
        }
        else if ($random % 2 === 1 & $answer !== 'no')  {
           $result = 'yes'; 
           $answer = 'no'; 
           return  Engine\results($answer, $result, $username); 
            
        }
        else if ($random % 2 === 0 & $answer !== 'yes')  {
         $result = 'no';
            $answer = 'yes'; 
            return  Engine\results($answer, $result, $username); 
           
        }
        else if  ($random % 2 === 0 & $answer === 'yes'){
            $result = 'yes';
            $answer = 'yes'; 
            return  Engine\results($answer, $result, $username); 
        }
        else if ($random % 2 === 1 & $answer === 'no'){
           $result = 'no';
           $answer = 'no'; 
           return  Engine\results($answer, $result, $username); 
        }    
    }
    


 