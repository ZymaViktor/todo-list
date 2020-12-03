<?php
require_once('config.php');

$task = $_POST['task'];

if($task == "") {
    echo "Enter your task!";
    exit();
} 

$sql = 'INSERT INTO tasks(task) VALUE(:task)';
$query = $pdo->prepare($sql);
$query->execute(['task' => $task]);

header('Location: /');