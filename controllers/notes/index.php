<?php

$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Notes';
$description = "Have something's in mind?";

$currentUserId = 1;
$notes = $db->query("SELECT * FROM notes WHERE user_id = :userId", [
    'userId' => $currentUserId
])->get();

require 'views/notes/index.view.php';