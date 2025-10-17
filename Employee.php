<?php
include 'config.php';

class Employee extends Database {

    // CREATE
    public function addEmployee($name, $email, $salary) {
        $stmt = $this->conn->prepare("INSERT INTO employees (name, email, salary) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $salary);
        return $stmt->execute();
    }

    // READ all
    public function getEmployees() {
        $sql = "SELECT * FROM employees";
        $result = $this->conn->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        // print_r($data);
        // die('sunny');
        return $data;
    }

    // READ single
    public function getEmployeeById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM employees WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // UPDATE
    public function updateEmployee($id, $name, $email, $salary) {
        $stmt = $this->conn->prepare("UPDATE employees SET name=?, email=?, salary=? WHERE id=?");
        $stmt->bind_param("sssi", $name, $email, $salary, $id);
        return $stmt->execute();
    }

    // DELETE
    public function deleteEmployee($id) {
        $stmt = $this->conn->prepare("DELETE FROM employees WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
