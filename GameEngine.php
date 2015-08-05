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
    private $isFirsthalfPlayed = false;
    private $goalsFirstHalfFirstTeam = 0;
    private $goalsSecondHalfFirstTeam = 0;
    private $goalsFirstHalfSecondTeam = 0;
    private $goalsSecondHalfSecondTeam = 0;

    public function __construct(Team $home, Team $away)
    {
        $this->setAwayTeam($away);
        $this->setHomeTeam($home);
    }

    /**
     * @return mixed
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

    /**
     * @param mixed $awayTeam
     */
    public function setAwayTeam($awayTeam)
    {
        $this->awayTeam = $awayTeam;
    }

    /**
     * @return mixed
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * @param mixed $homeTeam
     */
    public function setHomeTeam($homeTeam)
    {
        $this->homeTeam = $homeTeam;
    }



    /**
     * @return int
     */
    public function getGoalsFirstHalfSecondTeam()
    {
        return $this->goalsFirstHalfSecondTeam;
    }

    /**
     * @param int $goalsFirstHalfSecondTeam
     */
    public function setGoalsFirstHalfSecondTeam($goalsFirstHalfSecondTeam)
    {
        $this->goalsFirstHalfSecondTeam = $goalsFirstHalfSecondTeam;
    }

    /**
     * @return int
     */
    public function getGoalsSecondHalfSecondTeam()
    {
        return $this->goalsSecondHalfSecondTeam;
    }

    /**
     * @param int $goalsSecondHalfSecondTeam
     */
    public function setGoalsSecondHalfSecondTeam($goalsSecondHalfSecondTeam)
    {
        $this->goalsSecondHalfSecondTeam = $goalsSecondHalfSecondTeam;
    }
    /**
     * @return boolean
     */
    public function isIsFirsthalfPlayed()
    {
        return $this->isFirsthalfPlayed;
    }

    /**
     * @param boolean $isFirsthalfPlayed
     */
    public function setIsFirsthalfPlayed($isFirsthalfPlayed)
    {
        $this->isFirsthalfPlayed = $isFirsthalfPlayed;
    }

    /**
     * @return int
     */
    public function getGoalsFirstHalfFirstTeam()
    {
        return $this->goalsFirstHalfFirstTeam;
    }

    /**
     * @param int $goalsFirstHalfFirstTeam
     */
    public function setGoalsFirstHalfFirstTeam($goalsFirstHalfFirstTeam)
    {
        $this->goalsFirstHalfFirstTeam = $goalsFirstHalfFirstTeam;
    }

    /**
     * @return int
     */
    public function getGoalsSecondHalfFirstTeam()
    {
        return $this->goalsSecondHalfFirstTeam;
    }

    /**
     * @param int $goalsSecondHalfFirstTeam
     */
    public function setGoalsSecondHalfFirstTeam($goalsSecondHalfFirstTeam)
    {
        $this->goalsSecondHalfFirstTeam = $goalsSecondHalfFirstTeam;
    }


    public function getAttackAdventageOfHomeTeam()
    {
        return($this->getHomeTeam()->getAttackPower() - $this->getAwayTeam()->getDefencePower());

    }
    public function getAttackAdventageOfAwayTeam()
    {
        return($this->getAwayTeam()->getAttackPower() - $this->getHomeTeam()->getDefencePower());
    }




    public function giveMatchResult()
    {
        $attackAdventageOfHomeTeam=$this->getAttackAdventageOfHomeTeam();
        $attackAdventageOfAwayTeam=$this->getAttackAdventageOfAwayTeam();

        $minhomeTeamGoal=0;
        $minAwayTeamGoal=0;
        $maxHomeTeamGoal= 3;
        $maxAwayTeamGoal= 2;

        if($attackAdventageOfHomeTeam>$attackAdventageOfAwayTeam)
        {
           $maxHomeTeamGoal += $attackAdventageOfHomeTeam-$attackAdventageOfAwayTeam;
        }
        else
        {
            $maxAwayTeamGoal += $attackAdventageOfAwayTeam-$attackAdventageOfHomeTeam;
        }

        if($maxHomeTeamGoal>10)
        {
            $maxHomeTeamGoal=10;
        }
        if($maxAwayTeamGoal>10)
        {
            $maxAwayTeamGoal=10;
        }


        $goalsOfHomeTeam=rand($minhomeTeamGoal,$maxHomeTeamGoal);
        $goalsOfAwayTeam= rand($minAwayTeamGoal,$maxAwayTeamGoal);

        $score = array();
        $score[]=$goalsOfHomeTeam;
        $score[]=$goalsOfAwayTeam;
        return($score);
    }

}
