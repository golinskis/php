<?php

declare(strict_types=1);

class GentleCustomer extends Customer
{
public function askForDiscount():void
{
echo "Dzien dobry, nazywam się $this->name, chcialbym sie dowiedziec czy przyslugujej mi jakas znizka";

}



}
