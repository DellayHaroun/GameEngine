<?php
require_once 'Team.php';
require_once 'Player.php';
/**
 * Created by PhpStorm.
 * User: haroun
 * Date: 29/07/15
 * Time: 16:01
 */


$team1= new Team();
$team1->addPlayer(zidane,players);
$team1->addPlayer()
$team2= new Team();

if($team1->getGoalsFirstHalf()+$team1->getGoalsSecondHalf()>$team2->getGoalsSecondHalf()+$team2->getGoalsSecondHalf())
{
    echo "Team1 has won";
}
else echo "Team 2 has won ";