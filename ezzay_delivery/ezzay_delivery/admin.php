  <html>
  <head>
    <title>Delivery Website Admin Module</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #333;
  color: #fff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
}

nav ul {
  list-style: none;
  display: flex;
}

nav li {
  margin-right: 20px;
}

nav a {
  color: #fff;
  text-decoration: none;
}

main {
  padding: 20px;
}

footer {
  background-color: #333;
  color: #fff;
  text-align: center;
  padding: 10px;
}
.container {
	max-width: 600px;
	margin: 0 auto;
	padding: 20px;
	background-color: #f2f2f2;
	border: 1px solid #ddd;
}

h1 {
	text-align: center;
	margin-bottom: 20px;
}

label, input, textarea {
	display: block;
	margin-bottom: 10px;
}

input[type="submit"] {
	background-color: #4CAF50;
	color: white;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}

input[type="submit"]:hover {
	background-color: #3e8e41;
}
    </style>
  </head>
  <body>
    <header>
      <h1>Delivery Website Admin Module</h1>
      <nav>
        <ul>
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Order Management</a></li>
          <li><a href="#">Menu Management</a></li>
          <li><a href="#">Customer Management</a></li>
          <li><a href="#">Analytics</a></li>
          <li><a href="#">Settings</a></li>
        </ul>
      </nav>
    </header>
    <div class="container">
		<h1>Service Admin Panel</h1>
		<form action="" method="POST">
			<label for="name">Type of Delivery:</label>
			<input type="text" id="name" name="type" required>
			<label for="price">Price:</label>
			<input type="number" id="price" name="price" min="0" step="0.01" required>
			<label for="description">Description:</label>
			<textarea id="description" name="description"></textarea>
			<input type="submit" name="add" value="Add Product">
		</form>
	</div>
    <main>
      <!-- Main content of the page goes here -->
    </main>
    <footer>
      <p>Copyright © 2023 Delivery Website</p>
    </footer>
  </body>
  <?php
// Connect to database
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "delivery_db";

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Add product to database
if (isset($_POST['add'])) {
	$type = mysqli_real_escape_string($conn, $_POST['type']);
	$price = mysqli_real_escape_string($conn, $_POST['price']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);

	$sql = "INSERT INTO product (type, price, description)
	VALUES ('$type', '$price', '$description')";

	if (mysqli_query($conn, $sql)) {
		echo "<script>alert('Product added successfully')</script>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
}
?>
</html>