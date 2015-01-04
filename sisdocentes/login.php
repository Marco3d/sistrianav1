<?php

	//print_r($_POST);exit;
	//echo sha1($_POST["password"]);
	require_once 'class/ses.php';
	$obj = new Ses();
	$obj->logueo();
?>