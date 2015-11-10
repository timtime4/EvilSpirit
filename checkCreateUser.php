<?php
  function checkForm(){
    echo "hello";
    die("\ngoodbye");
  }

  if(isset($_POST["submit"])){
    checkForm();
  }
?>
