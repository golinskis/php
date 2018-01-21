<?php
declare(strict_types=1);
trait TurnOnApplication {
public $isTurnOn = false;
    
public function switchStatus(){
    $this->isTurnOn = !$this->isTurnOn;
}
    
    

    
}