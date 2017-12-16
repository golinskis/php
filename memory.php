<?php

$allocatedMemory = memory_get_usage();

echo $allocatedMemory;

if($allocatedMemory<640){
echo "640 KB wystarczy kazdemu";
}
else{ 
echo "Nie";
}
