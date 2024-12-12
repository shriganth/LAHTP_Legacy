<?php

include_once './libs/load.php';

Session::Session_stop();

header("Location: _signin.php");
exit;


?>