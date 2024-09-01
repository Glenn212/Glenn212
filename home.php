<?php
// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // User is logged in
    $username = $_SESSION['username'];
    $status = $_SESSION['status'];

    // Echo a welcome message
    echo "<h2 style='color: white;text-align:center;'>Welcome, $username!</h2>";
    echo "<p style='color: white; text-align:center;'>Your status: $status</p>";

    // You can display different content based on the user's status
    if ($status === 'user') {
        // Display user-specific content
        echo "<p style='color: white; text-align:center;'>This is the user dashboard.</p>";
    } elseif ($status === 'staff') {
        // Display staff-specific content
        echo "<p style='color: white; text-align:center;'>This is the staff dashboard.</p>";
    }

    // You can also provide links for different actions based on the user's status

    // Example logout link
    echo '<a href="login.php" style="color: white; text-align:center; display:block;">Logout</a>';
} else {
    // User is not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="">
    <title>MA-FUA Homepage</title>
    <link rel="stylesheet" href="home.css">
    <nav class="container">
        <div class="logo-box">
            <a href="home.html" target="">
                <img src="logo\logo-no-background.png" alt="MA-FUA" class="logo">
            </a>    
        </div>

        <div class="parent-link">
            <a href="login.php" class="social-links">Login</a>
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
</header>
<body>

</body>
</html>