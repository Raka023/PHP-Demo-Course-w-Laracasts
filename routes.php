<?php

// Home
$router->get('/', 'controllers/home.php');

// Authentication
$router->get('/register', 'controllers/registration/create.php');
$router->post('/register', 'controllers/registration/store.php');

// Notes
$router->get('/notes', 'controllers/notes/index.php');
$router->get('/notes/note', 'controllers/notes/show.php');
$router->get('/notes/create', 'controllers/notes/create.php');
$router->get('/notes/note/edit', 'controllers/notes/edit.php');


// Notes Requests
$router->post('/notes/create', 'controllers/notes/store.php');
$router->patch('/notes/note/edit', 'controllers/notes/update.php');
$router->delete('/notes/note', 'controllers/notes/destroy.php');

// To do's
$router->get('/todos', 'controllers/todos.php');


// Calendar
$router->get('/calendar', 'controllers/calendar.php');