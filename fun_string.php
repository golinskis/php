<?php

$strings=['Navicat','Category','Catharsis'];
foreach($strings as $string){
    echo strpos($string,'cat');
    echo strlen($string);
    echo str_replace("cat","dog",$string), PHP_EOL;
     
    
    
   
}

