Simple Employee Management System (Core PHP + API)

A simple web-based Employee Management System built using Core PHP with a RESTful API. This system allows you to manage employee data efficiently, supporting operations like Create, Read, Update, and Delete (CRUD) both via the web interface and API endpoints.

Features

Add Employee – Add new employee details such as name, email, and salary.

View Employees – List all employees in a structured table.

Edit Employee – Update employee information.

Delete Employee – Remove employees from the database.

RESTful API – Perform CRUD operations programmatically using API endpoints.

Simple UI – Built with HTML, CSS, and Bootstrap for responsive design.

Tech Stack

Frontend: HTML, CSS, Bootstrap

Backend: Core PHP

Database: MySQL

API: PHP-based REST API

Installation

Clone the repository:

git clone https://github.com/sunnysuman39/employees_crud.git


Copy the project to your web server directory (e.g., htdocs for XAMPP).

Create a MySQL database company.sql file that provided.

Update database configuration in config.php (host, username, password, database name).

Start your server (e.g., XAMPP) and navigate to:

http://localhost/employeeCrud

API Endpoints
Method	Endpoint	Description
GET	/api.php	Get all employees
GET	/api.php?id=1	Get a single employee
POST	/api.php	Add a new employee
PUT	/api.php?id=1	Update an existing employee
DELETE	/api.php?id=1	Delete an employee

All API responses are in JSON format.

Usage

Access the web interface to manage employees manually.

Use tools like Postman to test the API endpoints.

Screenshots

(Add screenshots of your app here for clarity)

Contributing

Contributions are welcome! Feel free to fork the repository, make changes, and submit a pull request.

License

This project is open source and available under the MIT License
.
