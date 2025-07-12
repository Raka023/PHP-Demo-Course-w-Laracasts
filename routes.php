<?php

// Home
$router->get('/', 'controllers/home.php');

// Authentication
$router->get('/register', 'controllers/registration/create.php')->only('guest');
$router->post('/register', 'controllers/registration/store.php')->only('guest');
$router->get('/login', 'controllers/session/create.php')->only('guest');
$router->post('/login', 'controllers/session/store.php')->only('guest');
$router->delete('/logout', 'controllers/session/destroy.php')->only('auth');

// Notes
$router->get('/notes', 'controllers/notes/index.php')->only('auth');
$router->get('/notes/note', 'controllers/notes/show.php')->only('auth');
$router->delete('/notes/note', 'controllers/notes/destroy.php')->only('auth');
$router->get('/notes/create', 'controllers/notes/create.php')->only('auth');
$router->post('/notes/create', 'controllers/notes/store.php')->only('auth');
$router->get('/notes/note/edit', 'controllers/notes/edit.php')->only('auth');
$router->patch('/notes/note/edit', 'controllers/notes/update.php')->only('auth');

// To do's
$router->get('/todos', 'controllers/todos.php')->only('auth');

// Calendar
$router->get('/calendar', 'controllers/calendar.php')->only('auth');