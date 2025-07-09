<?php

require 'Validator.php';

$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Notes';
$description = "Have something's in mind?";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if (Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body of no more than 1,000 characters is required.';
    }

    if (empty($errors)) {
        $currentUserId = 1;
        $db->query("INSERT INTO notes (body, user_id) VALUES (:body, :userId)", [
            'body' => $_POST['body'],
            'userId' => $currentUserId
        ]);
        
        header('Location: /notes');
        die;
    }


}

require 'views/note-create.view.php';
