# task
## The sum of give array finding using the blow mathode
```php
function sumArray($array)
{
    $sum = 0;
    foreach ($array as $key => $value) {
        $sum = $sum + $value;
    }
    return $sum;
}
```

## Find the max value from the array using the blow mathod
```php
function maxVal($array){
    $max=$array[0];
    foreach ($array as $key => $value) {
        if($value>$max){
            $max=$value;
        }
    }
    return $max;
}
```
