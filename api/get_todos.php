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
SELECT id, content, category_id FROM todos;
');

$stmt->execute();

$todos = [];
foreach ($stmt as $s){
    $todo["id"] = $s["id"];
    $todo["content"] = $s["content"];
    $todo["category_id"] = $s["category_id"];

    if($s["category_id"]) {
        $stmt2 = $db->prepare('
            SELECT name, color FROM categories WHERE id = :id;
        ');
        $stmt2->execute(['id' => $todo["category_id"]]);
        foreach ($stmt2 as $s2){
            $todo["category_name"] = $s2["name"];
            $todo["category_color"] = $s2["color"];
        }
    }
    $todos[] = $todo;
    
}
if(!$todos){
    $todos["error"] = 'No Todos in database!';
}

echo json_encode($todos)

?>