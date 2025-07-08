<?php

$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Notes';
$description = "Have something's in mind?";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $currentUserId = 1;
    $db->query("INSERT INTO notes (body, user_id) VALUES (?, ?)", [$_POST['body'], $currentUserId]);
}

require 'views/note-create.view.php';
