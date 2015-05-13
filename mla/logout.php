<?php

	session_start();
	session_destroy();

	header("mla/index.php");
?>