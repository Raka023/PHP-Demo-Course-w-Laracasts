<?php

$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Notes';
$description = "Have something's in mind?";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if (strlen($_POST['body'] <= 0)) {
        $errors['body'] = 'A body is required';
    }

    if (strlen($_POST['body'] > 1000)) {
        $errors['body'] = 'The body cannot be more than 1,000 characters';
    }

    if (empty($errors)) {
        $currentUserId = 1;
        $db->query("INSERT INTO notes (body, user_id) VALUES (?, ?)", [$_POST['body'], $currentUserId]);
        
        header('Location: /notes');
        die;
    }


}

require 'views/note-create.view.php';
