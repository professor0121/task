<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST, GET, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require_once '../config/database.php';

$database = new Database();
$conn = $database->getConnection();


$requestMethod = $_SERVER["REQUEST_METHOD"];
$input = json_decode(file_get_contents("php://input"), true);

switch($requestMethod) {
    case "GET":
        $stmt = $conn->prepare("SELECT * FROM users");
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($users);
        break;

    case "POST":
        if (!empty($input["name"]) && !empty($input["email"])) {
            $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
            $stmt->bindParam(":name", $input["name"]);
            $stmt->bindParam(":email", $input["email"]);

            if ($stmt->execute()) {
                echo json_encode(["message" => "User created successfully."]);
            } else {
                echo json_encode(["message" => "Failed to create user."]);
            }
        } else {
            echo json_encode(["message" => "Invalid input."]);
        }
        break;

    case "DELETE":
        if (!empty($_GET["id"])) {
            $stmt = $conn->prepare("DELETE FROM users WHERE id = :id");
            $stmt->bindParam(":id", $_GET["id"]);

            if ($stmt->execute()) {
                echo json_encode(["message" => "User deleted successfully."]);
            } else {
                echo json_encode(["message" => "Failed to delete user."]);
            }
        } else {
            echo json_encode(["message" => "Invalid ID."]);
        }
        break;

    default:
        echo json_encode(["message" => "Method not allowed"]);
        break;
}
