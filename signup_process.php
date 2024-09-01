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
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $password = $_POST['password'];
    $mafuaUser = isset($_POST['mafuaUser']) ? intval($_POST['mafuaUser']) : 0; // Retrieve and sanitize the value of mafuaUser

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL query based on mafuaUser value
    if ($mafuaUser == 1) {
        // Insert data into the mafua_users table
        $sql = "INSERT INTO mafuatable (full_name, email, mobile_number, password) VALUES (?, ?, ?, ?)";
    } else {
        // Insert data into the casual_users table
        $sql = "INSERT INTO users (full_name, email, mobile_number, password) VALUES (?, ?, ?, ?)";
    }

    // Prepare statement
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ssss", $fullname, $email, $phone, $hashed_password);

        // Execute statement
        if (mysqli_stmt_execute($stmt)) {
            // Redirect to the login page with success message
            header("Location: login.php?signup=success");
            exit();
        } else {
            // Redirect to the signup page with error message if insertion fails
            header("Location: signup.php?error=sqlerror");
            exit();
        }

        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        // Redirect to the signup page with error message if SQL preparation fails
        header("Location: signup.php?error=sqlerror");
        exit();
    }
} else {
    // Redirect to the signup page if accessed directly without form submission
    header("Location: signup.php");
    exit();
}

// Close the database connection
mysqli_close($conn);
?>
