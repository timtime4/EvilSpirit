<?php
  function checkForm(){
    echo "Hello\n";

    if( $_POST["username"] == "" && $_POST["password"] == ""
    	&& $_POST["password2"] == "" ){
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
			$values[] = "'" . $_POST["username"] . "'";

			// Deal with password
			$fields[] = "password";
			$values[] = "'" . password_hash($_POST["password"], PASSWORD_DEFAULT) . "'";

			if($_POST["firstName"] != ""){
				$fields[] = "firstName";
				$values[] = "'" . $_POST["firstName"] . "'";
			}

			if($_POST["lastName"] != ""){
				$fields[] = "lastName";
				$values[] = "'" . $_POST["lastName"] . "'";
			}

			if($_POST["email"] != ""){
				$fields[] = "email";
				$values[] = "'" . $_POST["email"] . "'";
			}

			if($_POST["phoneNum"] != ""){
				$fields[] = "phoneNum";
				$values[] = "'" . $_POST["phoneNum"] . "'";
			}

			$newUserSubmit = "INSERT INTO Users(" .  
				implode(",", $fields) . ") VALUES (" .
				implode(",", $values) . ")";

      echo $newUserSubmit;

      $newUserSumbitResult = mysqli_query($link, $newUserSubmit) 
				or die('Insert Query failed: ' . mysql_error($link));      

    }
  }
?>
