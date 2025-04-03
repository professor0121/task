# Prectice Time GSCE php questions
## 1. The sum of give array finding using the blow mathode
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

## 2, Find the max value from the array using the blow mathod
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
## 3. to merge two array use the below mathod
```php
function mergeArray($array,$array2){
    foreach ($array2 as $key => $value) {
        array_push($array,$value);
    }
    return $array;
}

```
## 4. to count the occurance use the below funtion
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
## 5. to remove the duplicates value from a array use the below mathode

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

## 6. to retrn the array reverse use the below mathode to done it
```php
function reverseArray($array)
{
    $reversedArray = array();
    for ($i = count($array) - 1; $i >= 0; $i--) {
        array_push($reversedArray, $array[$i]);
    }
    return $reversedArray;
}
```
## Use the below code for handling the form using php
```php
 //Data Base Creation
    $servername     = "localhost";
    $username       = "root";
    $password       = "";
    $create_db_name = "school";

    //Connection of myqli
    $connection = new mysqli($servername, $username, $password);
    if ($connection->connect_error) {
        die("Connection is failed due to :" . $connection->connect_error);
    }

    $sql = "CREATE DATABASE IF NOT EXISTS $create_db_name";
    if ($connection->query($sql) == true) {
        echo "Database created succssefull or exists";
    } else {
        die("something went wrong" . $connection->error);
    }

    //use db
    $connection->select_db($create_db_name);

    $table_sql = "CREATE TABLE IF NOT EXISTS students (
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        age INT(3) NOT NULL,
        course VARCHAR(100) NOT NULL
    )";

    if ($connection->query($table_sql) == true) {
        echo "Table created successfully or exists";
    } else {
        die("something went wrong" . $connection->error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name   = $_POST['name'];
        $email  = $_POST['email'];
        $age    = $_POST['age'];
        $course = $_POST['course'];
        echo $name ."<br>". $email ."<br>". $age ."<br>". $course;

    }

    $insert_sql = "INSERT INTO students (name, email, age, course) 
                   VALUES ('$name', '$email', '$age', '$course')";

      if ($connection->query($insert_sql) == true) {
        echo "data saved sucessfully or exists";
    } else {
        die("something went wrong" . $connection->error);
    }

  
    $connection->close();
```
