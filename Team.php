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
        $this->players[$player->getId()] = $player;
    }


    public function deletePlayer(Player $player)
    {
        unset($this->players[$player->getId()]);
    }


    public function getAttackPower()
    {
        $x = 0;

        /** @var Player $player */
        foreach ($this->players as $player) {
            $x += $player->getAttackPower();
        }
        return $x;
    }


    public function getDefencePower()
    {
        $x = 0;
        /** @var Player $player */
        foreach ($this->players as $player) {
            $x += $player->getDefencePower();
        }
        return $x;
    }


}
