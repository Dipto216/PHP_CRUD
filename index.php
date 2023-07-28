<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
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

.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

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

<?php
    session_start();

    $students = $_SESSION["students"];

    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset ($_SESSION['message']);
    }  
?>
  
  
  <div class="container my-5">
  <a href="./create.php" class="button button1">Add New</a> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Student ID</th>
      <th scope="col">Student Name</th>
      <th scope="col">Student Class</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
        <tbody>

        <?php
                $sl = 0;
                foreach($students as $key => $student){?>
                <tr>
                    <td> <?= ++$sl ?></td>
                    <td> <?= $student['id']?></td>
                    <td> <?= $student['name']?></td>
                    <td> <?= $student['class']?></td>
                    <td> <?= $student['number']?></td>
                    <td>
                        <a href="./create.php" class="button button1">Add New</a>
                        <a href="./show.php?index=<?=$key?>" class="button button2">Show</a>
                        <a href="./edited.php?index=<?=$key?>" class="button button5">Edited</a>
                        <a href="./delete.php?index=<?=$key?>" class="button button3"  >Delete</a>  
                        
                    </td>
                </tr> 
                <?php } ?>
        </tbody>
</table>
    </div>
</body>
</html>