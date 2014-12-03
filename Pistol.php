<?php

class Pistol extends clip {

    public function __construct($capacity, $amount){
        $this->setCapacity($capacity);
        $this->setAmount($amount);
        if($this->getAmount() <= $this->getCapacity($capacity)){
            $this->shoots = $this->getAmount();
        }else{
        $this->shoots = $this->getCapacity($this->capacity);
        }
    }

};
