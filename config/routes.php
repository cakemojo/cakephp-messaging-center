<?php
use Cake\Routing\Router;

Router::plugin(
    'MessagingCenter',
    ['path' => '/messaging-center'],
    function ($routes) {
        $routes->connect('/messages/', ['controller' => 'Messages', 'action' => 'inbox']);
        $routes->fallbacks('DashedRoute');
    }
);
