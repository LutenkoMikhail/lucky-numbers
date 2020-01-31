<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


echo "<h1>Dev-Pro.net</h1>";
echo "<h3>Sicom Junior PHP Developer.</h3>";
echo "<h3>Test task. </h3>";
echo "<h3>1.2 Lucky Tickets. </h3>";

/**
 * Returns lucky numbers in the range of numbers from 0 to 999999
 * @return array
 */
function allLuckyNumbers(): array
{
    for ($allNumbers = 0; $allNumbers !== 1000000; $allNumbers++) {
        $allNumbers = str_pad(strval($allNumbers), 6, '0', STR_PAD_LEFT);
        if (array_sum(str_split(substr($allNumbers, 0, 3))) === array_sum(str_split(substr($allNumbers, 3, 3)))) {
            $resultArray[] = $allNumbers;
        }
    }
    return $resultArray;
}


echo 'All lucky numbers:' . PHP_EOL;
foreach ($luckyNumbersArray = allLuckyNumbers() as $elementArray) {
    echo $elementArray . PHP_EOL;
}

/* T.E comments:
 * Just note: A very complex implementation, this task could be done in one method, and much shorter.
 * Try to use in future KISS principle.
 */

