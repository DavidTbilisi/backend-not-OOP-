<?php

include_once "helpers.php";
include_once DB."/db.php";
include_once "router/router.php";
include_once CTRL."/controller.php";
// dbg($_SESSION);
include_once VIEW."/{$file}.php";

?>