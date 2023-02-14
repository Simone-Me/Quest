<?php

class Instructions {
    
}

// One Turn
function gameRound(){
    global $rounds_left, $location, $wearing_glasses, $wearing_contacts, $has_mushrooms, $moved_cupboard, $has_soup, $is_hungry, $needs_to_pee;

 //Skip Turn If It's Been Used Up
    if ($rounds_left <= 0){
        return;
    }

    printStatus();

 //Read Command And Respond
    $cmd = readline ("-> ");
    $cmd =  strtolower($cmd);
    echo "\n";
    switch ($cmd) {
        case "help":
            printHelp();
            break;
      	case "put on":
            putOn();
            break;
        case "take off":
            echo "Your glasses are off. How can you find them again? Luckly you have a spare one in the bathroom.";
            $wearing_glasses = FALSE;
            break;
        case "go":
            changeLocation();
            break;
        case "look around":
            lookAround();
            break;
        case "pee":
            pee();
            break;
        case "pick":
            pickMushrooms();
            break;
       case "cook":
            cookSoup();
            break;
        case "eat":
            eatSoup();
            break;
        case "move":
            moveCupboard();
            break;
       case "search":
            if ($location === "kitchen") {
                searchSafe();
            } elseif( $location === "bathroom") {
                echo "The toilet contains an amazing secret. The bowl is filled with ordinary water, but in the tank: the golden mouse statuette. Is it so?\nDo You wanna check?";
                $reply = readline("(y/n)-> ");
                if ($reply == "y"){
                    echo "\nThe mouse's nose seems to follow you as you move. The mouse is beautiful!\nYou love it!\nYou're never going to sell it! Forget Great-Aunt Natasha's emu farm!\n\n****YOU LOSE THE GAME!!!****\n\n";
                    $rounds_left = 1; 
                } else {
                    echo "Better do not awake it. It looks like a classic mouse.";
                }

            } else {
                echo "What the hell are you looking for in the woods, a corpse?";
            }
            break;
        default:
            echo "Sorry, that doesn't work :( Please use one of the valid commands. You can see the list of valid commands by entering 'help'.\n";
    } // End of command switch

    // Use Up A Round
    $rounds_left = $rounds_left - 1;
    echo "\nYou now have $rounds_left rounds left.\n\n";
} // End of gameRound() function