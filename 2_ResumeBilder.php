<?php
// Database connection
$servername = "localhost";
$username = "root"; // Use your database username
$password = "";     // Use your database password
$dbname = "ResumeBuilder";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}

// Retrieve form data
$full_name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$linkedin = $_POST['linkedin'];
$website = $_POST['website'];
$education = $_POST['education'];
$experience = $_POST['experience'];
$projects = $_POST['projects'];
$skills = $_POST['skills'];
$hobbies = $_POST['hobbies'];

// Insert data into the database
$sql = "INSERT INTO resumes (full_name, email, phone, address, linkedin, website, education, experience, projects, skills, hobbies) 
        VALUES ('$full_name', '$email', '$phone', '$address', '$linkedin', '$website', '$education', '$experience', '$projects', '$skills', '$hobbies')";

if ($conn->query($sql) === TRUE) {
    echo "Resume data saved successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
