
<?php

function sumArray($array)
{
    $sum = 0;
    foreach ($array as $key => $value) {
        $sum = $sum + $value;
    }
    return $sum;
}

