<?php

// Global Variable Initialization
$rounds_left = 25;
$location = "kitchen";
$wearing_glasses = FALSE;
$has_mushroom = FALSE;
$has_soup = FALSE;
$moved_cupboard = FALSE;
$is_hungry = TRUE;
$needs_to_pee = TRUE;

// Include each of the function definitions

include "printHelp.php";
include "gameRound.php";

include "printStatus.php";
include "changeLocation.php";
include "lookAround.php";

include "pickMushrooms.php";
include "cookSoup.php";
include "eatSoup.php";

include "pee.php";

include "moveCupboard.php";
include "searchSafe.php";

//Display Intro Text
echo "\n**********WELCOME***********\n\nWelcome to the adventure! You have 25 total rounds before the game ends. The \"help\" command will print a list of actions allowed during the game.\n";
//printHelp();
echo "\nOk, the gapupume is about to begin. Will you be able to find the golden mouse statuette and save your great-aunt's farm? We wish you good luck!\n\n**********BEGIN GAME***********\n";

echo "\nHello there. It's been a harrowing few weeks. First your toenail issue, and now Great-Aunt Natasha's emu farm is in danger of being reposessed! So here you are---after a brief stopover at the Mayo clinic---in uncle Boris's remote cabin in the heart of the Terror Woods. Family legend holds that a golden statue of immense value is hidden somewhere within these walls. Unfortunately, you have a lot of stuff to do today, so you can only devote about 25 minutes to finding the statue. I guess we'll see what happens ;) \n\n";

// Play 25 rounds
for ($i = 0; $i <= $rounds_left; $i++) {
    gameRound();
}



// Game Is Over
echo "\n**********ATTENTION***********\n The game is over!" ;



