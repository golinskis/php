
<?php

$weekdays = [
 	pl => [ 
    		'monday' => 'poniedziałek',
    		'thuesday '=> 'wtorek',
   		'wednesday' => 'sroda',
    		'thursday'=> 'czwartek',
    		'friday'=>'piatek',
    		'saturday'=>'sobota',
    		'sunday'=>'niedziela',
	],
	de => [
    		'monday'=>'montag',
    		'thuesday'=>'dienstag',
    		'wednesday'=>'mittwoch',
    		'thursday'=>'donnerstag',
    		'friday'=>'freitag',
    		'saturday'=>'samstag',
    		'sunday'=>'sonntag',
	],
 ];
$checkWeekday='monday';

echo  isset($weekdays['de'][$checkWeekday])  ? $weekdays['de'][$checkWeekday] :"Nie istnieje";
echo  isset($weekdays['it'][$checkWeekday])  ? $weekdays['it'][$checkWeekday] :"Nie istnieje";
echo  isset($weekdays['pl'][$checkWeekday])  ? $weekdays['pl'][$checkWeekday] :"Nie istnieje";

var_export($weekdays);

