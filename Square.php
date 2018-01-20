<?php
declare(strict_types=1);

class Square extends Rectangle
{
public function setHeight(int $height){

$this->height = $height;
$this->width =$height;
}

public function setWidth(int $width){

$this->width = $width;
$this->height = $width;

}



}
