<?php


// Assuming you have a database connection established
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve data from the POST request
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    // You may want to validate and sanitize the data before inserting it into the database

    // Check if the email already exists in the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "usertest";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
        // Retrieve data from the POST request
        $phoneNumberStep2 = $_POST['phone_step2']; // Phone number from step 2
        $photo = ''; // Initialize the photo variable
    
        // You may want to validate and sanitize the data before using it
    
        // Check if the phone number from step 2 exists in the database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "usertest";
    
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        $sql = "SELECT * FROM users WHERE number = '$phoneNumberStep2'";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // Phone number found in the database
            $row = $result->fetch_assoc();
            $photo = $row['photo'];
        } else {
            // Phone number not found in the database
            echo "Phone number not found in the database.";
            $conn->close();
            exit;
        }
        
        // Now, $photo contains the photo path associated with the given phone number
    
        // Handle file upload
        if (!empty($_FILES["photo"]["tmp_name"]) && is_uploaded_file($_FILES["photo"]["tmp_name"])) {
            // Handle the photo upload
            $targetDir = "uploads/"; // Change this to your desired upload directory
            $targetFile = $targetDir . basename($_FILES["photo"]["name"]);
    
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
                // Update the photo path in the database
                $sqlUpdate = "UPDATE users SET photo = '$targetFile' WHERE number = '$phoneNumberStep2'";
    
                if ($conn->query($sqlUpdate) === TRUE) {
                    echo "Photo uploaded successfully!";
                } else {
                    echo "Error updating photo: " . $conn->error;
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "File upload failed.";
        }
        $conn->close();

    }

    ?>