<?php
$ile= 44;
if($ile>20){
    $ileString=(string)$ile;
    $ileDziesiatki=$ileString{0};
    $ileJednosci=$ileString{1};
    $dziesiatki=['dziesiec','dwadziescia','trzydziesci','czterdziesci','piecdziesiat','szescdziesiat','siedemdziesiat','osiemdziesiat','dziewiecdziesiat',];
}

$jednosci=['zero','jeden','dwa','trzy','cztery','piec','szesc','siedem','osiem','dziewiec'];
$zlotychJednosci=['zlotych','zloty','zlote','zlote','zlote','zlotych','zlotych','zlotych','zlotych','zlotych'];

$setki=['sto','dwiescie','trzysta','czterysta','piecset','szescset','siedemset','osiemset','dziewiecset',];
echo $dziesiatki[$ileDziesiatki[0]].$jednosci[$ileJednosci[1]]." ".$zlotychJednosci[$ile],PHP_EOL;