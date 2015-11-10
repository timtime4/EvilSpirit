<?php
	session_start();

	$link = mysqli_connect('localhost', 'tpusater', 'evilspirit');
	
	if(!$link){
		die('Could not connect: ' . mysql_error());
	}

	mysqli_select_db($link, 'tpusater') or die('Could not select database');

	

?>