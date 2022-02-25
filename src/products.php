<?php
require("classes/index1.php");
ProductList();

if (isset($_POST)) {
	$action = $_POST['action'];
	switch ($action) {
		case 'add': {
				$id = $_POST['add'];
				getProduct($id);
				break;
			}
		case 'edit': {
				$id = $_POST['input1'];
				$newqty = $_POST['input11'];
				edit($id, $newqty);
				break;
			}
		case 'delete': {
				$id = $_POST['deleteId'];
				delete($id);
				break;
			}
		case 'empty': {
				emptyList();
				break;
			}
	}
}


?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="style.css">
	<title>
		Products
	</title>

</head>

<body>
	<div id="header">
		<h1 id="logo">Logo</h1>
		<nav>
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="products.php">Products</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</div>
	<div id="main">
		<div id="products">
			<?php displayProducts() ?>
		</div>
		<div id='cart'>
			<?php displayCart() ?>
		</div>
	</div>
	<div id="footer">
		<nav>
			<ul id="footer-links">
				<li><a href="#">Privacy</a></li>
				<li><a href="#">Declaimers</a></li>
			</ul>
		</nav>
	</div>
</body>

</html>