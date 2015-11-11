<?php
	session_start();

	$link = mysqli_connect('localhost', 'tpusater', 'evilspirit');
	
	if(!$link){
		die('Could not connect: ' . mysql_error());
	}

	mysqli_select_db($link, 'tpusater') or die('Could not select database');

	$newUserSubmit = "UPDATE Users SET password = '" .  
		password_hash("Jeff", PASSWORD_DEFAULT) . "'"
		"WHERE userID = 2";

  echo $newUserSubmit;

  $newUserSumbitResult = mysqli_query($link, $newUserSubmit) 
		or die('Insert Query failed: ' . mysql_error($link));
?>