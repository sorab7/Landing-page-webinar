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

    $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($checkEmailQuery);

    if ($result->num_rows > 0) {
        // Email already exists, handle accordingly (update or show an error)
        echo "Error: Email already exists.";
        $conn->close();
        exit;
    }

    // Email doesn't exist, proceed with the insertion

    // Check if the number already exists in the database
    $checkNumberQuery = "SELECT * FROM users WHERE number = '$number'";
    $resultNumber = $conn->query($checkNumberQuery);

    if ($resultNumber->num_rows > 0) {
        // Number already exists, handle accordingly (update or show an error)
        echo "Error: Number already exists.";
        $conn->close();
        exit;
    }

    // Number doesn't exist, proceed with the insertion
    $sql = "INSERT INTO users (name, email, number) VALUES ('$name', '$email', '$number')";

    if ($conn->query($sql) === TRUE) {
        echo "Registered successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }




   
        
       
    
   
    





    $conn->close();

    }




?>
