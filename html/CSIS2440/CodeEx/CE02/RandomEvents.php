<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Rando Page</title>
    </head>
    <body>
        <?php
        $score = 0;
        print("<table><tr><th>Player</th><th>Computer</th><th>Rounds</th></tr>\n");
        //here write a loop that will run 10 times and compare the scores, increment the score if grater, decrementing if less and leaving it if equal
        for ($round = 0; $round < 10; $round++)
        {
            $playerscore = rand(1, 100);
            $computerscore = rand(1, 100);
            print("<tr><td>$playerscore</td><td>$computerscore</td>");
        //this if statement will check the player and computer and adjust the $score
            if ($playerscore < $computerscore)
            {                
                print ("<td>Player has lost this round</td></tr>\n");
                $score--;
            } elseif ($playerscore > $computerscore) 
              {
                print("<td>Player has won this round</td></tr>\n");
                $score++;
              } else
                {
                  print("<td>Player has tied this round</td></tr>\n");
                }
        }
        //this should print each round out in the table.
        print("<tr><td colspan=2>$score</td><td>Player Score</td></tr><table>\n");
        ($score > 0)?print("Good Job"): print("Sorry you lost");
        
        //Year of the---

        $year = date("Y");
        print("<p>It is the year of the:<br>");
        //Here you will write out a switch that will print out the year using the modulo(% 12)
        //Monkey, roster, dog, boar, rat, ox, tiger, rabbit, dragon, snake, horse, and lamb is the order, do not forget a default case
        switch ($year % 12)
        {
            case 0:
                echo 'Monkey</p>';
                break;
            case 1:
                echo 'roster</p>';
                break;
            case 2:
                echo 'dog</p>';
                break;
            case 3:
                echo 'boar</p>';
                break;
            case 4:
                echo 'rat</p>';
                break;
            case 5:
                echo 'ox</p>';
                break;
            case 6:
                echo 'tiger</p>';
                break;
            case 7:
                echo 'rabbit</p>';
                break;
            case 8:
                echo 'dragon</p>';
                break;
            case 9:
                echo 'snake</p>';
                break;
            case 10:
                echo 'horse</p>';
                break;
            case 11:
                echo 'lamb</p>';
                break;
            default :
                echo 'Something broke';
            
        }
        ?>
    </body>
</html>