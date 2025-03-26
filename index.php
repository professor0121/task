 <?php
include 'include/arraySum.php';
include 'include/maxValArray.php';
include 'include/mergeArray.php';
include 'include/countOccurance.php';
include 'include/removeDuplicates.php';
$array = [1, 2, 3, 4, 5, 6, 7, 8,8,7,6];
$array2 = [9, 10, 11, 12, 13, 14, 15, 16];

echo sumArray($array);
echo "<br>";
echo maxVal($array);
echo "<br>";
print_r(mergeArray($array, $array2));
echo "<br>";
echo countOccurance($array, 5);
echo "<br>";
print_r(removeDuplicates($array));