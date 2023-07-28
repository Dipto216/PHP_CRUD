<?php
session_start();

$index = $_GET['index'];

$student = $_SESSION['students'][$index];


if (isset($student)){
  $id = $student['id'];
  $name = $student['name'];
  $class = $student['class'];
  $number = $student['number'];

} else {

  echo "No data found!!!";
 
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Edit</title>
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
.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
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
<form action="update.php" method="POST">
  <input type="hidden" name="index" value = <?= $index ?>>
  <div class="mb-3">
      <label class="form-label">Student Name</label>
      <input type="text" class="form-control" placeholder="Name" name="name" value = <?= $name ?> >
    </div>
    
    <div class="mb-3">
      <label class="form-label">Student ID</label>
      <input type="text" class="form-control" placeholder="ID" name="id" value = <?= $id ?>>
    </div>
    
    <div class="mb-3">
      <label class="form-label">Student Class</label>
      <input type="text" class="form-control" placeholder="Class" name="class" value = <?= $class ?>>
    </div>
    
    <div class="mb-3">
      <label class="form-label">Phone Number</label>
      <input type="text" class="form-control" placeholder="Number" name="number" value = <?= $number ?>>
    </div>
    <button type="submit" class="button button2" name="submit">Update</button>
    <a href="./index.php" class="button button5">List</a>
    </form>
</body>
</html>    


