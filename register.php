<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/register.css"/>
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
            <form method="post" name="loginForm" onsubmit="return validateLogin()">
                <label id="grettings" class="grettings"></label>
                <div>
                    <input type="text" name="name" id="name" placeholder="Enter Your FullName">
                </div>
                <label class="errors" id="name_error"></label>
                <div>
                    <input type="text" name="email" id="email" placeholder="Enter Email">
                </div>
                <label class="errors" id="email_error"></label>
                <div>
                    <input type="text" name="mobile" id="mobile" placeholder="Enter Mobile (+1 XXX XXXX XXXX)">
                </div>
                <label class="errors" id="mobile_error"></label>
                <div>
                    <input type="text" name="username" id="username" placeholder="Enter Username">
                </div>
                <label class="errors" id="name_error"></label>
                <label id="name_error" class="err"></label>
                <div>
                    <input type="password" name="password" id="password" placeholder="Enter New Password">
                </div>
                <label id="newpassword_error" class="err"></label>
                <div>
                    <input type="password" name="cpassword" id="cpassword" placeholder="Enter Confirm Password">
                </div>
                <label id="cpassword_error" class="err"></label>
                <div>
                    <input type="submit" name="submit" class="submit_btn" value="Register">
                </div>
                <br>
                <div>
                    <a href="login.php" class="registerLink">Already have an Account ? Login here</a>
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