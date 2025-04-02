<?php
/**
 * Created by Er. Abhishek Kushwaha
 * Date:  3/26/2025
 */
// include 'include/arraySum.php';
// include 'include/maxValArray.php';
// include 'include/mergeArray.php';
// include 'include/countOccurance.php';
// include 'include/removeDuplicates.php';
// include 'include/reverseArray.php';
include 'include/student-registration-form.php'

// $array = [];
// $array2 = [];
// $result = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $array = explode(',', $_POST['array1']);
//     $array2 = isset($_POST['array2']) ? explode(',', $_POST['array2']) : [];
    
//     switch ($_POST['operation']) {
//         case 'sum':
//             $result = "Sum of Array: " . sumArray($array);
//             break;
//         case 'max':
//             $result = "Max Value: " . maxVal($array);
//             break;
//         case 'merge':
//             $result = "Merged Array: " . implode(', ', mergeArray($array, $array2));
//             break;
//         case 'count':
//             $target = $_POST['target'] ?? 0;
//             $result = "Occurrences of $target: " . countOccurance($array, $target);
//             break;
//         case 'removeDuplicates':
//             $result = "Array without Duplicates: " . implode(', ', removeDuplicates($array));
//             break;
//         case 'reverse':
//             $result = "Reversed Array: " . implode(', ', reverseArray($array));
//             break;
//         default:
//             $result = "Invalid Operation";
//     }
// }

/**
 * create a student registration form .
 */




?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Functions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        div{
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f1f1f1;
            border-radius: 10px;
            margin-top: 20px;
        }
        h1{
            text-align: center;
        }
        p{
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow p-4">
            <h2 class="text-center">Array Operations</h2>
            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Enter First Array (comma-separated)</label>
                    <input type="text" class="form-control" name="array1" required placeholder="e.g. 1,2,3,4,5">
                </div>
                <div class="mb-3">
                    <label class="form-label">Enter Second Array (comma-separated) (Optional)</label>
                    <input type="text" class="form-control" name="array2" placeholder="e.g. 6,7,8,9,10">
                </div>
                <div class="mb-3">
                    <label class="form-label">Enter Number to Count (Optional)</label>
                    <input type="text" class="form-control" name="target" placeholder="e.g. 3">
                </div>
                <div class="mb-3">
                    <label class="form-label">Select Operation</label>
                    <select class="form-select" name="operation" required>
                        <option value="sum">Sum of Array</option>
                        <option value="max">Find Max Value</option>
                        <option value="merge">Merge Arrays</option>
                        <option value="count">Count Occurrence</option>
                        <option value="removeDuplicates">Remove Duplicates</option>
                        <option value="reverse">Reverse Array</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">Calculate</button>
            </form>
            
        </div>
    </div>
</body>
</html> -->
