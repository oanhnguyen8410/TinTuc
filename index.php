<?php
	// require('Model/DbModel.php');
	// $db = new DbModel;
	// $db->connect();

	/*Xử lý các request*/
	// session_start();
	
	
	// require('View/admin/layouts/header.php');
	// if (isset($_GET['controller'])) {
		$action = $_GET['action'];
	$controller = $_GET['controller'];

	$controllerName = $controller .'Controller';

	require_once('Controller/'. $controllerName .'.php');
	// require ('Route/admin/web.php');
	$controller = new $controllerName();
	$controller->$action();
	// else {
	// 	require('View/admin/pages/home.php');
	// }
	// require('View/admin/layouts/footer.php');
?>