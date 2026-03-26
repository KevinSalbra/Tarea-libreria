<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/Controllers/bookcontroller.php';
require_once __DIR__ . '/../app/Controllers/authorcontroller.php';
require_once __DIR__ . '/../app/Controllers/publishercontroller.php';

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/../resources/views';
$cache = __DIR__ . '/../cache';

$blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);

// Routing básico
$url = $_GET['url'] ?? 'home';

if ($url === '/' || $url === 'home') {
    echo $blade->run('home');

} elseif ($url === 'books') {
    $controller = new bookcontroller($blade);
    echo $controller->index();

} elseif (preg_match('/^books\/(\d+)$/', $url, $matches)) {
    $controller = new bookcontroller($blade);
    echo $controller->show($matches[1]);
} elseif ($url === 'authors') {
    $controller = new AuthorController($blade);
    echo $controller->index();
}elseif (preg_match('/^authors\/(\d+)$/', $url, $matches)) {
    $controller = new AuthorController($blade);
    echo $controller->show($matches[1]);
}elseif ($url === 'publishers') {
    $controller = new PublisherController($blade);
    echo $controller->index();
}elseif (preg_match('/^publishers\/(\d+)$/', $url, $matches)) {
    $controller = new PublisherController($blade);
    echo $controller->show($matches[1]);
} else {
    echo "404 - Página no encontrada";
}