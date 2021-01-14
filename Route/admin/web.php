<?php
	// $controller = $_GET['controller'];
	// require('/Controller/' . $controllerName . '.php'); /*require controller tương ứng*/
	// $controller = ucfirst($controller); /*chuyển đổi chữ cái đầu tiên của chuỗi thành chữ hoa */
	// $request = new $controller; /*khởi tạo một class controller tương ứng với biến $controller*/

	$action = $_GET['action'];
	$controller = $_GET['controller'];

	$controllerName = $controller .'Controller';

	require_once('Controller/'. $controllerName .'.php');
	
	$controller = new $controllerName();
	$controller->$action();
?>s