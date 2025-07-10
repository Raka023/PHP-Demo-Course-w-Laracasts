<?php

$router->get('/', 'controllers/home.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->get('/notes/note', 'controllers/notes/show.php');
$router->get('/notes/create', 'controllers/notes/create.php');

$router->post('/notes/create', 'controllers/notes/store.php');
$router->delete('/notes/note', 'controllers/notes/destroy.php');

$router->get('/todos', 'controllers/todos.php');

$router->get('/calendar', 'controllers/calendar.php');