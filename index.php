<?php
declare(strict_types=1);
require_once 'Rectangle.php';
require_once  'Square.php';
$kwadrat = new Rectangle();
$kwadrat->setHeight(5);
$kwadrat->setWidth(8);
echo $kwadrat->getArea();

$prostokat = new Square();
$prostokat->setWidth(5);
$prostokat->setHeight(5);
echo $prostokat->getArea();
