<?php

echo "Geef mij een tekst!" . PHP_EOL;
$tekstInput = readline();

echo strlen($tekstInput) . " characters in de tekst." . PHP_EOL;
echo str_word_count($tekstInput, 0) . " woorden in de tekst." . PHP_EOL;
echo substr_count($tekstInput, ' ') . " spaties in de tekst." . PHP_EOL;
$str = $tekstInput;
$klinkerCount = countKlinkers($str);
echo $klinkerCount . "klinkers in de tekst." . PHP_EOL;
$medeKlinkerCount = countMedeKlinkers($str);
echo $medeKlinkerCount . "medeklinkers in de tekst." . PHP_EOL;
echo substr_count($tekstInput, ',') . " comma's in de tekst." . PHP_EOL;
echo substr_count($tekstInput, '.') . " punten in de tekst." . PHP_EOL;
echo substr_count($tekstInput, ':') . " dubbelepunten in de tekst." . PHP_EOL;
echo substr_count($tekstInput, '"') . " aanhalingstekens in de tekst." . PHP_EOL;


function countMedeKlinkers($str) 
{
    $str = strtolower($str);
    $medeKlinkerCount = 0;

    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "y", "z"])) {
            $medeKlinkerCount++;
        }
    }
    return $medeKlinkerCount;
}

function countKlinkers($str) 
{
    $str = strtolower($str);
    $klinkerCount = 0;

    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], ["a", "e", "i", "o", "u"])) {
            $klinkerCount++;
        }
    }
    return $klinkerCount;
}

?>