<?php
for($i=0;$i<10;++$i){
    do { 
    $number=rand(1,1000);
    }while($number%2);
        echo $number, PHP_EOL;
    
}