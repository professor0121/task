<?php

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
?>
<style>
    .custom-form {
    margin:50 auto;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    max-width: 600px;
}

.form-group {
    display: flex;
    flex-direction: column;
    flex: 1 1 45%;
}

label {
    margin-bottom: 5px;
    font-weight: bold;
}

input, select {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    outline: none;
    transition: border-color 0.3s;
}

input:focus, select:focus {
    border-color: #007bff;
}

.full-width {
    flex: 1 1 100%;
}

button {
    padding: 10px 20px;
    border: none;
    background-color: #007bff;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}

</style>
<div>
<form class="custom-form" method="POST">
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" required>
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>
</div>
<div class="form-group">
    <label for="age">Age</label>
    <input type="number" id="age" name="age" required>
</div>
<div class="form-group">
    <label for="course">Course</label>
    <select id="course" name="course" required>
        <option value="">Select a course</option>
        <option value="webdev">Web Development</option>
        <option value="datasci">Data Science</option>
        <option value="ml">Machine Learning</option>
        <option value="design">Design</option>
    </select>
</div>
<div class="form-group full-width">
    <button type="submit">Submit</button>
</div>
</form>
</div>
