<?php
/**
 * Created by PhpStorm.
 * User: Stewart Massie
 * Date: 27/10/18
 * Time: 17:16
 *
 * Now that the specs, mugs, and sausage roll lottery has occurred, life in Aberdeen has started to turn back to normal.
 * However, the clean-up operation associated with the abuse of these items must now begin.
 * Write a php function that takes in:
 * •	A persons name
 * •	The number of specs they own
 * •	The number of mugs they own
 * •	The Number of sausage rolls they own
 * The function must then print out a ‘wanted’ banner
 */

function awardForCapture($specsOwned, $mugsOwned, $sausageRollsOwned)
{
    $award = 10 * (($specsOwned * $mugsOwned * $sausageRollsOwned)/2);
    return $award;
}

function printWantedBanner($name, $specsOwned, $mugsOwned, $sausageRollsOwned)
{
    echo "<p><strong>Wanted:</strong> ". $name . "</p>";
    echo "<p>Known to be in posession of:</p>";
    echo "<p>Specs: " . $specsOwned . "</p>";
    echo "<p>Mugs:" . $mugsOwned . "</p>";
    echo "<p>Sausage Rolls: " . $sausageRollsOwned . "</p>";
    echo "<p>Award for capture: £" . awardForCapture($specsOwned,$mugsOwned,$sausageRollsOwned) . "</p><br><br>";

}

printWantedBanner("Stewart",1,2,3);
printWantedBanner("John",3,4,5);


?>