<?php
//objeto 
$db_host = get_cfg_var("db_host");
$db_username = get_cfg_var("db_username");
$db_pass = get_cfg_var("db_pass");
$db_name = get_cfg_var("db_name");

$baseDatos  = new mysqli($db_host, $db_username, $db_pass, $db_name);
