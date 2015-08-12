<?php

    class RockPaperScissors
    {

        function playRockPaperScissors($first_input, $second_input)
        {
            if ($first_input == "rock" && $second_input == "scissors")
            {
                return "Player 1";
            }
            elseif ($first_input == "paper" && $second_input == "scissors")
            {
                return "Player 2";
            }
            elseif ($first_input == "paper" && $second_input == "paper")
            {
                return "Draw"; 
            }
        }

    }

?>
