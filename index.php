<?php
/**
 * 
 */
class main
{
	
	function __construct()
	{
        include('tampilan/header.php');
        include('tampilan/menu.php');
	}



	public function getPage($page){
        if($page=='main'){
			include('content/main.php');
		}
		else if ($page=='album') {
			include("content/album.php");
		}
		
	}
}
$page = isset($_GET['page']) ? $_GET['page'] : 'main';
$main = new main();
$main->getPage($page);
?>