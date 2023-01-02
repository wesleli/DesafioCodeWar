<?php /*An isogram is a word that has no repeating letters, consecutive or non-consecutive. 
Implement a function that determines whether a string that contains only letters is an isogram. 
Assume the empty string is an isogram. Ignore letter case.*/

function is_isogram($str) {
    $str = strtolower($str);
    $maxRepeatingCount = 1;

    foreach (count_chars($str, 1) as $char => $value) {
        if ($value > $maxRepeatingCount) $maxRepeatingCount = $value;
     }

     if ($maxRepeatingCount == 1) return true;

     return false;
}