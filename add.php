<?php
include 'Employee.php';
$emp = new Employee();

if (isset($_POST['submit'])) {
    $emp->addEmployee($_POST['name'], $_POST['email'], $_POST['salary']);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Employee</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-header bg-primary text-white text-center">
            <h4 class="mb-0">Add Employee</h4>
          </div>
          <div class="card-body">
            <form method="POST">
              <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter full name" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email address" required>
              </div>

              <div class="mb-3">
                <label class="form-label">Salary</label>
                <input type="number" name="salary" class="form-control" placeholder="Enter salary amount" required>
              </div>

              <div class="d-flex justify-content-between">
                <a href="index.php" class="btn btn-secondary">Back</a>
                <button type="submit" name="submit" class="btn btn-success">Save Employee</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
