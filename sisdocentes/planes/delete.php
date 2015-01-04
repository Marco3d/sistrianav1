<?php
	require_once '../class/subplanes.php';
	$obj = new Subplanes();
	$obj->delete($_GET["id"]);
?>