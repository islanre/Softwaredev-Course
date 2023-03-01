<?php
/**
 * Created by PhpStorm.
 * User: Stewart Massie
 * Date: 27/10/18
 * Time: 16:20
 *
 *
 * Aberdeen is the home of specs, mugs and sausage rolls. You are only allowed to:
 *      buy specs if you are over 16,
 *      buy mugs if you are over 18,
 *      and buy sausage rolls if you are over 21
 * Create a web page that stores a person’s age at the top in a variable called $myage. The page will then use PHP to print out their name and use an if/elseif/else statement to print out which of the three items they are allowed to buy.
 */

$myage = 28;

if ($myage >= 21) {
    echo "You can buy specs, mugs, and sausage rolls";
}
elseif ($myage >= 18) {
    echo "You can buy specs and mugs";
}
elseif ($myage >= 16) {
    echo "You can buy specs";
}
else {
    echo "You can't buy anything";
}
?>

