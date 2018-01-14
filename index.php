<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

require_once 'Customer.php';
require_once 'ChaoticCustomer.php';
require_once 'GentleCustomer.php';
require_once 'CustomerFactory.php';


$janek = CustomerFactory::chooseCustomer(CustomerFactory::GENTLE);


