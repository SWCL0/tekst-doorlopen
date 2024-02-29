<?php

echo "Geef mij een tekst!" . PHP_EOL;
$tekstInput = readline();

echo strlen($tekstInput) . " characters in de tekst." . PHP_EOL;
echo str_word_count($tekstInput, 0) . " woorden in de tekst." . PHP_EOL;
echo substr_count($tekstInput, ' ') . " spaties in de tekst." . PHP_EOL;
$str = $tekstInput;
$klinkerCount = countKlinkers($str);
echo $klinkerCount . "klinkers in de tekst." . PHP_EOL;








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