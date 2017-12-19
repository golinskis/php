<?php

declare(strict_types=1);

for($i = 1;$i <= 10;$i++){
	if($i<5)
{
		continue;
	}
	if($i%2 !== 0)
{
		echo $i."jest liczba nieparzysta",PHP_EOL;
	}	
	else{
		echo $i." jest liczba parzysta",PHP_EOL;
		}
}
	

