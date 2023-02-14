<?php
  
function pickMushrooms(){
	// Write your code here:
  global $location, $has_mushrooms, $wearing_glasses;
  if ($location == "woods") {
    if ($wearing_glasses) {
      echo "Great those look perfect to cook. You've picked some mushrooms.\n";
      $has_mushrooms = true;
    } else {
      echo "The wind is too strong to let your eyes open. It is too hard to pick any without breaking it. Be careful ! You are stepping over all the one you need to cook!";
    }
  } else {
    echo "There aren't any mushrooms to pick!\n";
  }
} 

function putOn(){
  global $location, $wearing_glasses;
  if ($location == "bathroom") {
    echo "You finally can open your eyes again. Your glasses are on.";
    $wearing_glasses = TRUE;  
  } else {
    echo "You left yoru glasses in the bathroom";
  }
}