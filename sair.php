<?php
include_once "config.php";

	session_start();
	session_destroy();

	echo "Você saiu do sistema";
	header("Refresh: 1; url=$url");
?>
