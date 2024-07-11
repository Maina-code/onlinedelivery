
<DOCTYPE html>
<html>
    <head>
        <title>login</title>
        <link rel="stylesheet" href="css/style2.css">
    </head>
<body>
<div class ="mlinks">
    <li><a href="index.php">Home</a></li>
    <li><a href="about.html">About us</a></li>
    <li><a href="service.html">Our services</a></li>
    <li><a href="signup.php">Sign Up</a></li>
    <li><a href="login.php" class="active">Log In</a></li>

</div>
    <div class ="mform">
    <h1 style ="color: blue;">Log In</h1>
        <form method="POST" action="">
        <label> Email: </label>
        <input type = "email"class="box" placeholder="Your email address" name="email" required><span class ="req">*</span><br><br>
        <label> Password: </label>
        <input type ="password" class="box" placeholder="Enter your password" name="password" required><span class ="req">*</span><br><br>

        <button name="send_info"> Log in</button>
        <P>Don't you have an account? <a href="signup.php">Sign Up</a></p>
        </form>
    </div>
</body>
<?php
$dbhost="localhost";
$dbuser= "root";
$dbpassword="";
$dbname="delivery_db";
$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);	

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        //session_start();

        
        $email = $_POST['email'];
        $password = $_POST['password'];
       
        $query = "SELECT * FROM details WHERE email='$email' AND password='$password'";
        $result = mysqli_query($connection, $query);

        if($result && mysqli_num_rows($result) > 0){
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;

            if (!$result) {
                echo "please enter a valid credentials";

            } else {
               echo "welcome";
              // header('Location: index.php');
             // header("Location: home.php");
            }

        }

        
    


}
?>

</html>