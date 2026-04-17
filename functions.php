<?php
$data = [
    "title" => $_POST['title'],
    "content" => $_POST['content']
];
require ('config.php');

$name = $_POST['name'];

$stmt = $pdo ->query('SELECT * FROM users');
$users = $stmt -> fetchAll();
$stmt = $pdo ->query('SELECT * FROM movies');
$movies = $stmt -> fetchAll();



function insert($pdo, $data){
$sql = "INSERT INTO`posts`( `title`, `content`) VALUES (:title, :content)";
$stmt = $pdo -> prepare($sql);
$result = $stmt -> execute($data);
header("Location: ./index.php");
}