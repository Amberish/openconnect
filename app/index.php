<?php

	include_once "../config.dir.vars.php";
	
	if(isset($_GET['s'])){
		$page_requested = "";
		$searchTerm = $_GET['s'];
		include_once TEMPLATES . DS . "search.php";

	}else{

		if(isset($_GET['page_requested'])){
			$page_requested = $_GET['page_requested'];
		
		}

		if(!isset($page_requested)){
			$page_requested = "";			
			include_once TEMPLATES . DS . "index.php";	

		}else{
			if(file_exists(TEMPLATES . DS . $page_requested . ".php")){
				include_once TEMPLATES . DS . $page_requested . ".php";
			}else{
				header("Location:./404/page_not_found/");
			}
		}
	}


?>