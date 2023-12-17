<?php
ini_set('session.save_path', realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/../session'));
session_start();
if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
    header("Location: get_user_details.php");
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

// Fetch user details
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);


if (isset($_POST['logout'])) {
    // Destroy the session and redirect to the login page
    session_destroy();
    header("Location: adminLogin.php");
    exit();
}

// Close the connection (you can close it here since you have fetched the data)
mysqli_close($conn);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <style>
        /* Add your styles here */
    </style>
</head>

<body>
    <div class="card">
        <div class="card-header">
            <div class="table-responsive">
                <table id="userData" class="table">
                    <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Phone Number</th> <!-- Assuming 'password' is a column in your 'users' table -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr id='" . $row['username'] . "'>";
                                echo "<td>" . $row['username'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['phone'] . "</td>";
                                echo "<td><a href='delete_users.php?id=" . $row['id'] . "'>Delete</a></td>";
                                echo "<td><input type='checkbox' name='delete_ids[]' value='" . $row['id'] . "'></td>";
                                // echo "<td><a href='send_emails.php?id=" . $row['id'] . "'>Send Email</a></td>";
                                echo "</tr>";
                            }
                            mysqli_free_result($result);
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }
                        ?>
                    </tbody>
                </table>

                <form action="delete_users.php">
                    <button type="submit" name="delete_selected">Delete Selected</button>
                </form>

                <form action="send_emails.php" method="post">
                    <button type="submit" name="send_all_emails">Send Email to All Users</button>
                </form>
                <form action="" method="post">
                    <button type="submit" name="logout">Logout</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>