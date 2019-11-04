<?php
session_start();

if(isset($_REQUEST['login'])){
		include_once("controller/controller.php");
		$ctrl = new controller();
		$ctrl->getLogin();	
}
echo"<div>";
	include_once( 'view/header.php');
echo"</div>";

echo "<div>";				
	include_once("controller/controller.php");
	$controller = new controller();
	$controller->getPage();	
echo "</div>";

echo "<div>";
include_once('view/footer.php');		
echo "</div>";
?>
