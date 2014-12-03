<?php

abstract class Gun
{
    const GUN_SOUND = "BANG!";

    public $shoots;

    protected $amount;

    public function getAmount(){
       return $this->amount;
    }

    public function setAmount($amount = 20){
        $this->amount = $amount;
    }

    public function addAmount($amount = 10){
        $this->amount += $amount;
    }

    public function shoot(){
        if($this->isReady()){
            echo self::GUN_SOUND;
            $this->shoots -= 1;
            echo PHP_EOL;
        } else{
            echo "No ammo in Clip! Reload?";
        }
    }

    public function isReady(){
        if($this->shoots > 0){
            return true;
        }
        return false;
    }
};

