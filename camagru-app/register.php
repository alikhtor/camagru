<?php 
  include('includes/classes/Account.php');

  $account = new Account();
  
  include('includes/register-handler.php')
?>

<?php require_once('head_section.php') ?>
	
	<!-- container - wraps whole page -->
	<div class="container">
		<!-- navbar -->
		
		<?php include('navbar.php') ?>
      <div id="inputContainer">
        <form id="registerForm" action="register.php" method="POST">
          <h2>Create your account</h2>
          <p>
            <label for="email">Email: </label>
            <input id="email" name="email" type="email" placeholder="Enter you email" required>
            <?php if($account->isErrorEmail) {
              echo $account->getError("email");
            } ?>
          </p>
          <p>
            <label for="password">Password: </label>
            <input id="password" name="password" type="password" placeholder="Enter you password" required>
            <?php if($account->isErrorPassword) {
              echo $account->getError("password");
            } ?>
          </p>
          <p>
            <label for="confirmPassword">Confirm password: </label>
            <input id="confirmPassword" name="confirmPassword" type="password" placeholder="Enter you password" required>
          </p>
          <button type="submit" name="registerButton">Register</button>
        </form>
        <p>If you already have an account, you can <a href="login.php">login</a>.</p>
      </div>

	<?php include('footer.php') ?>