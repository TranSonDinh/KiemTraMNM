<?php 
	//start session
	session_start();
	//load file Connection.php
	include "../Application/Connection.php";
	//---
	$page = isset($_GET["page"]) ? $_GET["page"] : "";
	if($page!="")
		$fileController = $page.".php";
    if(!isset($_SESSION["username"])){
        include "Views/DangKy.php";
    }else{
        include "Views/Home.php";
    }
 ?>