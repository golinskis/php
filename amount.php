<?php

declare(strict_types = 1);
/**
 * Zamiana liczby na string który przyjmuje wartość w złotówkach.
 * 
 *@param int $value przykładowa liczba.
 *@param  arr $dziesiątki tablica z srtingami odpowiadajacymi wartosciami w złotych.
 *@param  arr $jednosci tablica z srtingami odpowiadajacymi wartosciami w złotych.  
 *@param  arr $setki tablica z srtingami odpowiadajacymi wartosciami w złotych. 
 *@param  arr $odDziesieciu tablica z srtingami odpowiadajacymi wartoscia od 11-19 w złotych.
 *@param  string $newValue, zmienna $value po rzutowaniu na string.
 *@param   $arrValue, zmienna $newValue po zamianie na tablice.
 *
 * Instrukcje warunkowe zwracają stringi które wyswietlają odpowiednią wartość w złotych.
 */




$value = 20;
$dziesiatki = ['dziesięć', 'dwadzieścia', 'trzydzieści', 'czterdzieści', 'pięćdziesiąt', 'sześćdziesiąt', 'siedemdziesiąt', 'osiemdziesiąt', 'dziewiędziesiąt'];
$setki = ['sto', 'dwieście', 'trzysta', 'czterysta', 'pięćset', 'sześćset', 'siedemset', 'osiemset', 'dziewięćset'];
$jednosci = ['jeden', 'dwa', 'trzy', 'cztery', 'pięć', 'sześć', 'siedem', 'osiem', 'dziewięć'];
$jednostka = ['złoty', 'złote', 'złote', 'zlote', 'złotych', 'złotych', 'złotych', 'złotych', 'złotych',];
$odDziesieciu = ['jedenascie', 'dwanascie', 'trzynascie', 'czternascie', 'piętnaście', 'szesnaście', 'siedemnaście', 'dziewietanscie',];

$newValue = (string) $value;
$arrayValue = str_split($newValue);


if (count($arrayValue) === 3) {
    $paramSetki = (int) $arrayValue[0];
    $paramDziesiatki = (int) $arrayValue[1];
    $paramJednosci = (int) $arrayValue[2];
    if ($paramSetki === 0) {

        echo " ";
    } else {
        for ($i = 0; $i <= $paramSetki; $i++) {
            if ($i === $paramSetki) {
                echo $setki[$i - 1] . " ";
            }
        }
    }

    if ($paramDziesiatki === 0) {

        if ($paramJednosci === 0) {

            echo "złotych";
        } else {
            for ($i = 0; $i <= $paramJednosci; $i++) {
                if ($i === $paramJednosci) {
                    echo $jednosci[$i - 1] . " " . $jednostka[$i - 1];
                }
            }
        }
    } elseif ($paramJednosci === 0) {
        for ($i = 0; $i <= $paramDziesiatki; $i++) {
            if ($i === $paramDziesiatki) {
                echo $dziesiatki[$i - 1] . " złotych";
            }
        }
    } else {
        for ($i = 0; $i <= $paramDziesiatki; $i++) {
            if ($i === $paramDziesiatki) {
                if ($dziesiatki[$i - 1] === 'dziesięć') {
                    for ($i = 0; $i <= $paramJednosci; $i++) {
                        if ($i === $paramJednosci) {
                            echo $odDziesieciu[$i - 1] . " złotych";
                        }
                    }
                }
            } else {
                echo $dziesiatki[$i - 1] . " ";
                for ($i = 0; $i <= $paramJednosci; $i++) {
                    if ($i === $paramJednosci) {
                        echo $jednosci[$i - 1] . " " . $jednostka[$i - 1];
                    }
                }
            }
        }
    }
} elseif (count($arrayValue) === 2) {

    $paramDziesiatki = (int) $arrayValue[0];
    $paramJednosci = (int) $arrayValue[1];

    if ($paramDziesiatki === 0) {
        echo " ";
    } elseif ($paramJednosci === 0) {
        for ($i = 0; $i <= $paramDziesiatki; $i++) {
            if ($i === $paramDziesiatki) {
                echo $dziesiatki[$i - 1] . " złotych";
            }
        }
    } else {
        for ($i = 0; $i <= $paramDziesiatki; $i++) {
            if ($i === $paramDziesiatki) {
                if ($dziesiatki[$i - 1] === 'dziesięć') {
                    for ($i = 0; $i <= $paramJednosci; $i++) {
                        if ($i === $paramJednosci) {
                            echo $odDziesieciu[$i - 1] . " złotych";
                        }
                    }
                } else {
                    echo $dziesiatki[$i - 1] . " ";
                    for ($i = 0; $i <= $paramJednosci; $i++) {
                        if ($i === $paramJednosci) {
                            echo $jednosci[$i - 1] . " " . $jednostka[$i - 1];
                        }
                    }
                }
            }
        }
    }
} elseif (count($arrayValue) === 1) {
    $paramJednosci = (int) $arrayValue[0];
    for ($i = 0; $i <= $paramJednosci; $i++) {
        if ($i === $paramJednosci) {
            echo $jednosci[$i - 1] . " " . $jednostka[$i - 1];
        }
    }
}        
