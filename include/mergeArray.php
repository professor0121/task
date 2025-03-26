<?php
function mergeArray($array,$array2){
    foreach ($array2 as $key => $value) {
        array_push($array,$value);
    }
    return $array;
}

