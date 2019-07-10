<?php 
  class Account {

    private $errorsDic;
    public $isErrorEmail;
    public $isErrorPassword;

    public function __construct() {
      $this->errorsDic = new StdClass;
      $this->isErrorEmail = false;
      $this->isErrorPassword = false;

    }

    public function register($email, $password1, $password2) {
      $this->validateEmail($email);
      $this->validatePassword($password1, $password2);

      if ($this->isErrorEmail || $this->isErrorPassword) {
        return(false);
      }
      else {
        //insert data into db
        return(true);
      }
    }

    public function getError($key) {
      $strToPaste = $this->errorsDic->$key;
      return "<span class='errorMessage' style='color: red;'>$strToPaste</span>";
    }

    private function validateEmail($email) {
      if (strlen($email) < 5) {
        $this->errorsDic->email = "You email must be greater than 5 chars length!";
        $this->isErrorEmail = true;
        return;
      }
    }

    private function validatePassword($pw1, $pw2) {
      if ($pw1 != $pw2) {
        $this->errorsDic->password = "Your passwords don't match!";
        $this->isErrorPassword = true;
        return; 
      }
      if (preg_match('/[^A-Za-z0-9]/', $pw1)) {
        $this->errorsDic->password = "Your password can only contain numbers and letters!";
        $this->isErrorPassword = true;
        return;
      }
      if (strlen($pw1) < 6 || strlen($pw1) > 20) {
        $this->errorsDic->password = "You password must be between 6 and 20 chars length!";
        $this->isErrorPassword = true;
        return;
      }
    }
  }
?>