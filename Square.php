<?php
declare(strict_types=1);

class Square implements AreaInterface
{
public function setLength(int $length) {

$this->length = $length;
}

public function getLength() {

return $this->length = $length;

}

    public function calcArea() {

    return $this->length * $this->length;
}


}
