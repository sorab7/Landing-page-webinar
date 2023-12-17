<?php
// Include the PHPExcel library
require 'databaseConfig.php';


// Fetch data from your MySQL table (replace "your_table" with your actual table name)
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

// Set headers for CSV download
header('Content-Type: text/csv');
header('Content-Disposition: attachment;filename="exported_data.csv"');
header('Cache-Control: max-age=0');

// Create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// Write the column headers to the CSV file
fputcsv($output, array('Column 1', 'Column 2', 'Column 3'));

// Loop through the MySQL result set and write data to the CSV file
while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($output, $row);
}

// Close the file pointer
fclose($output);

// Close the connection
mysqli_close($conn);
?>