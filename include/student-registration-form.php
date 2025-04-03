<?php

//     // Data Base Creation
//     $servername     = "localhost";
//     $username       = "root";
//     $password       = "";
//     $create_db_name = "school";

//     // Connection of mysqli
//     $connection = new mysqli($servername, $username, $password);

//     $sql = "CREATE DATABASE IF NOT EXISTS $create_db_name";
//     $connection->query($sql);

//     // Use db
//     $connection->select_db($create_db_name);

//     $table_sql = "CREATE TABLE IF NOT EXISTS students (
//     id INT(11) AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(100) NOT NULL,
//     email VARCHAR(100) NOT NULL,
//     age INT(3) NOT NULL,
//     course VARCHAR(100) NOT NULL
// )";
//     $connection->query($table_sql);

//     if (isset($_GET['delete_id'])) {
//         $delete_id = $_GET['delete_id'];
//         $delete_sql = "DELETE FROM students WHERE id = $delete_id";
//         $connection->query($delete_sql);
    
//         header("Location: " . $_SERVER['PHP_SELF']);
//         exit();
//     }

//     if(isset($_GET['edit_id'])){
//         $edit_id=$_GET['edit_id'];
//         $edit_sql="SELECT * FROM students WHERE id=$edit_id";
//         $edit_result=$connection->query($edit_sql);
//         $row=$edit_result->fetch_assoc();
//             print_r($row['id']);
//             print_r($row['name']);
//             print_r($row['email']);
//             print_r($row['age']);
//             print_r($row['course']);
//         }
    

//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         $name       = $_POST['name'];
//         $email      = $_POST['email'];
//         $age        = $_POST['age'];
//         $course     = $_POST['course'];
//         $insert_sql = "INSERT INTO students (name, email, age, course)
//                    VALUES ('$name', '$email', '$age', '$course')";
//         $connection->query($insert_sql);

//         header("Location: " . $_SERVER['PHP_SELF']);
//     exit();
//     }

//     $result = null;
//     $result_sql="SELECT * FROM students";
//     $result = $connection->query($result_sql);

  
//     $connection->close();
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

.show-result{
    width: 500px;
    margin:0 auto;
}

table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0 10px;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 10px;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }

        .delete-button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        .delete-button:hover {
            background-color: #c0392b;
        }
        .edit-button {
            background-color: #f39c12;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        .edit-button:hover {
            background-color: #e67e22;
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

<div class="show-result">
<?php if ($result && $result->num_rows > 0): ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Course</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['age']?></td>
                    <td><?php echo $row['course']?></td>
                    <td>
                        <a href="?edit_id=<?php echo $row['id']; ?>" class="edit-button">Edit</a>
                    </td>
                    <td>
                        <a href="?delete_id=<?php echo $row['id']; ?>" class="delete-button">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
<?php endif; ?>
</div>