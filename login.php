<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/footer.css" />
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
                <li>
                    <marquee><a>Welcome to Conestoga Bank</a></marquee>
                </li>
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
            <marquee>
                <p id="message"></p>
            </marquee>
            <div class="userform">
                <form method="post" name="loginForm" onsubmit="return validateLogin()">
                    <div>
                        <input type="text" name="username" id="username" placeholder="Enter Username">
                    </div>
                    <label id="name_error" class="err"></label>
                    <label class="errors" id="name_error"></label>
                    <div>
                        <input type="password" name="password" id="password" placeholder="Enter Password">
                    </div>
                    <label id="password_error" class="err"></label>
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
                    <p>Conestoga Bank is providing the best banking service for sending money or other finincial
                        services.</p>
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
<script>
    displayWelcomeMessage();
</script>

</html>