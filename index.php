<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


echo "<h1>Dev-Pro.net</h1>";
echo "<h3>Sicom Junior PHP Developer.</h3>";
echo "<h3>Test task. </h3>";
echo "<h3>1.2 Lucky Tickets. </h3>";

/**
 * Counts the number as a number in an array
 * @param array $stringNumbersArray
 * @return int
 */
function summaNumbers(array $stringNumbersArray): int
{
    $resulSumma = 0;
    foreach ($stringNumbersArray as $elementArray) {
        $resulSumma = $resulSumma + intval($elementArray);
    }
    return $resulSumma;
}

/**
 * Returns lucky numbers in the range of numbers from 0 to 999999
 * @return array
 */
function allLuckyNumbers(): array
{
    for ($allNumbers = 0; $allNumbers !== 1000000; $allNumbers++) {
        $allNumbers = str_pad(strval($allNumbers), 6, '0', STR_PAD_LEFT);
        if (summaNumbers(str_split(substr($allNumbers, 0, 3))) === summaNumbers(str_split(substr($allNumbers, 3, 3)))) {
            $resultArray[] = $allNumbers;
        }
    }
    return $resultArray;
}


echo "All lucky numbers:<br>";
foreach ($luckyNumbersArray = allLuckyNumbers() as $elementArray) {
    echo $elementArray . "<br>";
}



