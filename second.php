<?php
$firstName='Szymon';
$secondName=&$firstName;
$secondName='Krzysztof';
echo "My first name is {$firstName}.",PHP_EOL;
echo "My second name is{$secondName}.",PHP_EOL;
