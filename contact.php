<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contact</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/contact.css"/>
        <link rel="stylesheet" href="css/footer.css"/>
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
                <li><a href="account.php">Account Summary</a></li>
                <li><a href="eTransfer.php">E-Transfer</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div id="logout">
                <a href="myinfo.php">My Account</a> &nbsp;
                <a href="login.php">Logout</a>
            </div>
        </nav>
        <!-- Navigation end -->

        <header>
            <h1>Contact us</h1>
        </header>
        <!-- banner end -->

        <!-- Contact form start-->
        <section class="formbackground">
            <div class="banner">
                <h2><span class="attention">You want</span> help ?</h2>
                <p>Tell us your query, we will try to reach you as soon as possible.</p>
            </div>
            <div>
                <form class="contactform">
                    <div class="inputfield">
                        <input type="text" class="inputs" placeholder="Your Name" name="name" required>
                    </div>
                    <div class="inputfield">
                        <input type="text" class="inputs" placeholder="Your Email linked with Account number" name="email" required>
                    </div>
                    <div class="inputfield">
                        <textarea name="message" class="inputs" placeholder="Your Message" required></textarea>
                    </div>
                    <div class="button">
                        <input type="submit" class="submitbtn" value="Submit Details">
                    </div>
                </form>
            </div>
            <br>
            <div class="mydetails banner">
                <h3>Address :</h3>
                <ul>
                    <li><p>Conestoga College, waterloo, ON N2J 2W2</p></li>
                    <li><p>Call us : +1 (519) 885-0300</p></li>
                </ul>
            </div>
        </section>

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
  	 			<div class="socialMedia">
                    <a href="#"><img src="images/facebook.png" alt=""></a>
                    <a href="#"><img src="images/instagram.png" alt=""></a>
                    <a href="#"><img src="images/linkedin.png" alt=""></a>
                    <a href="#"><img src="images/twitter.png" alt=""></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
     <!-- footer end -->

    </body>
</html>