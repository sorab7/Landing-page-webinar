<?php
session_start();

// Check if the admin is not logged in
if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header("Location: admin_login.php");
    exit();
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usertest";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted for multiple deletion
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_users'])) {
    $selected_users = isset($_POST['user_ids']) ? $_POST['user_ids'] : [];

    if (!empty($selected_users)) {
        // Construct a comma-separated string of user IDs for the SQL query
        $userIdsString = implode(',', $selected_users);

        // Perform the deletion query
        $sql = "DELETE FROM users WHERE id IN ($userIdsString)";

        if ($conn->query($sql) === TRUE) {

            $deletedUsers = count($selected_users);
            // echo count($selected_users) . " users deleted successfully.";
        } else {
            echo "Error deleting users: " . $conn->error;
        }
    }
}

// Fetch all users from the database
$result = $conn->query("SELECT * FROM users");
$users = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        nav {
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
            padding: 1em;
            background-color: #444;
            color: #fff;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        td input[type="checkbox"] {
            margin-right: 5px;
        }

        td img {
            max-width: 50px;
            max-height: 50px;
        }

        button {
            border-radius: 10px;
            margin-left: 10vw;
            background-color: #dc3545;
            color: #fff;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .btn-actions a {
            background-color: grey;
            padding: 10px 20px;
            text-decoration: none;
            color: white;
            border-radius: 10px;
            margin-left: 85vw;
            margin: 10px 10px;
        }

        button:hover {
            background-color: #c82333;
        }

        .btn-actions {

            display: flex;
            justify-content: flex-end;
            margin-right: 10vw;
        }
    </style>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="container">
    <div class="title" style="text-align: center;">
        <h2>Welcome to the Admin Panel</h2>
    </div>
    <div class="container btn-actions">
        <a href="export_data.php" class="btn btn-primary">Download CSV File</a>
        <a href="logout.php">Logout</a>
    </div>


    <!-- Form with a unique ID for deletion -->
    <form method="post" action="" id="deleteUsersForm">
        <button type="submit" onclick="confirmDelete()" name="delete_users">Delete Selected Users</button>
        <table>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Photo</th>
            </tr>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><input type="checkbox" name="user_ids[]" value="<?php echo $user['id']; ?>"></td>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['number']; ?></td>
                    <td><?php echo $user['photo']; ?></td>
                    <td><img src="<?php echo $user['photo']; ?>" alt="User Photo" style="max-width: 50px; max-height: 50px;"></td>
                    <td><a href="<?php echo $user['photo']; ?>" target="_blank">View</a></td> <!-- View button for the user's photo -->
                </tr>
            <?php endforeach; ?>
        </table>
    </form>
    <form id="sendMailForm" action="send_emails.php" method="post">
        <button type="button" id="sendMailButton">Send Mail</button>
    </form>




    <script>
        document.getElementById('sendMailButton').addEventListener('click', function() {
            // Use AJAX to trigger the PHP file
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'send_emails.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Display the response from the PHP file
                    console.log(xhr.responseText);
                }
            };
            xhr.send();
        });
    </script>
</body>

</html>