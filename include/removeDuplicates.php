<?php

function removeDuplicates($array)
{
    foreach ($array as $key => $value) {
        $count = 0;
        foreach ($array as $key2 => $value2) {
            if ($value == $value2) {
                $count++;
            }
            if ($count > 1) {
                unset($array[$key2]);
            }
        }
    }
    return $array;
}

