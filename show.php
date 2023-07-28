<?php
session_start();

$index = $_GET['index'];
$student = $_SESSION['students'][$index];

// print_r ($student);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Show Data</title>
</head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button5 {
  background-color: white;
  color: black;
  border: 2px solid #555555;
}

.button5:hover {
  background-color: #555555;
  color: white;
}
</style>

<body>

<div class="container my-5">

        <table class = 'table my-5 mx-5'>
            <th scope="col">Student ID</th>
            <th scope="col">Student Name</th>
            <th scope="col">Student Class</th>
            <th scope="col">Phone Number</th>
            <tbody>
                    <td> <?= $student['id']?></td>
                    <td> <?= $student['name']?></td>
                    <td> <?= $student['class']?></td>
                    <td> <?= $student['number']?></td>
        </tbody>
        </table>
        <a href="./index.php" class="button button5">List</a>        
</body>
