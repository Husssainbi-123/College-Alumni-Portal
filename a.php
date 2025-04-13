<?php
// Start session to track user login
session_start();

// Get the login details from the form
$email = $_POST['email'];
$password = $_POST['password'];

// Create a connection to the database
$conn = new mysqli('localhost', 'root', '', 'test');

// Check if connection was successful
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
} else {
    // Prepare the query to check if the user exists
    $stmt = $conn->prepare("SELECT * FROM registration WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // If a user with the given email exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Verify the password using password_verify
        if (password_verify($password, $row['password'])) {
            // If password is correct, redirect to the home page
            $_SESSION['email'] = $email; // Store user email in session
            header("Location: home.php");
            exit();
        } else {
            // If password is incorrect
            echo "Invalid password.";
        }
    } else {
        // If no user with the given email exists
        echo "You are not registered.";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
