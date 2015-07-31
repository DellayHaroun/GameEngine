<?php
require_once 'Player.php';
require_once 'firstHalfResult.php';
require_once 'secondHalfResult.php';
/**
 * Created by PhpStorm.
 * User: haroun
 * Date: 29/07/15
 * Time: 15:46
 */
public

class team
{
    private $name;
    private $players = array();
    private $firsthalf = true;
    private $goalsFirstHalf = 0;
    private $goalsSecondHalf = 0;


    /******Setter+Getter*****/

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

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


    /**
     * @return int
     */
    public function getGoalsFirstHalf()
    {
        return $this->goalsFirstHalf;
    }

    /**
     * @param int $goalsFirstHalf
     */
    public function setGoalsFirstHalf($goalsFirstHalf)
    {
        $this->goalsFirstHalf = $goalsFirstHalf;
    }

    /**
     * @return int
     */

    public function getGoalsSecondHalf()
    {
        return $this->goalsSecondHalf;
    }

    /**
     * @param int $goalsSecondHalf
     */
    public function setGoalsSecondHalf($goalsSecondHalf)
    {
        $this->goalsSecondHalf = $goalsSecondHalf;
    }

    /**
     *
     */
    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /******Setter+Getter*****/


    public function addPlayer($player, $players)
    {
        $x = boolval(in_array($player->id, [$player]));
        if (!x) {
            array_push($players ,"$player->id","$player->defencePower","$player->attackPower");

        }

    }


    public function deletePlayer($player, $players)
    {
        unset($players[$player->id]);
    }


    public function moreGoals()
    {
        if ($firsthalf) {
            $this->_goalsFirstHalf++;
        } else {
            $this->_goalsSecondHalf++;
        }


    }

    public function lessGoals()
    {
        if ($this->_goals > 0)
            if ($firsthalf) {
                $this->_goalsFirstHalf++;
            } else {
                $this->_goalsSecondHalf++;
            }


    }

}



