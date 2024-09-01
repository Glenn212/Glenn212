<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<header>
    <nav class="container">
        <div class="logo-box">
            <a href="home.html" target="_self">
                <img src="logo/logo-no-background.png" alt="MA-FUA" class="logo">
            </a>    
        </div>
        <div class="parent-link">
            <a href="home.php" class="social-links">Home</a>
            <a href="services.html" class="social-links">Services</a>
            <a href="about.html" class="social-links">About</a>
            <a href="contact.html" class="social-links">Contact</a>
        </div>
        <div class="icon">
            <a href="https://wa.me/254757394722" target="_blank" class="sm-icon">
                <!-- Corrected icon tag -->
                <i class="fa fa-whatsapp"></i>
            </a>
            <a href="" target="_blank" class="sm-icon">
                <i class="fa fa-icon-placeholder"></i> <!-- Replace with appropriate icon -->
            </a>
        </div>
        <div class="form">
            <form action="login_process.php" class="sub-form" method="post">
                <div class="upper-form">
                    <h2>Login</h2>
                    <input type="text" name="userName" placeholder="Username" required> <br>
                    <input type="password" name="password" placeholder="Enter Login Password" required><br>
                    <div class="btn">
                        <button type="submit">Login</button>
                    </div>
                    <?php
                    // Display success message if signup was successful
                    if (isset($_GET['signup']) && $_GET['signup'] === 'success') {
                        echo '<p style="color: green;">Signup successful! You can now log in.</p>';
                    }
                    ?>
                    <?php
                    // Display error message if login fails
                    if (isset($_GET['error']) && $_GET['error'] === 'invalidlogin') {
                        echo '<p style="color: red; text-align:center; width:70%; margin-inline:auto;">Invalid username or password. Please try again.</p>';
                    }
                    ?>
                </div>
                <div class="bottom-form">
                    <div class="no account">Do not have an account?</div>
                    <a href="signup.php" class="signup">Sign up</a>
                </div>
            </form>
        </div>
    </nav>
</header>
</body>
</html>
