<?php

$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Notes';
$description = "Have something's in mind?";

$currentUserId = 1;
$note = $db->query("SELECT * FROM notes WHERE id = ?", [$_GET['id']])->fetch();

if (! $note) {
    abort(Response::NOT_FOUND);
}

if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}

require 'views/note.view.php';