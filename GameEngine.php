<?php
require_once 'Team.php';
require_once 'Player.php';
/**
 * Created by PhpStorm.
 * User: haroun
 * Date: 29/07/15
 * Time: 16:01
 */
$zidane=new Player(1,20,99);
$ronaldo=new Player(2,20,98);
$ronaldinho=new Player(3,15,100);
$cafu=new Player(4,98,25);
$bartez=new Player(5,99,0);

$team1= new Team();
$team1->addPlayer(,players);
$team1->addPlayer();
$team1->addPlayer();
$team1->addPlayer();
$team1->addPlayer();

$zidane2=new Player(6,21,98);
$ronaldo2=new Player(7,21,97);
$ronaldinho2=new Player(8,16,101);
$cafu2=new Player(9,99,12);
$bartez2=new Player(10,98,10);

$team2= new Team();
$team2->addPlayer(,players);
$team2->addPlayer();
$team2->addPlayer();
$team2->addPlayer();
$team2->addPlayer();


if($team1->getGoalsFirstHalf()+$team1->getGoalsSecondHalf()>$team2->getGoalsSecondHalf()+$team2->getGoalsSecondHalf())
{
    echo "Team1 has won";
}
else echo "Team 2 has won ";