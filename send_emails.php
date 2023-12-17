<?php

// Function to send an email using the mail() function
function sendEmail($to, $subject, $message) {
    $headers = "From: meghrajlondhe000@gmail.com\r\n";
    $headers .= "Reply-To: your_email@example.com\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    return mail($to, $subject, $message, $headers);
}

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch all user emails
$query = "SELECT email FROM users";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    // Replace these values with your email content
    $subject = "Subject of your email";
    $message = "Body of your email";

    while ($row = mysqli_fetch_assoc($result)) {
        $to = $row['email'];
        // Send email to each user
        $success = sendEmail($to, $subject, $message);

        if ($success) {
            echo "Email sent successfully to " . $to . "<br>";
        } else {
            echo "Error sending email to " . $to . "<br>";
        }
    }
} else {
    echo "No users found";
}

// Close the connection
mysqli_close($conn);
?>
