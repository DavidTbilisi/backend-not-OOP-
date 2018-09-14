<?php
dbg($_GET);

$routes = ['view', 'dashboard'];

$isGET = isset($_GET['file']) && !empty($_GET['file']);
if ($isGET && in_array($_GET['file'], $routes)) {
    $file = $_GET['file'];
} else {
    $file ="dashboard";
}


