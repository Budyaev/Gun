<?php

abstract class Clip extends Gun {

    protected $capacity;


    public function getCapacity($capacity){
        return $this->capacity = $capacity;
    }

    Public function setCapacity($capacity = 20){
        $this->capacity = $capacity;

    }

    public function reload()
    {
        $difAmmo = $this->getCapacity($this->capacity) - $this->shoots;
        if ($this->getAmount() > $difAmmo) {
            $this->setAmount($this->getAmount() - $difAmmo);
            $this->shoots += $difAmmo;
            echo "Reloaded: " . $difAmmo . "!";
        } else {
            $this->shoots += $this->getAmount();
            echo "Reloaded: " . $this->getAmount() . "!" . PHP_EOL .
                $this->setAmount(0);


        }
    }
}