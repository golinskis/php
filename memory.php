<?php

$allocatedMemory = memory_get_usage();


if($allocatedMemory<640){
	echo "640 KB wystarczy kazdemu";
}
	else{ 
		echo "Nie".(($allocatedMemory/1024)/1024)." mb tyle potrzebujesz";

}
