<?php 
  if (isset($_POST['registerButton'])) {
    $email = str_replace(" ", "", strtolower(strip_tags($_POST['email'])));
    $password1 = strip_tags($_POST['password']);
    $password2 = strip_tags($_POST['confirmPassword']);
    
    $isSuccessful = $account->register($email, $password1, $password2);

    if ($isSuccessful) {
      header("Location: index.php");
    }
  }
?>