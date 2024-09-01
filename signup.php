<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css">
    <script>
        function confirmSignUp() {
            document.getElementById("confirmationDialog").style.display = "block";
        }

        function setUserStatus(isMafuaUser) {
            if (isMafuaUser) {
                // If the user is a MA-FUA user, set the value of the hidden input field to 1
                document.getElementById("mafuaUser").value = 1;
            } else {
                // If the user is not a MA-FUA user, set the value of the hidden input field to 0
                document.getElementById("mafuaUser").value = 0;
            }
            // Submit the form
            document.getElementById("signupForm").submit();
        }
    </script>
    <style>
        .confirmation-dialog {
            position: fixed;
            top: 40%;
            left: 40%;
            width: 40%;
            height: 50%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent black background */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .confirmation-dialog-box {
            background-color: white;
            border: 1px solid #ccc;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .confirmation-message {
            margin-bottom: 10px;
        }

        .confirmation-buttons button {
            margin-right: 10px;
        }
    </style>
</head>
<body>
<header>
    <link rel="stylesheet" href="signup.css">
    <nav class="container">
        <div class="logo-box">
            <a href="home.html" target="">
                <img src="logo\logo-no-background.png" alt="MA-FUA" class="logo">
            </a>    
        </div>
        <div class="parent-link">
            <a href="home.html" class="social-links">Home</a>
            <a href="services.html" class="social-links">Services</a>
            <a href="about.html" class="social-links">About</a>
            <a href="contact.html" class="social-links">Contact</a>
        </div>
        <div class="icon">
            <a href="logo\WhatsApp_icon.png" target="https://wa.me/254757394722" class="sm-icon">
                <icon-icon name="logo-whatsapp"></icon-icon>
            </a>
            <a href="" target="_blank" class="sm-icon">
                <icon-icon name=""></icon-icon> 
            </a>
        </div>
    </div>
    <div class="form">
        <form id="signupForm" action="signup_process.php" class="sub-form" method="post">
            <div class="upper-form">
                <h2>Sign Up</h2>
                <input type="text" name="fullname" placeholder="Enter your full name" required><br>
                <input type="email" name="email" placeholder="Enter Email" required><br>
                <input type="tel" name="phone" placeholder="Enter Mobile Number" required><br>
                <input type="password" name="password" placeholder="Create Password" pattern=".{8,}" required>
                <p>Password must be at least 8 characters</p><br>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required> <br>
                <!-- Hidden input field to store the value of whether the user is a MA-FUA user or not -->
                <input type="hidden" id="mafuaUser" name="mafuaUser" value="0">
                <div class="btn">
                    <!-- Call the JavaScript function on button click to confirm signup -->
                    <button type="button" onclick="confirmSignUp()">Sign Up</button>
                </div>
            </div>
            <div class="bottom-form">
                <div class="yes account">Already have an account?</div>
                <a href="login.php" class="login">Login</a>
            </div>
        </form>
        <?php
            // Display error message if there was an SQL error during signup
            if (isset($_GET['error']) && $_GET['error'] === 'sqlerror') {
                echo '<p style="color: red;">An error occurred during signup. Please try again later.</p>';
            }
        ?>
    </div>
</nav>
</header>
<!-- Confirmation Dialog -->
<div id="confirmationDialog" class="confirmation-dialog" style="display: none;" >
    <div class="confirmation-dialog-box">
        <div class="confirmation-message">Are you a MA-FUA user?</div>
        <div class="confirmation-buttons">
            <button onclick="setUserStatus(true)">Yes</button>
            <button onclick="setUserStatus(false)">No</button>
        </div>
    </div>
</div>

</body>
</html>
