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






    public function getName()
    {
        return $this->name;
    }



    public function setName($name)
    {
        $this->name = $name;
    }


    public function getPlayers()
    {
        return $this->players;
    }



    public function addPlayer(Player $player)
    {
        $this->players[$player->getId()] = $player ;
    }


    public function deletePlayer(Player $player)
    {
        unset($this->players[$player->getId()] );
    }


    public function teamAttackPower()
    {
        $x =0;

        foreach($this->players as $Player)
        {
            $x += $Player->getAttackPower();
        }
        return $x ;
    }


    public function teamDefencePower()
    {

        $x =0;

        foreach($this->players as $Player)
        {
            $x += $Player->getDefencePower();
        }
        return $x ;
    }


}
