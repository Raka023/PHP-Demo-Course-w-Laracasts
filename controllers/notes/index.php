<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 2;

$notes = $db->query("SELECT * FROM notes WHERE user_id = :userId", [
    'userId' => $currentUserId
])->get();

view('notes/index.view.php', [
    'heading' => 'Notes',
    'description' => "Have something's in mind?",
    'notes' => $notes
]);