<?php
//== la page d'accueil ========================================
$route->addRoute('GET', '/', 'FrontController@index');
$route->addRoute('GET', '/game', 'FrontController@scenarium');
$route->addRoute('GET', '/ressources', 'FrontController@ressources');
$route->addRoute('GET', '/conception', 'FrontController@conception');
$route->addRoute('GET', '/gamedays', 'FrontController@gamedays');
$route->addRoute('GET', '/contact', 'FrontController@contact');
$route->addRoute('POST', '/contact', 'FrontController@message');