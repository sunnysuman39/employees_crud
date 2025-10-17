<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

require_once 'Employee.php';
$employees = new Employee();

$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents("php://input"), true);

switch ($method) {


    case "GET":
    if (isset($_GET['id'])) {
        $data = $employees->getEmployeeById($_GET['id']);
    } else {
        $data = $employees->getEmployees();
    }
    echo json_encode($data);
    break;

   
    case "POST":
        if (!empty($input['name']) && !empty($input['email']) && !empty($input['salary'])) {
            $employees->addEmployee($input['name'], $input['email'], $input['salary']);
            echo json_encode(["message" => "Employee added successfully"]);
        } else {
            echo json_encode(["error" => "Missing required fields"]);
        }
        break;

    
    case "PUT":
        if (isset($_GET['id'])) {
            $employees->updateEmployee($_GET['id'], $input['name'], $input['email'], $input['salary']);
            echo json_encode(["message" => "Employee updated successfully"]);
        } else {
            echo json_encode(["error" => "Employee ID is required"]);
        }
        break;


    case "DELETE":
        if (isset($_GET['id'])) {
            $employees->deleteEmployee($_GET['id']);
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
