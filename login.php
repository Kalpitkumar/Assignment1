<?php

session_start();

if(!isset($_SESSION))
{
    header('location:men.php');
}
else if(isset($_POST['submit']))
{
    $_SESSION['mobileError'] = "";
    if(isset($_POST['username']))
    {
        $name = $_POST['username'];
        if(preg_match("/^[a-zA-Z-' ]*$/",$name))
        {
            $_SESSION['name'] = $name;
            $_SESSION['expire'] = time() + (30*60);
        }else{
            $_SESSION['nameError'] = "Special Characters are not allowed !!";
            header("Refresh:0");
        }
    }
    else{
        $_SESSION['nameError'] = "Please, enter username !!";
        header("Refresh:0");
    }
    
    if(isset($_POST['mobile']))
    {
        $mobile = $_POST['mobile'];
        if(preg_match("/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/",$mobile))
        {
            $_SESSION['mobile'] = $mobile;
            $_SESSION['expire'] = time() + (30*60);
            $_SESSION['mobileError'] = "";
        }else{
            $_SESSION['mobileError'] = "Please, Follow the format (xxx-xxx-xxxx) !!";
            header("Refresh:0");
        }
    }
    
    if(isset($_POST['address']))
    {
        $address = $_POST['address'];
        $_SESSION['address'] = $address;
        $_SESSION['expire'] = time() + (30*60);
    }else{
        $_SESSION['addressError'] = "Please, fill the address !!";
        header("Refresh:0");
    }

    if($_SESSION['name'] != null && $_SESSION['mobile'] != null && $_SESSION['address'] != null)
    {
        header('location:men.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/login.css"/>
        <script type="text/javascript" src="js/validation.js"></script>
    </head>
    <body>
        
    <!-- main body start -->
    <main>
        <!-- Navigation Start -->
        <nav class="navigation">
            <a href="#">
                <img src="images/logo.png" alt="">
            </a>
            <ul id="navbar">
                <li><a href="men.php">Men</a></li>
                <li><a href="women.php">Women</a></li>
                <li><a href="kids.php">Kids</a></li>
            </ul>
            <div id="logout">
                <a href=""></a>
            </div>
        </nav>
        <!-- Navigation end -->

        <!-- banner / Heading start -->
        <header class="banner">
            <h1>Conestoga <strong>Bank</strong></h1>
            <p>MANAGE YOUR FINANCE AND SEND MONEY !</p>
        </header>
        <!-- banner / Heading end -->

        <div class="background">
            <div class="userform">
            <form method="post" onsubmit="validate()">
                <div>
                    <input type="text" name="username" id="username" placeholder="Enter Username" required>
                </div>
                <span id="name_error"></span>
                <label class="errors" id="name_error"><?php if(isset($_SESSION['nameError']) != null){ echo $_SESSION['nameError']; } ?></label>
                <div>
                    <input type="text" name="mobile" id="mobile" placeholder="Enter Phone number (xxx-xxx-xxxx)" required>
                </div>
                <span id="mobile_error"></span>
                <label class="errors"><?php if(isset($_SESSION['mobileError']) != null){ echo $_SESSION['mobileError']; } ?></label>
                <div>
                    <input type="text" name="address" id="address" placeholder="Enter Address" required>
                </div>
                <span id="address_error"></span>
                <label class="errors"><?php if(isset($_SESSION['addressError']) != null){ echo $_SESSION['addressError']; } ?></label>
                <div>
                    <input type="submit" name="submit" class="submit_btn" value="Login">
                </div>
            </form>
            </div>
        </div>

    </main>
    <!-- main body end -->

    <!-- footer start -->
    <footer class="footer">
  	 <div class="footerContainer">
  	 	<div class="row">
  	 		<div class="col">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 				<li><a href="#">affiliate program</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="col">
  	 			<h4>get help</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">shipping</a></li>
  	 				<li><a href="#">returns</a></li>
  	 				<li><a href="#">order status</a></li>
  	 				<li><a href="#">payment options</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="col">
  	 			<h4>online shop</h4>
  	 			<ul>
  	 				<li><a href="#">watch</a></li>
  	 				<li><a href="#">bag</a></li>
  	 				<li><a href="#">shoes</a></li>
  	 				<li><a href="#">dress</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
     <!-- footer end -->

    </body>
</html>