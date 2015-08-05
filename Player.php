<?php
class Player
{
    private $id ;
    private $defencePower ;
    private $attackPower ;

    public function __construct($id,$defencePower,$attackPower)
    {
        $this->id=$id;
        if($attackPower>100 || $attackPower<0)
        {
            throw new Exception('Attack non Coherent');
        }
        $this->attackPower=$attackPower;
        if($defencePower>100 || $defencePower<0)
        {
            throw new Exception('Defence non Coherent');
        }
        $this->defencePower=$defencePower;


    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDefencePower()
    {
        return $this->defencePower;
    }

    /**
     * @param mixed $defencePower
     */
    public function setDefencePower($defencePower)
    {
        $this->defencePower = $defencePower;
    }

    /**
     * @return mixed
     */
    public function getAttackPower()
    {
        return $this->attackPower;
    }

    /**
     * @param mixed $attackPower
     */
    public function setAttackPower($attackPower)
    {
        $this->attackPower = $attackPower;
    }

}
