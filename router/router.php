<?php
session_start();
$routes = ['login','register','editable_page'];
$adminRoutes = ['dashboard', 'logout', 'profile','editable_page_admin'];


$users = select('* from users');

function login() {
    $pass = hash('md5', @$_POST['pass']);
    $mail = @$_POST['mail'];
    global $users;
    foreach ($users as $user ):
    if ($pass == $user['pass'] && $mail == $user['mail']){
        $_SESSION['user_id'] = $user["id"];
    };
    endforeach;
    return false;
}

function isLogedin () {
    login();
    return @$_SESSION['user_id'] > -1 ? true : false;
}
function isInRoutes($routes){
    $isGET = isset($_GET['file']) && !empty($_GET['file']);
    return $isGET && in_array($_GET['file'], $routes);
}

function logout ( ) {
    session_destroy();
}


if( isLogedin() ){
    if (isInRoutes($adminRoutes)) {
        // load view from url;
        if ($_GET['file'] == 'logout') {  logout(); redirect(BASE_URL.HOME); }
        $file = $_GET['file'];
    } else{
        $file ="dashboard";
    }
} else {
    if ( isInRoutes($routes) ) {
        $file = $_GET['file'];
    } else {
        $file = 'login';
    }
}






