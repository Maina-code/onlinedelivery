
<!DOCTYPE html>
<html>
    <head>
        <title>Ezzay Delivery</title>
        <link rel="stylesheet" href="style.css">
        
    </head>
<body>
<div class ="mlinks">
    <li><a href="index.html"class="active">Home</a></li>
    <li><a href="about.html">About us</a></li>
    <li><a href="service.php">Our services</a></li>
    <li><a href="contact.php">Contact us</a></li>
    <li><a href="signup.php">sign up</a></li>
    <li><a href="login.php">Log In</a></li>

</div>

<div class="video">
    <video autoplay loop muted id = "myvideo">
        <source src ="images/vid.mp4" type ="video/mp4" >
    </video>
</div> 
<div>
    <h4 style ="color: white; font-size: 16px;">Welcome, user please login</h4>
</div>
<div class="container">
    <h1 style="color:white;">Delivery Tracking</h1>
    <form method ="POST" action="">
        <label style="color:white;" for="tracking-number">Enter Your Tracking Number:</label>
        <input type="text" id="tracking-number" name="tracking_number" placeholder="Enter your tracking number">
        <input type="submit" value="Track">
    </form>
    <div class="tracking-results">
        <p>Delivery Status: <span id="status">Pending</span></p>
        <p>Estimated Delivery Date: <span id="delivery-date">N/A</span></p>
        <p>Delivery Address: <span id="delivery-address">N/A</span></p>
        <p>Current Location: <span id="current-location">N/A</span></p>
    </div>
</div>
<div class="mhead">
    <h3>STRUGGLE NO MORE JUST REQUEST!</h3>
    <p>our services are delivering you items to the desired destionation.</p>
</div>
<div class ="mcontent">
    <h4 style="margin-bottom: 30px; padding-bottom: 20px;">About us</h4>
    <p >Eazzy delivery have been a trustworthy company it has being trusted<br>
    all over the world. our purpose is to delivery good to people to their <br>
    own choice of destionation to ease movement of the people using public vehicles.<br>
    </p>
    <button> <a href="about.html">learn more..</button>
</div>
<div class="hero-section">
    <h1>Fast Delivery, Great Taste</h1>
    <p>Order your favorite food and drinks now and we'll deliver it to your doorstep in no time!</p>
    <button><a href="login.php">Order Now</a></button>
  </div>

  <div class="menu-section">
    <h2>Our Menu</h2>
    <p>Check out our mouth-watering menu and order your favorites now!</p>
    <button><a href="services.php">View Menu</button>
  </div>

  <div class="contact-us-section">
    <h2>Contact Us</h2>
    <p>Got a question or feedback? We'd love to hear from you!</p>
    <button> <a href ="contact.php">Contact Us</button>
  </div>
<footer>
    <p>&copy; 2023 Ezzay Delivery Website. All rights reserved.</p>
</footer>
</body>
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "delivery_db";

$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
$pdo = new PDO('mysql:host=localhost;dbname=delivery_db', 'root', '');


if (isset($_POST['submit'])) {
    $tracking_number = $_POST['tracking_number'];

    
    $stmt = $connection->prepare('SELECT * FROM track WHERE tracking_number = ?');
    $stmt->execute([$tracking_number]);
    $tracking_info = $stmt->fetch(PDO::FETCH_ASSOC);

    // Display the tracking information
    if ($tracking_info) {
        echo '<h2>Tracking information for ' . $tracking_number . ':</h2>';
        echo '<p>Current status: ' . $tracking_info['status'] . '</p>';
        echo '<p>Estimated delivery date: ' . $tracking_info['delivery_date'] . '</p>';
        echo '<p>Shipping carrier: ' . $tracking_info['carrier'] . '</p>';
    } else {
        echo "<script> alert('Sorry, no tracking information found for') ' . $tracking_number . '.</script>";
    }
    }


?>
</html>