<?php


require_once 'util.service.php';
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
dd($uri);

$routes = [
 '/' => 'index.php',
 '/about' => 'about.php',
 '/contact' => 'contact.php',
 '/user' => 'user.php',
 '/activities' => 'activities.php'
];

if (array_key_exists($uri, $routes)) {
 require_once $routes[$uri];
} else {
 require_once '404.php';
}
