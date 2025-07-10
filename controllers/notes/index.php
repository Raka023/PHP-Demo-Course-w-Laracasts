<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 2;

$notes = $db->query("SELECT * FROM notes WHERE user_id = :userId", [
    'userId' => $currentUserId
])->get();

view('notes/index.view.php', [
    'heading' => 'Notes',
    'description' => "Have something's in mind?",
    'notes' => $notes
]);