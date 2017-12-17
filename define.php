<?php
error_reporting(E_ALL);
ini_set('display_errors',true);
const MAX_SLIDES_NUMBER = 99;
if(defined('MAX_SLIDES_NUMBER')){
define("MAX_SLIDES_NUMBER",666);
};
echo "Maksymalna ilosc slajdow: ",MAX_SLIDES_NUMBER, PHP_EOL;
