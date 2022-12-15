<?php

    session_start();

    require 'admin/config.php';
	require 'functions.php';

    //echo session_id();
    $conexion= conexion($bd_config);

    require 'views/index.view.php';
?>