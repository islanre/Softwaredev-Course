<?php
/**
 * Created by PhpStorm.
 * User: Stewart Massie
 * Date: 27/10/18
 * Time: 16:26
 *
 *
 * The people of Aberdeen are still struggling to understand at what age they are allowed to have specs, mugs, and sausage rolls. Make a webpage that stores a variable called $wantedgood. Create a switch statement that takes this variable and prints out how old you have to be.
E.g. if $wantedgood = “mugs” then the system would print “You have to be 18 to buy mugs”.
 */

$wantedgood = "mugs";

switch ($wantedgood) {
    case "specs":
        echo "You have to be 16 to buy specs";
        break;
    case "mugs":
        echo "You have to be 18 to buy mugs";
        break;
    case "sausage rolls":
        echo "You have to be 21 to buy sausage rolls";
        break;
    default:
        echo "You haven't selected a thing to buy";
}

