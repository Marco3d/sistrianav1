<?php
	require_once 'class/docentes.php';
	$obj = new Docentes();
	$obj->delete($_GET["id"]);
?>