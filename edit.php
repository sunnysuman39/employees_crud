<?php
include 'Employee.php';
$emp = new Employee();
$id = $_GET['id'];
$data = $emp->getEmployeeById($id);

if(isset($_POST['submit'])) {
    $emp->updateEmployee($id, $_POST['name'], $_POST['email'], $_POST['salary']);
    header("Location: index.php");
}
?>

<form method="POST">
  <h2>Edit Employee</h2>
  Name: <input type="text" name="name" value="<?= $data['name']; ?>"><br><br>
  Email: <input type="email" name="email" value="<?= $data['email']; ?>"><br><br>
  Salary: <input type="number" name="salary" value="<?= $data['salary']; ?>"><br><br>
  <input type="submit" name="submit" value="Update">
</form>
