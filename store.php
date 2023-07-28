<?php
session_start();
$data = [
    'id' => $_POST['id'],
    'name' => $_POST['name'],
    'class' => $_POST['class'],
    'number' => $_POST['number']
    
];
$_SESSION['students'][] = $data;
$_SESSION['message'] = 'Created Sucessfully!';
header('location: ./index.php');
?>