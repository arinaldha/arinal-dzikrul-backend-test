<?php
function makePalindrome($string, $k, $left, $right)
{
    if ($left >= $right) {
        return [$string, $k];
    }

    if ($string[$left] == $string[$right]) {
        return makePalindrome($string, $k, $left + 1, $right - 1);
    }

    if ($k > 0) {
        if ($string[$left] > $string[$right]) {
            $string[$right] = $string[$left];
        } else {
            $string[$left] = $string[$right];
        }
        $k--;
        return makePalindrome($string, $k, $left + 1, $right - 1);
    }

    return [-1, $k];
}

function maximizePalindrome($string, $k, $left, $right)
{
    if ($left >= $right) {
        return $string;
    }

    if ($string[$left] == $string[$right]) {
        return maximizePalindrome($string, $k, $left + 1, $right - 1);
    }

    if ($k > 0) {
        if ($string[$left] != '9') {
            $string[$left] = '9';
            $k--;
        }
        if ($string[$right] != '9') {
            $string[$right] = '9';
            $k--;
        }
        return maximizePalindrome($string, $k, $left + 1, $right - 1);
    }

    return maximizePalindrome($string, $k, $left + 1, $right - 1);
}

function highestPalindrome($string, $k)
{
    list($palindromeString, $remainingK) = makePalindrome(str_split($string), $k, 0, strlen($string) - 1);

    if ($palindromeString === -1) {
        return -1;
    }

    $resultString = maximizePalindrome($palindromeString, $remainingK, 0, strlen($string) - 1);
    return implode('', $resultString);
}

$inputString = "3943";
$k = 1;
echo "Hasil contoh input 1 : " . highestPalindrome($inputString, $k) . '<br>';

$inputString2 = "932239";
$k2 = 2;
echo "Hasil contoh input 2 : " . highestPalindrome($inputString2, $k2) . '<br>';
