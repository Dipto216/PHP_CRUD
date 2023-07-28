<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>Home Page</title>
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

</style>
<body>
  <div class="container my-5">
  

  <form action="./store.php" method="post">
    <div class="mb-3">
      <label class="form-label">Student Name</label>
      <input type="text" class="form-control" placeholder="Student Name" name="name">
    </div>
    
    <div class="mb-3">
      <label class="form-label">Student ID</label>
      <input type="text" class="form-control" placeholder="Student ID" name="id">
    </div>
    
    <div class="mb-3">
      <label class="form-label">Student Class</label>
      <input type="text" class="form-control" placeholder="Student Class" name="class">
    </div>
    
    <div class="mb-3">
      <label class="form-label">Phone Number</label>
      <input type="text" class="form-control" placeholder="Phone Number" name="number">
    </div>

    <button type="submit" class="button button2" name="submit">Submit</button>
    <a href="./index.php" class="button button1">List</a>
</form>
  </div>
</body>
</html>