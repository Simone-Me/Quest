<?php

function searchSafe(){
	// Write your code here:
  global $location, $moved_cupboard, $rounds_left;
  if (!($moved_cupboard)) {
    echo  "You don't see any safe here!\n";
  } else {
    echo "You search through the safe. There is a passcode. (the passcode is \"1234\"). With bated breath, you pull out the contents! It's a chocolate Mickey Mouse, wrapped in gold foil. Delicious!\n
    YOU WIN THE GAME!!!!\n\n";
    $rounds_left = 1;
  }
}  