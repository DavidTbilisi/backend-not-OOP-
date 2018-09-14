<?php
define('BASE_URL',$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST']);
define('HOME','/giaPHP/backend/');
define('VIEW','view');
define('CTRL','controller');
define('DB','db');


// DATABASE
define("HOST", 'localhost');
define("USER", 'root');
define("PASS", '');
define("DATABASE", 'giaphp');



define("BR", '<br>');



// debugging
function dbg ($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
function dd($data){
    dbg($data);
    die;
}
function clog($data, $description = "") {
    $data = json_encode($data);
    echo <<<DATA
<script> console.log('{$description} ', $data) </script>
DATA;
}
function cc( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}

?>

