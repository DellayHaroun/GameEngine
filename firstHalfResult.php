<?php
require_once 'Team.php';
/**
 * Created by PhpStorm.
 * User: haroun
 * Date: 30/07/15
 * Time: 11:15
 */
class firstHalfResult

{
    private $goalsFirstTeam=0;
    private $goalsSecondTeam=0;

    /**
     * @return int
     */
    public function getGoalsSecondTeam()
    {
        return $this->goalsSecondTeam;
    }

    /**
     * @return int
     */
    public function getGoalsFirstTeam()
    {
        return $this->goalsFirstTeam;
    }

    /**
     * @param int $goalsSecondTeam
     */
    public function setGoalsSecondTeam($goalsSecondTeam)
    {
        $this->goalsSecondTeam = $goalsSecondTeam;
    }

    /**
     * @param int $goalsFirstTeam
     */
    public function setGoalsFirstTeam($goalsFirstTeam)
    {
        $this->goalsFirstTeam = $goalsFirstTeam;
    }


}