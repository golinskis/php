<?php
$var=5;
$cast=(object) $var;
var_dump($var,$cast);
$var=5.5;
$cast= (object)$var;
var_dump($var,$cast);
$var='4php';
$cast=(object)$var;
var_dump($var,$cast);
