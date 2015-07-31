<?php
require_once 'Team.php';
require_once 'Player.php';
/**
 * Created by PhpStorm.
 * User: haroun
 * Date: 29/07/15
 * Time: 16:01
 */
class GameEngine{

    private $awayTeam;
    private $homeTeam;
    public function startGame()
    {

    }

    /**
 * @return mixed
 */
public function getAwayTeam()
{
    return $this->awayTeam;
}/**
 * @param mixed $awayTeam
 */
public function setAwayTeam($awayTeam)
{
    $this->awayTeam = $awayTeam;
}/**
 * @return mixed
 */
public function getHomeTeam()
{
    return $this->homeTeam;
}/**
 * @param mixed $homeTeam
 */
public function setHomeTeam($homeTeam)
{
    $this->homeTeam = $homeTeam;
}
}
