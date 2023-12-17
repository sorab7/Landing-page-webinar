<?php
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

// Fetch user details
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_selected'])) {
    // Get the array of selected user IDs
    $delete_ids = isset($_POST['delete_ids']) ? $_POST['delete_ids'] : [];

    // Validate and sanitize the IDs (optional, depending on your needs)

    // Loop through the selected IDs and delete users
    foreach ($delete_ids as $id) {
        $sql = "DELETE FROM users WHERE id = '$id'";
        mysqli_query($conn, $sql);
        // Handle errors or log successful deletions if needed
    }

    // Redirect or display a message after deletion
    header("Location: get_user_details.php");
    exit();
}

// Close the connection
mysqli_close($conn);

?>