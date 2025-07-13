<?php

// Home
$router->get('/', 'home.php');

// Support
$router->get('/support', 'support.php');
$router->post('/support', 'support.php');

// Authentication
$router->get('/register', 'registration/create.php')->only('guest');
$router->post('/register', 'registration/store.php')->only('guest');
$router->get('/login', 'session/create.php')->only('guest');
$router->post('/login', 'session/store.php')->only('guest');
$router->delete('/logout', 'session/destroy.php')->only('auth');

// Notes
$router->get('/notes', 'notes/index.php')->only('auth');
$router->get('/notes/note', 'notes/show.php')->only('auth');
$router->delete('/notes/note', 'notes/destroy.php')->only('auth');
$router->get('/notes/create', 'notes/create.php')->only('auth');
$router->post('/notes/create', 'notes/store.php')->only('auth');
$router->get('/notes/note/edit', 'notes/edit.php')->only('auth');
$router->patch('/notes/note/edit', 'notes/update.php')->only('auth');

// To do's
$router->get('/todos', 'controllers/todos.php')->only('auth');

// Calendar
$router->get('/calendar', 'controllers/calendar.php')->only('auth');