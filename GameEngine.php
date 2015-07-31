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
    /**
     * @return boolean
     */
    public function isFirsthalf()
    {
        return $this->firsthalf;
    }

    /**
     * @param boolean $firsthalf
     */
    public function setFirsthalf($firsthalf)
    {
        $this->firsthalf = $firsthalf;
    }

    private $awayTeam;
    private $homeTeam;
    private $firsthalf = true;
    public $x=45 ;

    public function startGame()
    {   echo "Time left before end of first half: $this->x";
        $this->x -= 1;
        if ($this->x =0 )
        {
            $this->setFirsthalf(false);
            echo "You are now in the second half";
        }
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
