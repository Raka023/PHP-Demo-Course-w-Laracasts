<?php

$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Notes';

$id = 1;
$notes = $db->query("SELECT * FROM notes WHERE user_id = ?", [$id])->fetchAll();

require 'views/notes.view.php';