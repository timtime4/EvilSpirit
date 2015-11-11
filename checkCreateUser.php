<?php
  function checkForm(){
    if( !isset($_POST["username"]) && !isset($_POST["password"])
    	&& !isset($_POST["password2"])){
    	die("Those forms must be filled out\n");
    	return false;
    }

    if( $_POST["password"] !== $_POST["password2"]){
    	die("passwords do not match\n");
    	return false;
    }

    return true;
    
  }

  if(isset($_POST["submit"])){
    if(checkForm()){
    	//TODO: send the post data from this check stage to the DB
    	session_start();

			$link = mysqli_connect('localhost', 'tpusater', 'evilspirit');
			
			if(!$link){
				die('Could not connect: ' . mysql_error());
			}

			mysqli_select_db($link, 'tpusater') or die('Could not select database');

			$fields[] = "username";
			$values[] = $_POST["username"];

			// Deal with password
			$fields[] = "password";
			$values[] = password_hash($_POST["password"], PASSWORD_DEFAULT);

			if(isset($_POST["firstName"])){
				$fields[] = "firstName";
				$values[] = $_POST["firstName"];
			}

			if(isset($_POST["lastName"])){
				$fields[] = "lastName";
				$values[] = $_POST["lastName"];
			}

			if(isset($_POST["email"])){
				$fields[] = "email";
				$values[] = $_POST["email"];
			}

			if(isset($_POST["phoneNum"])){
				$fields[] = "phoneNum";
				$values[] = $_POST["phoneNum"];
			}

			if(isset($_POST["firstName"])){
				$fields[] = "firstName";
				$values[] = $_POST["firstName"];
			}

			$leaseQuery = "INSERT INTO Users(" .  
				implode(",", $fields) . ") VALUES (" .
				implode(",", $values) . ")";

			echo $leaseQuery;
			die("\nthere it is");
    }
  }
?>
