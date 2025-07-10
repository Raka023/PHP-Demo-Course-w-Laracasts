<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUserId = 2;

$note = $db->query("SELECT * FROM notes WHERE id = :id", [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->query("DELETE FROM notes WHERE id = :id", [
        'id' => $_POST['id']
    ]);

    redirect('/notes');
}

view('notes/show.view.php', [
    'heading' => 'Notes',
    'description' => "Have something's in mind?",
    'note' => $note
]);