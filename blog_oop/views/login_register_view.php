
<?php require_once 'views/partials/top.php'; ?>

<nav class="navbar navbar-expand navbar-light bg-light">
	<a href="index.php" class="navbar-brand">BLOGGER</a>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a href="index.php" class="nav-link">Back to blog</a>
			</li>
		</ul>
</nav>

<div class="jumbotron text-center">
	<h4>Login/Register</h4>
</div>

<div class="container">
	<div class="row">
		<div class="col-6">
		<h4>Login</h4> </br>
			<form action="login_register.php" method="POST">
				
				<input type="email" name="login_email" placeholder="email" class="form-control" required /> </br>
				<input type="password" name="login_password" placeholder="password" class="form-control" required /> </br></br></br></br>
				<button name="login_btn" class="form-control btn btn-primary">Login</button> </br> </br>
			
			</form>
			
			<?php if($user->logged_result): ?>
				<div class="alert alert-success">Uspesno logovanje <a href="index.php">Idite na blog!</a></div>
			
			<?php elseif(isset($_POST['login_btn'])): ?>
				<div class="alert alert-danger">Username i password pogresni</div>	
					
			<?php endif; ?>
	
			
		</div>
		<div class="col-6">
		<h4>Register</h4> </br>
			<form action="login_register.php" method="POST">
				
				<input type="text" name="register_name" placeholder="name" class="form-control" required /> </br>
				<input type="email" name="register_email" placeholder="email" class="form-control" required /> </br>
				<input type="password" name="register_password" placeholder="password" class="form-control" required /> </br>
				<button name="register_btn" class="form-control btn btn-warning">Register</button>
			
			</form> </br>
				<?php if($user->register_result): ?>
					<div class="alert alert-success">Uspesna registracija! Ulogujte se</div>
				
				<?php endif; ?>
	
		</div>
	</div>
</div>

<?php require_once 'views/partials/bottom.php'; ?>

