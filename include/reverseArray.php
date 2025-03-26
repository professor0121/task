<?php
function reverseArray($array)
{
    $reversedArray = array();
    for ($i = count($array) - 1; $i >= 0; $i--) {
        array_push($reversedArray, $array[$i]);
    }
    return $reversedArray;
}