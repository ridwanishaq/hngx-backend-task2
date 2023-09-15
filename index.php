<?php

/**
 * Task Name: backend-stage-two-task
 * Programming Lanuage used: PHP
 * Student Name: Rilwanu Isyaku
 * GitHub Profile: https://github.com/ridwanishaq
 * Date: 14-September-2023
 * 
 * 
 */

// Database configuration
$db_host = 'localhost';
$db_name = 'hngx_task2';
$db_user = 'root';
$db_pass = '';

// Live
// $db_host = 'localhost';
// $db_name = 'lgcinsur_hngx_backend_db';
// $db_user = 'lgcinsur_root';
// $db_pass = '38982581@Insur';

try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Set response content type to JSON
// header("Content-Type: application/json");

// Get the request method and path
$request_method = $_SERVER['REQUEST_METHOD'];
$request_path = $_SERVER['REQUEST_URI'];

// Extract the user_id from the request URI
$parts = explode('/', $request_path);

// ENDPOINT CHECK:
$endpoint = isset($parts[4]) ? $parts[4] : null;
$userIdEndpoint = isset($parts[5]) ? $parts[5] : null;

$checkUserId = is_numeric($userIdEndpoint) ? (int)$userIdEndpoint : null;

// Create Person
if ($request_method === 'POST' && $endpoint === 'api') {
    
    $data = json_decode(file_get_contents('php://input'));

    if ($data) {
        $name = $data->name;    
        $age = $data->age;
        $email = $data->email;

        $stmt = $db->prepare("INSERT INTO persons (name, age, email) VALUES (:name, :age, :email)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':email', $email);

        if ($stmt->execute()) {
            echo json_encode(['message' => 'Person added successfully']);
        } else {
            http_response_code(500);
            echo json_encode(['message' => 'Failed to add person']);
        }
    } else {
        http_response_code(400);
        echo json_encode(['message' => 'Invalid JSON data']);
    }
}

// Read Person by ID
if ($request_method === 'GET' && $endpoint === 'api') {
    
    if($checkUserId !== Null){
        $stmt = $db->prepare("SELECT * FROM persons WHERE id = :id");
        $stmt->bindParam(':id', $checkUserId);
        $stmt->execute();
        $person = $stmt->fetch(PDO::FETCH_ASSOC);
    } else{
        $stmt = $db->prepare("SELECT * FROM persons");
        $stmt->execute();
        $person = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    if ($person) {
        echo json_encode($person);
    } else {
        http_response_code(404);
        echo json_encode(['message' => 'Person not found']);
    }
}

// Update Person by ID
if ($request_method === 'PUT' && $endpoint === 'api' && $checkUserId) {

    $data = json_decode(file_get_contents("php://input"));

    if ($data) {
        $name = $data->name;
        $age = $data->age;
        $email = $data->email;

        $stmt = $db->prepare("UPDATE persons SET name = :name, age = :age, email = :email WHERE id = :id");
        $stmt->bindParam(':id', $checkUserId);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':email', $email);

        if ($stmt->execute()) {
            echo json_encode(['message' => 'Person updated successfully']);
        } else {
            http_response_code(500);
            echo json_encode(['message' => 'Failed to update person']);
        }
    } else {
        http_response_code(400);
        echo json_encode(['message' => 'Invalid JSON data']);
    }
}

// Delete Person by ID
if ($request_method === 'DELETE' && $endpoint === 'api' && $checkUserId) {
    $stmt = $db->prepare("DELETE FROM persons WHERE id = :id");
    $stmt->bindParam(':id', $checkUserId);

    if ($stmt->execute()) {
        echo json_encode(['message' => 'Person deleted successfully']);
    } else {
        http_response_code(500);
        echo json_encode(['message' => 'Failed to delete person']);
    }
}
