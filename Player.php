<?php
public class player
{
    public $id ;
    public $defencePower ;
    public $attackPower ;

    public function __construct($id,$defencePower,$attackPower)
    {
        $this->id=$id;
        $this->attackPower=$attackPower;
        $this->defencePower=$defencePower;


    }

}
