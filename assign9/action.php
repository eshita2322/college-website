<?php
// Establishing a connection to MySQL database
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Creating a new database
$sql = "CREATE DATABASE hotel_booking";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
<?php

// Define the database connection details
$servername = "localhost";
$username = "yourusername";
$password = "yourpassword";
$dbname = "yourdatabasename";

// Create a new connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the form inputs and store them in variables
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip_code = $_POST['zip_code'];
$phone_number = $_POST['phone_number'];
$email_address = $_POST['email_address'];
$checkin_date = $_POST['checkin_date'];
$checkin_time = $_POST['checkin_time'];
$checkout_date = $_POST['checkout_date'];
$checkout_time = $_POST['checkout_time'];
$room_type = $_POST['room_type'];
$adults = $_POST['adults'];
$children = $_POST['children'];

// Prepare the SQL statement to insert the form data into the database
$sql = "INSERT INTO hotel_booking (first_name, last_name, address, city, state, zip_code, phone_number, email_address, checkin_date, checkin_time, checkout_date, checkout_time, room_type, adults, children)
VALUES ('$first_name', '$last_name', '$address', '$city', '$state', '$zip_code', '$phone_number', '$email_address', '$checkin_date', '$checkin_time', '$checkout_date', '$checkout_time', '$room_type', '$adults', '$children')";

// Execute the SQL statement and check if it was successful
if (mysqli_query($conn, $sql)) {
    echo "Booking submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);



?>
