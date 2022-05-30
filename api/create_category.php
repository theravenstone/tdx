<?php
$username = 'root';
$password = '';
$database = 'todo_app';

$db = new PDO("mysql:host=127.0.0.1", $username, $password);
$db->exec('use '. $database);

$myparams = file_get_contents('php://input');

$myparams = json_decode($myparams, true);


http_response_code(200);


$stmt = $db->prepare('
INSERT INTO categories (name, color) VALUES (?, ?);
');

$stmt->execute([$_GET["name"], $_GET["color"]]);

header("Location: /categories");
die();

?>