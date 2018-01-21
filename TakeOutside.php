<?php
declare(strict_types=1);

trait TakeOutside
{
private $inside = true;    
    
public function TakeOutside(){
    
     $this->inside = !$this->inside;
}
}    
    
}