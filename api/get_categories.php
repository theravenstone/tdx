<?php
$username = 'root';
$password = '';
$database = 'todo_app';

$db = new PDO("mysql:host=127.0.0.1", $username, $password);
$db->exec('use '. $database);

$myparams = file_get_contents('php://input');

$myparams = json_decode($myparams, true);


http_response_code(401);


$stmt = $db->prepare('
SELECT id, name, color FROM categories;
');

$stmt->execute();

$categories = [];
foreach ($stmt as $s){
    http_response_code(200);
    $category["id"] = $s["id"];
    $category["name"] = $s["name"];
    $category["color"] = $s["color"];

    $categories[] = $category;
    
}
if(!$categories){
    $categories["error"] = 'No Categories in database!';
}

echo json_encode($categories)

?>