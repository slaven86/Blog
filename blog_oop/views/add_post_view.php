<?php require_once 'partials/top.php'; ?>

<nav class="navbar navbar-expand navbar-light bg-light">
	<a href="index.php" class="navbar-brand">BLOGGER</a>
		<ul class="navbar-nav ml-auto">
		
			<li class="nav-item">
				<a href="index.php" class="nav-link">Back to blog</a>
			</li>
			
			<li class="nav-item">
				<a href="logout.php" class="nav-link">Logout</a>
			</li>
			
			
					
		</ul>
</nav>

<div class="jumbotron text-center">
	<h4>Add new post</h4>
</div>

<div class="container">
	<div class="row">
		<div class="col-8 offset-2">
		
			<?php if($post->new_post_result): ?>
				<div class="alert alert-success">New post inserted</div>
			
			<?php endif; ?>
			
			<form action="add_post.php" method="POST">
				<input type="text" name="post_title" placeholder="title" class="form-control" required /> </br>
				<textarea name="post_description"  class="form-control" placeholder="description" cols="30" rows="10" required ></textarea> </br>
				<button type="submit" name="btn_post_sbm" class="form-control btn btn-primary" >Add</button>
			
			</form>
		
		</div>
	</div>
</div>

<?php require_once 'partials/bottom.php';?>