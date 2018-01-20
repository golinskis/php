<?php
declare(strict_types=1);

class Rectangle{
public $width;
public $height;

public function setHeight(int $height)
{
$this->height = $height;
}
public function getHeight()
{
return $this->height;

}
public function setWidth(int $width){
$this->width = $width;
}
public function getWidth(){
return $this->width = $width;
}

public function getArea(){

return $this->height * $this->width;
}

}
