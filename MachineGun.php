<?php

class MachineGun extends clip {

    public $serial;

    public function __construct($serial, $capacity, $amount){
        $this->setCapacity($capacity);
        $this->setAmount($amount);

        if($this->getAmount() <= $this->getCapacity($capacity)){
            $this->shoots = $this->getAmount();
        }else{
            $this->shoots = $this->getCapacity($this->capacity);
        }
    }

    public function multishoot(){
           for($i = 0; $i <= $this->serial; $i++) {
               $this->shoot();
        }
    }

};
