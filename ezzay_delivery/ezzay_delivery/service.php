<!DOCTYPE html>
<html>
<head>
	<title>Delivery Services</title>
<style>
    body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
}

header {
	background-color: blue;
	color: #fff;
	padding: 1rem;
}

h1 {
	margin: 0;
}

nav ul {
	margin: 0;
	padding: 0;
	list-style: none;
	display: flex;
    justify-content: space-between;
    align-items: center;
}

nav li {
	display: inline-block;
	margin-right: 20px;
}

nav a {
	color: #fff;
	text-decoration: none;
	padding: 0.5rem 1rem;
	border-radius: 3px;
	transition: all 0.3s ease-in-out;
}

nav a:hover {
	background-color: #fff;
    color: #333;
}

nav ul a .active {
    background-color: #fff;
    color: #000;
}

main {
	margin: 20px;
}

section {
	margin-bottom: 20px;
}

h2 {
	margin-top: 0;
}

ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

li {
	margin-bottom: 10px;
}

.columns {
	width: 1000px;
	display: flex;
	margin: 50px 0px 400px -30px;
}
.column {
	text-align: center;
	padding: 10px;
}
.column a {
	text-decoration: none;
	color: black;
}
.column a:hover {
	text-decoration: underline;
}

footer {
	background-color: #333;
	color: #fff;
	padding: 20px;
	text-align: center;
}
    </style>
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="service.php"class= "active">Services</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="signup.php">Sign Up</a></li>
				<li><a href="login.php">Log In</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section>
			<h2>Our Services</h2>
			<p>We offer a range of delivery services to suit your needs:</p>
			<div class="columns">
				<div class="column"><strong><a href="#">Standard Delivery:</a></strong> Delivered within 3-5 business days.</div>
				<div class="column"><strong><a href="#">Express Delivery:</a></strong> Delivered within 1-2 business days.</div>
				<div class="column"><strong><a href="#">International Delivery:</a></strong> Delivered within 7-10 business days.</div>
				<div class="column"><strong><a href="#">Same-day Delivery:</a></strong> Delivered on the same day.</div>
				<div class="column"><strong><a href="#">Custom Delivery:</a></strong> Tailored to your specific requirements.</div>
			</div>
		</section>
	</main>
	<footer>
		<p>&copy; 2023 Delivery Services. All rights reserved.</p>
	</footer>
</body>
</html>