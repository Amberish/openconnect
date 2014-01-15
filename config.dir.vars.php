<?php

	define("DS", "/");

	define("ROOT", (__DIR__) . DS . "app");
	define("CORE_ROOT", (__DIR__) . DS . "core");
	define("COURSE_ARCHIVE", (__DIR__) . DS . "course_archive");
	define("USER_ARCHIVE", (__DIR__) . DS . "user_archive");
	/*Information to be used in attributes. Not for include or require..*/
	define("WEB_ROOT", "/openconnect/app");
	define("CSS", WEB_ROOT . DS . "css");
	define("IMG", WEB_ROOT . DS . "img");
	define("JS", WEB_ROOT . DS . "js");
	define("VENDOR", WEB_ROOT . DS . "vendor");
	/*--------------------------------------------------------------------*/

	/*Information to be used in require and include-----------------------*/
	define("SCRIPTS", ROOT . DS . "scripts");
	define("TEMPLATES", ROOT . DS . "templates");
	/*--------------------------------------------------------------------*/
	
?>