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
    $stmt = $conn->prepare("SELECT * FROM account WHERE `Email_ID` = ?");
    
    // Check if the statement prepared successfully
    if ($stmt === false) {
        die("Error in preparing statement: " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // If a user with the given email exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Verify the password (consider hashing passwords for security)
        if ($password === $row['Password']) {  // Direct comparison of plain text passwords
            // Store user details in session
            $_SESSION['email'] = $email;
            $_SESSION['firstname'] = $row['First_name']; // Ensure this is correctly set
            $_SESSION['lastname'] = $row['Last_Name'];
            $_SESSION['register_no'] = $row['Register_No'];
            $_SESSION['dob'] = $row['Date_of_Birth'];
            $_SESSION['department'] = $row['B_Tech_Department'];
            $_SESSION['graduation_year'] = $row['Year_of_Pass_out'];
            $_SESSION['career_start'] = $row['Started_Career_in'];
            $_SESSION['prev_work'] = $row['Previously_Worked_at'];
            $_SESSION['designation'] = $row['Present_Designation'];
            $_SESSION['residence'] = $row['Contact_Mailing_Address'];
            $_SESSION['facebook'] = $row['Your_Facebook_Link'];
            $_SESSION['linkedin'] = $row['Your_LinkedIn_Link'];
            $_SESSION['phone'] = $row['Mobile_Number'];
            $_SESSION['feedback'] = $row['Feedback'];
            $_SESSION['image'] = $row['Upload_Image']; // Store image path

            // Redirect based on user role
            if ($row['role'] === 'student') {
                header("Location: web/index.php"); // Redirect to student dashboard
            } elseif ($row['role'] === 'admin') {
                header("Location: web/Admin.php"); // Redirect to admin dashboard
            } else {
                echo "Invalid user role.";
            }
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
