<?php

session_start();

if(!isset($_SESSION))
{
    header('location:account.php');
}
else if(isset($_POST['submit']))
{
    $_SESSION['mobileError'] = "";
    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $name = $_POST['username'];
        $password = $_POST['password'];
        $passwordCount = strlen($password);
        if(preg_match("/^[a-zA-Z-' ]*$/",$name))
        {
            if($passwordCount <= 8)
            {
                $_SESSION['name'] = $name;
                $_SESSION['expire'] = time() + (30*60);
            }
        }
    }
    else{
        $_SESSION['nameError'] = "Please, enter username or password !!";
        header("Refresh:0");
    }

    if($_SESSION['name'] != null)
    {
        header('location:account.php');
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
                <li><a href="account.php">My Account</a></li>
                <li><a href="eTransfer.php">E-Transfer</a></li>
                <li><a href="contact.php">Contact us</a></li>
            </ul>
            <div id="logout">
                <a href=""></a>
            </div>
        </nav>
        <!-- Navigation end -->

        <!-- banner / Heading start -->
        <header class="banner">
            <div class="bankLogo">
                <img src="images/logo.png" alt="">
            </div>
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
                    <input type="password" name="password" id="password" placeholder="Enter Password" required>
                </div>
                <span id="mobile_error"></span>
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
  	 			<h4>Conestoga Bank</h4>
  	 			<p>Conestoga Bank is providing the best banking service for sending money or other finincial services.</p>
  	 		</div>
  	 		<div class="col">
  	 			<h4>Services</h4>
  	 			<ul>
  	 				<li><a href="#">Banking</a></li>
  	 				<li><a href="#">Offers</a></li>
  	 				<li><a href="#">Interact</a></li>
  	 				<li><a href="#">Transaction status</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="col">
  	 			<h4>Contact</h4>
  	 			<ul>
  	 				<li><a href="#">contact@cBank.com</a></li>
  	 				<li><a href="#">+1 519 000 0000</a></li>
                    <li><a href="#">FAQ</a></li>
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