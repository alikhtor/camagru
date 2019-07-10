<?php include('includes/login-handler.php') ?>

<?php require_once('head_section.php') ?>
	

	<!-- container - wraps whole page -->
	<div class="container">
		<!-- navbar -->
		
		<?php include('navbar.php') ?>
      <div id="inputContainer">
        <form id="loginForm" action="login.php" method="POST">
          <h2>Login to your account</h2>
          <p>
            <label for="loginEmail">Email: </label>
            <input id="loginEmail" name="loginEmail" type="email" placeholder="Enter you email" required>
          </p>
          <p>
            <label for="loginPassword">Password: </label>
            <input id="loginPassword" name="loginPassword" type="password" placeholder="Enter you password" required>
          </p>
          <button type="submit" name="loginButton">Log in</button>
        </form>
        <p><a href="#">Forgot your password?</a></p>
        <p>Don't have an account? You can <a href="register.php">register</a>, right now.</p>
      </div>

	<?php include('footer.php') ?>