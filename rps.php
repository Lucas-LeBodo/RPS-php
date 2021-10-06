#!/usr/bin/php
<?php


    $args = $argv[1];
    $params = ["help", "h", "rock", "paper", "scissor"];

    if(in_array($args, $params)){
        if($args === "help" || $args === "h"){
            echo "----- Help -----\n\nValid arguments :\n-> help / h\n-> rock\n-> paper\n-> scissor\n----------------\n";
            return;
        }
        
        $bot = rand(1, 3);
        if( $bot === 1 )
            $bot = "rock";
        if( $bot === 2 )
            $bot = "paper";
        if( $bot === 3 )
            $bot = "scissor";    
        
        echo "You : ".$args."\nBot : ".$bot."\n\n";
        
        if($bot === $args){
            echo "Egality ! Try again.\n";
        } else if($bot === "paper"){
            if($args === "scissor")
                echo "Congratulation, You win !\n";
            else
                echo "You lose. Try again !\n";    
        }else if($bot === "scissor"){
            if($args === "rock")
                echo "Congratulation, You win !\n";
            else
                echo "You lose. Try again !\n";    
        }else if($bot === "rock"){
            if($args === "paper")
                echo "Congratulation, You win !\n";
            else
                echo "You lose. Try again !\n";    
        }
    } else {
        echo "/!\ ERROR /!\ \n\nPlease use: \n->  php rps.php help   \n\nFor get a helping page.\n";
    }

