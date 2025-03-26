 <?php
include 'include/arraySum.php';
include 'include/maxValArray.php';
include 'include/mergeArray.php';
$array = [1, 2, 3, 4, 5, 6, 7, 8];
$array2 = [9, 10, 11, 12, 13, 14, 15, 16];

echo sumArray($array);
echo "<br>";
echo maxVal($array);
echo "<br>";
print_r(mergeArray($array, $array2));