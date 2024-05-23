<?php
function solve($string, $queries)
{
    $valueString = [];

    $length = strlen($string);
    $i = 0;
    while ($i < $length) {
        $currentChar = $string[$i];
        $charValue = ord($currentChar) - ord('a') + 1;
        $count = 1;

        while ($i + 1 < $length && $string[$i + 1] == $currentChar) {
            $count++;
            $i++;
            $valueString[] = $charValue * $count;
        }

        $valueString[] = $charValue;
        $i++;
    }

    $valueString = array_unique($valueString);

    $result = [];
    foreach ($queries as $query) {
        if (in_array($query, $valueString)) {
            $result[] = "Yes";
        } else {
            $result[] = "No";
        }
    }

    return "[<b>" . implode(', ', $result) . "</b>]";
}

$string = "abbcccd";
$queries = [1, 3, 9, 8];
$result = solve($string, $queries);
print_r($result);
