<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

require 'userId.php';

$note = $db->query("SELECT * FROM notes WHERE id = :id", [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$db->query("DELETE FROM notes WHERE id = :id", [
    'id' => $_POST['id']
]);

redirect('/notes');