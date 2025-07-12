<?php

// Home
$router->get('/', 'controllers/home.php');

// Authentication
$router->get('/register', 'controllers/registration/create.php')->only('guest');
$router->post('/register', 'controllers/registration/store.php');
$router->get('/login', 'controllers/sessions/create.php');
$router->post('/login', 'controllers/sessions/store.php');
$router->delete('/logout', 'controllers/sessions/destroy.php');

// Notes
$router->get('/notes', 'controllers/notes/index.php')->only('auth');
$router->get('/notes/note', 'controllers/notes/show.php');
$router->delete('/notes/note', 'controllers/notes/destroy.php');
$router->get('/notes/create', 'controllers/notes/create.php');
$router->post('/notes/create', 'controllers/notes/store.php');
$router->get('/notes/note/edit', 'controllers/notes/edit.php');
$router->patch('/notes/note/edit', 'controllers/notes/update.php');

// To do's
$router->get('/todos', 'controllers/todos.php')->only('auth');

// Calendar
$router->get('/calendar', 'controllers/calendar.php')->only('auth');