<?php

/**
 * Skrypt zawiera kilka ćwiczeniowych funkcji operujących na stringach.
 *
 * Przykład użycia:
 * 1. Zdefiniuj zmienną $stringToTest na ciąg znaków, który chcesz przetestować.
 * 2. Wywołuj kolejne funkcje zgodnie z ich dokumentacją.
 * 3. Uruchom skrypt w konsoli: php -f letters.php
 */

declare(strict_types=1);

$stringToTest = 'rabbit';

removeLastLetter($stringToTest);
appendLetters($stringToTest, 's');
insertLetters($stringToTest,'my');
removeFirstLetter($stringToTest);
reverseText($stringToTest);
textUpperCase($stringToTest);
textLowerCase($stringToTest);
dotsInjection($stringToTest);


$stringToTest="karaś";
removeLastLetter($stringToTest);
appendLetters($stringToTest, 's');
insertLetters($stringToTest,'my');
removeFirstLetter($stringToTest);
reverseText($stringToTest);
textUpperCase($stringToTest);
textLowerCase($stringToTest);
dotsInjection($stringToTest);



$stringToTest="Miasto";
removeLastLetter($stringToTest);
appendLetters($stringToTest, 's');
insertLetters($stringToTest,'my');
removeFirstLetter($stringToTest);
reverseText($stringToTest);
textUpperCase($stringToTest);
textLowerCase($stringToTest);
dotsInjection($stringToTest);


$stringToTest= "lodz";
removeLastLetter($stringToTest);
appendLetters($stringToTest, 's');
insertLetters($stringToTest,'my');
removeFirstLetter($stringToTest);
reverseText($stringToTest);
textUpperCase($stringToTest);
textLowerCase($stringToTest);
dotsInjection($stringToTest);

/**
 * Dodanie do tekstu na końcu ciągu znaków.
 *
 * @param string $text Tekst, do którego dodajemy ciąg znaków.
 * @param string $letters Ciąg znaków do dodania.
 *
 * @return string Tekst z dodanymi literami.
 */
function appendLetters(string $text, string $letters): string
{
    echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL;
    $text .= $letters;
    echo "After ", __FUNCTION__, ": ", $text, PHP_EOL;

    return $text;
}

/**
 * Usunięcie ostatniej litery z podanego ciągu znaków.
 *
 * @param string $text Tekst, z którego usuniemy ostatnią literę.
 *
 * @return string Tekst bez ostatniej litery.
 */

function removeLastLetter(string $text): string
{
    echo "Before ", __FUNCTION__, ": ", $text, PHP_EOL;
    $text = substr($text, 0, strlen($text) - 1);
    echo "After ", __FUNCTION__, ": ", $text, PHP_EOL;

    return $text;
}

/**
 * Dodanie do tekstu  przed ciągiem znaków.
 *
 *@param string $text  tekst do którego doajemy ciąg znaków.
 *$param string $letters ciąg znaków do dodania.
 *
 *$return string Tekst z dodanymi literami.
*/

function insertLetters (string $text,string $letters)
{
echo  "Before", __FUNCTION__,": ",$text,PHP_EOL;
$letters.=$text;
$text=$letters;
echo "After",__FUNCTION__,": ",$text,PHP_EOL;

return $text;

}

/**
 * Usunięcie pierwszej litery z podanego ciągu znaków..
 *
 *@param string $text Tekst, z którego usuwamy pierwszą literę.
 *
 *$return string Tekst z usuniętą pierwszą literą. 
*/

function removeFirstLetter (string $text){
echo  "Before", __FUNCTION__,": ",$text,PHP_EOL;
$text=substr($text,1);
echo "After",__FUNCTION__,": ",$text,PHP_EOL;

return $text;
}

/**
 *Odwrócenie ciągu znaków.
 *
 *@param string $text Tekst, który zostanie odwrócony.
 *
 *$return string  Odwrócony tekst.
*/

function reverseText (string $text){
    echo  "Before", __FUNCTION__,": ",$text,PHP_EOL;
    $text=strrev($text);
    echo "After",__FUNCTION__,": ",$text,PHP_EOL;

return $text;
  }
  
/**
 * Zamiana liter w tekście  na duże.
 *
 *@param string $text tekst w którym zostana zamienione litery na duże.
 *
 *$return string Zamieniony tekst.
*/

function textUpperCase (string $text){
    echo  "Before", __FUNCTION__,": ",$text,PHP_EOL;
    $text=strtoupper($text);
    echo "After",__FUNCTION__,": ",$text,PHP_EOL;

return $text;
    
}

 /**
 * Zamiana liter w tekście  na małe.
 *
 *@param string $text tekst w którym zostana zamienione litery na małe.
 *
 *$return string Zamieniony tekst.
*/

function textLowerCase (string $text){
    echo  "Before", __FUNCTION__,": ",$text,PHP_EOL;
    $text=strtolower($text);
    echo "After",__FUNCTION__,": ",$text,PHP_EOL;

return $text;
    
}
  
/**
 *Dodanie kropek miedzy literami w ciągu znaków.
 *
 *@param string $text tekst w który bedą wstawione kropki.
 *
 *$return string Tekst z kropkami pomiedzy literami.
*/

function dotsInjection (string $text){
 echo  "Before", __FUNCTION__,": ",$text,PHP_EOL;
$nowyStr="";
for($i=0;$i<strlen($text);$i++){
$nowyStr .= $text[$i].".";
 
}
$text=$nowyStr;
    return $text;
echo "After",__FUNCTION__,": ",$text,PHP_EOL;}



 
