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
## to merge two array use the below mathod
```php
function mergeArray($array,$array2){
    foreach ($array2 as $key => $value) {
        array_push($array,$value);
    }
    return $array;
}

```
## to count the occurance use the below funtion
```php
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
```
## to remove the duplicates value from a array use the below mathode

```php
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
```