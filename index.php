<?php

    session_start();
/*foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
    }*/
    require 'admin/config.php';
	require 'functions.php';

    //echo session_id();
    $conexion= conexion($bd_config);

    require 'views/index.view.php';
?>
