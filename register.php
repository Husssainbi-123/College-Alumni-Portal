<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting form data with checks
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
    $register_no = isset($_POST['registerNo']) ? $_POST['registerNo'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : ''; // Consider hashing this
    $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
    $department = isset($_POST['department']) ? $_POST['department'] : '';
    $graduation_year = isset($_POST['graduationYear']) ? $_POST['graduationYear'] : '';
    $career_start = isset($_POST['careerStart']) ? $_POST['careerStart'] : '';
    $prev_work = isset($_POST['prevWork']) ? $_POST['prevWork'] : '';
    $designation = isset($_POST['designation']) ? $_POST['designation'] : '';
    $residence = isset($_POST['residence']) ? $_POST['residence'] : '';
    $facebook = isset($_POST['facebook']) ? $_POST['facebook'] : NULL;
    $linkedin = isset($_POST['linkedin']) ? $_POST['linkedin'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $feedback = isset($_POST['feedback']) ? $_POST['feedback'] : '';

    // New variable for roll
    $roll = "student";

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'test');
    if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }

    // Check if email or phone already exists
    $check_stmt = $conn->prepare("SELECT * FROM account WHERE `Email_ID` = ? OR `Mobile_Number` = ?");
    $check_stmt->bind_param("ss", $email, $phone);
    $check_stmt->execute();
    $result = $check_stmt->get_result();

    if ($result->num_rows > 0) {
        echo "This email or phone number is already registered.";
    } else {
        // Check if the image is uploaded
        if (isset($_FILES['image']) && $_FILES['image']['error'] == UPLOAD_ERR_OK) {
            $image_name = uniqid() . basename($_FILES["image"]["name"]);
            $upload_dir = "uploads/";
            $upload_file = $upload_dir . $image_name;

            // Move the uploaded file to the specified directory
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $upload_file)) {
                echo "Image uploaded successfully!";
            } else {
                die("Image upload error: Could not move the file.");
            }
        } else {
            die("Image upload error: No file was selected for upload or there was an upload error.");
        }

        // Prepare the insert statement
        $stmt = $conn->prepare("INSERT INTO account (`First_Name`, `Last_Name`, `Register_No`, `Email_ID`, `Password`, `Date_of_Birth`, `B_Tech_Department`, `Year_of_Pass_out`, `Started_Career_in`, `Previously_Worked_at`, `Present_Designation`, `Contact_Mailing_Address`, `Your_Facebook_Link`, `Your_LinkedIn_Link`, `Mobile_Number`, `Feedback`, `Upload_Image`, `Role`) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        if ($stmt) {
            // Bind parameters and execute
            $stmt->bind_param("sssssssiisssssssss", $firstname, $lastname, $register_no, $email, $password, $dob, $department, $graduation_year, $career_start, $prev_work, $designation, $residence, $facebook, $linkedin, $phone, $feedback, $image_name, $role);
            if ($stmt->execute()) {
                echo "Registration successful.";
            } else {
                echo "Error executing query: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error in preparing statement: " . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
}
?>
