<?php 
	$pages = array('accueil','contact');
	if(isset($_GET['page']) && in_array($_GET['page'], $pages)){
		$page = $_GET['page'];
		$contenu = 'templates/'.$page.'.php';
	}else if(isset($_GET['page']) && !in_array($_GET['page'], $pages)) {
		$contenu = 'templates/404.php';
	}else{
		$contenu = 'templates/accueil.php';
	}
	require_once($contenu); 
 ?>