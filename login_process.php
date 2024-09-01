<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "mafua"; // Replace with your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    // Check if the user exists in the users table
    $sql = "SELECT * FROM users WHERE full_name = '$userName'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // User exists in the users table
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // Set session variables
            session_start();
            $_SESSION['username'] = $userName;
            $_SESSION['status'] = 'user'; // Set user status

            // Redirect to homepage
            header("Location: home.php");
            exit();
        }
    }

    // Check if the user exists in the staff table
    $sql = "SELECT * FROM mafuatable WHERE full_name = '$userName'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // User exists in the staff table
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // Set session variables
            session_start();
            $_SESSION['username'] = $userName;
            $_SESSION['status'] = 'mafua'; // Set staff status

            // Redirect to homepage
            header("Location: home.php");
            exit();
        }
    }

    // Redirect back to login page with error message if login fails
    header("Location: login.php?error=invalidlogin");
    exit();
} else {
    // Redirect to the login page if accessed directly without form submission
    header("Location: login.php");
    exit();
}

// Close the database connection

?>
