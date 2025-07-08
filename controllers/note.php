<?php

$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Notes';
$description = "Have something's in mind?";

$userId = 1;
$note = $db->query("SELECT * FROM notes WHERE id = ? AND user_id = ?", [$_GET['id'], $userId])->fetch();

require 'views/note.view.php';