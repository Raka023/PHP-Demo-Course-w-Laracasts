<?php

require 'functions.php';
// require 'router.php';

$dsn = 'mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4';
$username = 'root';
$password = '';
$options = [];

$conn = new PDO($dsn, $username, $password);

$stmt = $conn->prepare("SELECT * FROM posts");
$stmt->execute();

$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

// dd($posts);

foreach ($posts as $post) {
    echo "<li>{$post['title']}</li>";
}