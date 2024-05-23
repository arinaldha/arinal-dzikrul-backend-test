<?php
function solve($string)
{
    $stack = [];

    $bracketPairs = [
        ')' => '(',
        '}' => '{',
        ']' => '['
    ];

    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];

        if (in_array($char, ['(', '{', '['])) {
            array_push($stack, $char);
        } else if (in_array($char, [')', '}', ']'])) {
            if (empty($stack) || array_pop($stack) != $bracketPairs[$char]) {
                return "NO";
            }
        }
    }

    return empty($stack) ? "YES" : "NO";
}

$input1 = "{ [ ( ) ] }";
$input2 = "{ [ ( ] ) }";
$input3 = "{ ( ( [ ] ) [ ] ) [ ] }";

echo "Output contoh input 1 : <b>" . solve($input1) . '</b><br>'; // Output: YES
echo "Output contoh input 2 : <b>" . solve($input2) . '</b><br>'; // Output: NO
echo "Output contoh input 3 : <b>" . solve($input3) . '</b><br>'; // Output: YES
