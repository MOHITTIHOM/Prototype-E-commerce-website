
<?php
require 'core.inc.php';

session_destroy();

if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])){
		$http_referer=$_SERVER['HTTP_REFERER'];
		header('Location: '.$http_referer);
	}	else {
		header('Location: main.php');
	}

?>