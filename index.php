<?php
require_once 'Employee.php';
$emp = new Employee();
$employees = $emp->getEmployees();

// print_r($employees);exit('suman');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Employee List</title>
</head>
<body>
  <h2>Employee List</h2>
  <a href="add.php">Add Employee</a>
  <table border="1" cellpadding="8">
    <tr>
      <th>ID</th><th>Name</th><th>Email</th><th>Salary</th><th>Action</th>
    </tr>
    <?php foreach($employees as $row) { ?>
      <?php //print_r($row);exit('suman');?>
      <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['name']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['salary']; ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
          <a href="delete.php?id=<?= $row['id']; ?>">Delete</a>
        </td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>
