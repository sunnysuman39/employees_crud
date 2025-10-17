<?php
include 'Employee.php';
$emp = new Employee();

if(isset($_POST['submit'])) {
    $emp->addEmployee($_POST['name'], $_POST['email'], $_POST['salary']);
    header("Location: index.php");
}
?>

<form method="POST">
  <h2>Add Employee</h2>
  Name: <input type="text" name="name" required><br><br>
  Email: <input type="email" name="email" required><br><br>
  Salary: <input type="number" name="salary" required><br><br>
  <input type="submit" name="submit" value="Save">
</form>
