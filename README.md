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