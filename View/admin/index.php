<?php

	require('layouts/header.php');
	require '../../Lib/function.php';
	

	if (isset($_GET['controller'])) {
		$action = $_GET['action'];
	$controller = $_GET['controller'];

	$controllerName = $controller .'Controller';

	require_once('../../Controller/admin/'. $controllerName .'.php');

	$controller = new $controllerName();
	$controller->$action();
		} else {
			require '../../Templates/admin/home.php';
		}


	require('layouts/footer.php');
	?>