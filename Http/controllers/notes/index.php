<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$notes = $db->query("SELECT * FROM notes WHERE user_id = :userId", [
    'userId' => getUser('id')
])->get();

view('notes/index.view.php', [
    'heading' => 'Notes',
    'description' => "Have something's in mind?",
    'notes' => $notes
]);