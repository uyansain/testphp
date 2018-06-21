
  
    <?php
			include_once('view/header.php');
			?>

    <h1 class="text-center">Hello, world!</h1>
    <div class="container">
			<div id="content">
				<h3>Content</h3>
				<?php
				if(isset($_GET['about'])){
					include 'about.php';
				} else if(isset($_GET['products'])){
					include 'products.php';
				} else if(isset($_GET['blog'])){
					include 'blog.php';
				} else if(isset($_GET['contact'])){
					include 'contact.php';
				}
				?>
			</div>
		</div>
		<div class="container">
			<button class="btn btn-primary">Next</button>
		</div>
            <?php
			include_once('view/footer.php');
			?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
