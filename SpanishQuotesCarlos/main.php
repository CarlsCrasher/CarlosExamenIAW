<?php 
	require_once('db_manager.php');

	if (isset($_GET['quote']) && $_GET['quote'] != ""){
		echo $_GET['quote'].'<br>';
		getSentence($_GET['quote']);
	}
	else{
		echo 'NO RESULTS';
	}

?>