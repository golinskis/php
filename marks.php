<?php
$names=[
    'Alicja'=>[
        'fizyka'=>'3',
        'chemia'=>'4',
        'biologia'=>'2',
],

    'Bobik'=>[
        'fizyka'=>'4',
        'chemia'=>'4',
        'biologia'=>'5',
],

    'Szymon'=>[
        'fizyka'=>'5',
        'chemia'=>'6',
        'biologia'=>'4',
],
];

foreach($names as $name => $subject){
    foreach ($subject as $key => $note){
        
        echo "Imie ".$name." przedmiot ".$key." ocena ".$note, PHP_EOL;
    }
}