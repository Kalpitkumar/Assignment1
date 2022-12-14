<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>eTransfer</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/eTransfer.css"/>
        <link rel="stylesheet" href="css/footer.css"/>
        <script type="text/javascript" src="js/eTransfer.js"></script>
    </head>
    <body>
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
            <div class="background_Account">
                <b>Deposit Accounts(1)</b>
                <div class="accounts">
                    <div class="details">
                        <div>
                            <b>Chequing</b>
                            <p class="special">74582630</p>
                        </div>
                        <div>
                            <h2 id="amount">$ 5,000.00 ></h2>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="background">
                <div class="userform">
                <form method="post" name="transferForm" onsubmit="return validateTransfer()">
                    <div>
                        <input type="text" name="username" id="username" placeholder="Payee Name" required>
                    </div>
                    <span id="name_error"></span>
                    <label class="errors" id="name_error"></label>
                    <div>
                        <input type="email" name="email" id="email" placeholder="E-Mail Address" required>
                    </div>
                    <div>
                        <input type="text" name="Phone_number" id="number" placeholder="Phone number" required>
                    </div>
                    <div>
                        <input type="text" name="question" id="question" placeholder="Interac Question" required>
                    </div>
                    <div>
                        <input type="text" name="answer" id="answer" placeholder="Interac Answer" required>
                    </div>
                    <div>
                        <input type="number" name="amount" id="amount" placeholder="amount" required>
                    </div>
                    <span id="mobile_error"></span>
                    <div>
                        <input type="submit" name="submit" class="submit_btn" value="Send Money">
                    </div>
                </form>
                </div>
            </div>

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