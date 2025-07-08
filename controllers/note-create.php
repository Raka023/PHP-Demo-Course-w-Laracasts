<?php

$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Notes';
$description = "Have something's in mind?";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    dd($_POST['body']);
}

require 'views/note-create.view.php';
