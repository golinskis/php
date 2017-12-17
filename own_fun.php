<?php

declare(strict_types=1);

/**
 *Wyswietlenie  z formatowaniem podanego nazwiska.
 *
 *@param string $familiyName nazwisko.
 *@param int $yearOfBirth rok urodzenia.
 */

function printFamiliyName (string  $familiyName,int  $yearOfBirth=2000) : void
{
	echo "Name: $familiyName "." Born : ".$yearOfBirth, PHP_EOL;
};

printFamiliyName ('Golinski',1990);
printFamiliyName ('Kowalski');
