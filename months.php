<?php
declare(strict_types=1);


$months=['styczen','luty','marzec','kwiecien','maj','czerwiec','lipiec','sierpien','wrzesien','pazdziernik','listopad','grudzien',];

foreach($months as $month)
{

	echo $month,PHP_EOL;

}

for($i=0;$i<count($months);$i++){

echo $months[$i],PHP_EOL;
}


$i=0;
while($i<count($months))
{
	echo $months[$i],PHP_EOL;
	$i++;
} 
