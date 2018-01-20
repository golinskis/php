<?php
declare(strict_types=1);
require_once 'AreaInterface.php';
require_once 'Rectangle.php';
require_once 'Square.php';

$kwadrat = new Rectangle();
$kwadrat->setHeight(5);
$kwadrat->setWidth(8);
echo $kwadrat->calcArea();

$rectangle = new Square();
$rectangle->setLength(5);
echo $rectangle->calcArea();


