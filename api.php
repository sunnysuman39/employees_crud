<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

require_once 'Employee.php';
$emp = new Employee();

$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents("php://input"), true);

switch ($method) {

    // GET: Fetch employees
    case "GET":
        if (isset($_GET['id'])) {
            $data = $emp->getById($_GET['id']);
        } else {
            $data = $emp->getAll();
        }
        echo json_encode($data);
        break;

    // POST: Add employee
    case "POST":
        if (!empty($input['name']) && !empty($input['email']) && !empty($input['salary'])) {
            $emp->add($input['name'], $input['email'], $input['salary']);
            echo json_encode(["message" => "Employee added successfully"]);
        } else {
            echo json_encode(["error" => "Missing required fields"]);
        }
        break;

    // PUT: Update employee
    case "PUT":
        if (isset($_GET['id'])) {
            $emp->update($_GET['id'], $input['name'], $input['email'], $input['salary']);
            echo json_encode(["message" => "Employee updated successfully"]);
        } else {
            echo json_encode(["error" => "Employee ID is required"]);
        }
        break;

    // DELETE: Delete employee
    case "DELETE":
        if (isset($_GET['id'])) {
            $emp->delete($_GET['id']);
            echo json_encode(["message" => "Employee deleted successfully"]);
        } else {
            echo json_encode(["error" => "Employee ID is required"]);
        }
        break;

    default:
        echo json_encode(["error" => "Invalid request method"]);
        break;
}
?>
