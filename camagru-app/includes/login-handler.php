<?php 
  if (isset($_POST['loginButton'])) {
    $loginEmail = str_replace(" ", "", strtolower(strip_tags($_POST['loginEmail'])));
    $loginPassword = strip_tags($_POST['loginPassword']);
  }
?>