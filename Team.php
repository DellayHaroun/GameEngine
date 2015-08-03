<?php
require_once 'Player.php';
require_once 'GameEngine.php';
/**
 * Created by PhpStorm.
 * User: haroun
 * Date: 29/07/15
 * Time: 15:46
 */

class Team
{
    private $name;
    private $players = array();

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


    public function addPlayer(Player $player)
    {
        $this->players[$player->getId()] = $player ;
    }


    public function deletePlayer(Player $player)
    {
        unset($this->players[$player->getId()] );
    }


    public function moreGoals()
    {
        if ($firstHalf=true) {

            /** @var TYPE_NAME $goalsFirstHalf */
            $goalsFirstHalf =0;
                $this->$goalsFirstHalf++;
        } else {
            $this->_goalsSecondHalf++;
        }


    }

    public function lessGoals()
    {
        if ($this->_goals > 0)
            if ($firstHa=true) {
                $this->_goalsFirstHalf++;
            } else {
                $this->_goalsSecondHalf++;
            }


    }

}
$game=new GameEngine();
$firstHa=$game->isFirsthalf();

