<?php

$alcohols2=['beer','wine','whisky','vodka'];

echo count($alcohols);
end($alcohols);
array_pop($alcohols);
echo count($alcohols);
array_chunk($alcohols,3);
var_export($alcohols);
