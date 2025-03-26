<?php
function countOccurance($array, $value)
{
    $count = 0;
    foreach ($array as $key => $val) {
        if ($val == $value) {
            $count++;
        }
    }
    return $count;
}