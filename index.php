<?doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>My web application</title>
		<link type="text/css" rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<header>
			<h1>This is header 1</h1>
			<nav>
				<ul>
					<li><a href="index.php?about">About</a></li>
					<li><a href="index.php?products">Products</a></li>
					<li><a href="index.php?blog">Blog</a></li>
					<li><a href="index.php?contact">Contact</a></li>
				
				</ul>
			</nav>
			
		</header>
		<div>
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
		<div>
			<button>Next</button>
		</div>
		<footer>
		this is footer
		</footer>
	
	</body>




</html>