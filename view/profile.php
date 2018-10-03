<?php

include_once 'header.php';
include_once 'topline.php';
include_once 'nav.php';

foreach ($user as $index => $value ):
    echo $value["id"],BR, $value['mail'],BR, $value['name'],BR, $value['pass'];
endforeach;

include_once 'footer.php';

?>