<?php
  // Change player location
function changeLocation(){	
  // Write your code here:
  global $location;
  echo "Where do you want to go?\n";
  $destination = strtolower(readline("-> "));
  if ($location == "kitchen" && $destination == "bathroom") {
    $location = $destination;
    echo "You go to: $destination.\n";
  } elseif ($location == "kitchen" && $destination == "woods") {
    $location = $destination;
    echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.\n";
  } elseif (($location == "bathroom" || $location == "woods") && $destination == "kitchen") {
    $location = $destination;
    echo "You go to: $destination.\n";
  } elseif ($destination == "woods" || $destination == "bathroom" || $destination == "kitchen") {
    echo "You can't go directly to $destination from your current location. Try going somewhere else first.\n";
  } else {
    echo "That doesn't make sense. Are you confused? Try 'look around'.\n";
  }
}