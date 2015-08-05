<?php
require_once 'Team.php';
require_once 'Player.php';
require_once 'GameEngine.php';



$zidane=new Player(1,100,100);
$ronaldo=new Player(2,20,98);
$ronaldinho=new Player(3,15,100);
$cafu=new Player(4,98,25);
$bartez=new Player(5,99,0);

$team1= new Team();
$team1->setName("Galatasaray");
$team1->addPlayer($zidane);
$team1->addPlayer($ronaldo);
$team1->addPlayer($bartez);
$team1->addPlayer($cafu);
$team1->addPlayer($ronaldinho);

$zidane2=new Player(6,21,98);
$ronaldo2=new Player(7,21,97);
$ronaldinho2=new Player(8,16,101);
$cafu2=new Player(9,99,12);
$bartez2=new Player(10,98,10);

$team2= new Team();
$team2->setName("fenerbahce");
$team2->addPlayer($zidane2);
$team2->addPlayer($ronaldinho2);
$team2->addPlayer($ronaldo2);
$team2->addPlayer($bartez2);
$team2->addPlayer($cafu2);

$gameEngine=new GameEngine($team1,$team2);
$gameScore=$gameEngine->giveMatchResult();
$homeTeamGoals=$gameScore[0];
$awayTeamGoals=$gameScore[1];
echo $team1->getName().' '.$homeTeamGoals.' '.$team2->getName().' '.$awayTeamGoals;




