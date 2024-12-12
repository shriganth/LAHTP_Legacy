<?php

include_once '/var/labsstorage/home/shriganth87/htdocs/session_sqlinjection/libs/includes/Database.class.php';
include_once '/var/labsstorage/home/shriganth87/htdocs/session_sqlinjection/libs/includes/User.class.php';
include_once '/var/labsstorage/home/shriganth87/htdocs/session_sqlinjection/libs/includes/Session.class.php';


Session::Session_start();

function load_template($name) {
    include_once $_SERVER['DOCUMENT_ROOT']."/session_sqlinjection/_templates/$name.php";
}

?>