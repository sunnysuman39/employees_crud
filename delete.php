<?php
include 'Employee.php';
$emp = new Employee();
$id = $_GET['id'];
$emp->deleteEmployee($id);
header("Location: index.php");
?>
