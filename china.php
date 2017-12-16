<?php

$yearOfBirth=1990;
$moduloOfBirth=$yearOfBirth%12;

switch ($yearOfBirth){
    case ($moduloOfBirth==0):
        echo "Małpa";
        break;
    case ($moduloOfBirth==1):
        echo "Koguta";
        break;
    case ($moduloOfBirth==2):
        echo "Psa";
        break;
    case ($moduloOfBirth==3):
        echo "Swinia";
        break;
    case ($moduloOfBirth==4):
        echo "Szczur";
        break;
    case ($moduloOfBirth==5):
        echo "Bawol";
        break;
    case ($moduloOfBirth==6):
        echo "Tygrys";
        break;
    case ($moduloOfBirth==7):
        echo "Krolik";
        break;
    case ($moduloOfBirth==8):
        echo "Smok";
        break;
    case ($moduloOfBirth==9):
        echo "Waz";
        break;
    case ($moduloOfBirth==10):
        echo "Kon";
        break;
    case ($moduloOfBirth==11):
        echo "Owca";
        break;
        
};

