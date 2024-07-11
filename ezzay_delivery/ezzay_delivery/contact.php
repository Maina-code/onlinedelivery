<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .mlinks li {
        list-style-type: none;
        float:left;
        padding:15px;
        padding-left: 20px;
        text-decoration: none;
        /* text-align: right; */
      
       
       
    }
    .mlinks{
        background-color: rgba(16, 2, 224, 0.846);
        width: 100%;
        height: 80px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        
    }
    li a {
        color: white;
        font-size: large;
        text-decoration: none;
        padding: 0.5rem 1rem;
        border-radius: 3px;
        transition: all 0.3s ease-in-out;
    
    
    }
    
    .active{
            background-color: #fff;
            color: #333;
    }
    li a:hover {
        background-color: #fff;
        color: #333;
    }
    * {
        box-sizing: border-box;
      }
      
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
      }
      
      .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }
      
      h1 {
        text-align: center;
        margin-bottom: 20px;
      }
      
      form {
        display: flex;
        flex-direction: column;
      }
      
      label {
        margin-bottom: 5px;
      }
      
      input,
      textarea, 
      button {
        padding: 10px;
        margin-bottom: 20px;
        border: none;
        border-radius: 5px;
      }
      
      button[name="submit"] {
        background-color: blue;
        color: #fff;
        font-weight: bold;
        cursor: pointer;
      }
      
      input[type="submit"]:hover {
        background-color: blue;
      }
      .social-media {
        margin-top: 20px;
      }
      
      .social-media h3 {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
      }
      
      .social-media ul {
        list-style: none;
        margin: 0;
        padding: 0;
      }
      
      .social-media ul li {
        display: inline-block;
        margin-right: 10px;
      }
      
      .social-media ul li a {
        display: block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 50%;
        text-align: center;
        background-color: blue; /* change the background color according to your social media platform */
        color: #fff;
        transition: all 0.3s ease;
      }
      
      .social-media ul li a:hover {
        transform: translateY(-5px);
      }
      
      .social-media ul li a i {
        font-size: 20px;
      }
    </style>
  </head>
  <body>
    <div class ="mlinks">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About us</a></li>
        <li><a href="service.php">Our services</a></li>
        <li><a href="contact.php"class= "active">Contact us</a></li>
        <li><a href="signup.php">sign up</a></li>
        <li><a href="login.php">Log In</a></li>
    
    </div>
    <div class="container">
      <h1>Send us your problem</h1>
      <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <button type="submit" name="submit"> Submit</button>
      </form>
    </div>
    <div class="social-media">
        <h3>Follow Us</h3>
        <ul>
          <li><a href="https://www.facebook.com/YourPage"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/@BrianMa47871255"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://www.instagram.com/YourPage"><i class="fa fa-instagram"></i></a></li>
          <li><a href="https://www.linkedin.com/in/YourPage"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
  </body>
  <?php
  if (filter_has_var(INPUT_POST, 'submit')){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(!empty($email)&& !empty($name)&& !empty($message)){

      if(filter_var($email, FILTER_VALIDATE_EMAIL)=== false ){
        $msg = "Please enter a valid email address";
        $msgclass = 'alert alert-danger';
      } else{
        $toEmail = 'mainabrian038@gmail.com';
        $subject = 'Contact Request From'.$name;
        $body = '<h3>Contact Request </h3>
            <h4>Name</h4><p>'.$name.'</p>
            <h4>Email</h4><p>'.$email.'</p>
            <h4>Name</h4><p>'.$message.'</p>
        ';
        $headers = "MIME-Version: 1.0" ."\r\n";
        $headers .= "Content-Type:/html; charset=UTF-8"."\r\n";

        $headers .= "From:" .$name. "<".$email.">"."\r\n";

        if (mail($toEmail,$subject, $body, $headers)){

          $msg = 'Your email has been sent';
          $msgClass = 'alert-success';


        }else{

        }
        
            
      }
    }else{
      $msg = 'Please fill in all fields';
      $msgClass = 'alert-danger';
    }
  }
  ?>
</html>