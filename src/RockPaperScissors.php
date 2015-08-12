<?php

    class RockPaperScissors
    {

        function playRockPaperScissors($first_input, $second_input)
        {

            if (($first_input == "rock" && $second_input == "scissors") ||
            ($first_input == "scissors" && $second_input == "paper") ||
            ($first_input == "paper" && $second_input == "rock"))
            {
                return "Player 1";

            }
            elseif (($second_input == "rock" && $first_input == "scissors") ||
            ($second_input == "scissors" && $first_input == "paper") ||
            ($second_input == "paper" && $first_input == "rock"))
            {
                return "Player 2";
            }

            elseif (($first_input == "rock" && $second_input == "rock") ||
            ($first_input == "scissors" && $second_input == "scissors") ||
            ($first_input == "paper" && $second_input == "paper"))
            {
                return "Draw";
            }

        }


        // function keepScore($first_input, $second_input)
        // {
        //     $player1 = 0;
        //     $score_player2 = 0;
        //
        //     if (($first_input == "rock" && $second_input == "scissors") ||
        //     ($first_input == "scissors" && $second_input == "paper") ||
        //     ($first_input == "paper" && $second_input == "rock"))
        //     {
        //         $new_player1_score = $player1 + 1;
        //         echo $new_player1_score;
        //     }
        //     elseif (($second_input == "rock" && $first_input == "scissors") ||
        //     ($second_input == "scissors" && $first_input == "paper") ||
        //     ($second_input == "paper" && $first_input == "rock"))
        //     {
        //         $new_player2_score = $score_player2 + 1;
        //         echo $new_player2_score;
        //     }
        //
        // }
    }


?>
