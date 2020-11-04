<?php require_once 'partials/top.php'; ?>

<nav class="navbar navbar-expand navbar-light bg-light">
	<a href="" class="navbar-brand">BLOGGER</a>
		<ul class="navbar-nav ml-auto">
		<?php if(isset($_SESSION['logged_user'])): ?>
			<li class="nav-item">
				<a href="add_post.php" class="nav-link">Add post</a>
			</li>
			<li class="nav-item">
				<a href="logout.php" class="nav-link">Logout</a>
			</li>
			<li class="nav-item">
				<a href="index.php" class="nav-link">
				<button class="btn btn-warning"><?php echo $_SESSION['logged_user']->name; ?></button></a>
			</li>
		<?php else: ?>
			<li class="nav-item">
				<a href="login_register.php" class="nav-link">Login/Register</a>
			</li>
		<?php endif; ?>
			
		</ul>
</nav>

<div class="jumbotron text-center">
	<h4>Blogger posts</h4>
</div>

<div class="container">
	<div class="row">
		<div class="col-8 offset-2">
		
		<?php foreach($posts as $post): ?>
			<div class="card mb-3">
				<div class="card-header">
				<h3><?php echo $post->title; ?>
				<small class="float-right">
					<?php if(isset($_SESSION['logged_user']) && $_SESSION['logged_user']->id == $post->user_id ): ?>
					<a href="index.php?post_id=<?php echo $post->id ;?>" class="btn btn-sm btn-danger">Remove</a>
				
					<?php endif; ?>
				</h3>
				</small>
				
				</div> </br>
				<div class="card-body"><p> <?php echo $post->description; ?></p></div> </br>
				<div class="card-footer">
					<button class="btn btn-sm btn-primary float-right"> <?php echo $post->created_at; ?></button>
					<button class="btn btn-sm btn-warning float-left"><?php echo $user->getUserId($post->user_id)->name; ?></button>
						
					
				</div>
			<?php endforeach; ?>
			</div>
		</div>
	
	</div>

</div>

 <?php require_once 'partials/bottom.php'; ?>