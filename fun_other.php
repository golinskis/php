<?php
$countries = ['Russia', 'Italy', 'Egypt',];

$serializedCountries=serialize($countries);
var_export(unserialize($serializedCountries));