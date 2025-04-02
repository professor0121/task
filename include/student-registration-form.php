<?php


?>
<style>
    .custom-form {
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
<form class="custom-form">
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
