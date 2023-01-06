<?php

$server = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
$server .= "://".$_SERVER['HTTP_HOST'];

const APP_DIR = "si_jurnal_unuha";
$base_dir = $server."/".APP_DIR;
$base_url = $server."/".APP_DIR;

?>