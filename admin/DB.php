<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coding_master";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit']))
{

    $title = $_POST['title'];
    $description = $_POST['description'];
    $about_image = $_POST['about_image'];
    $no_students = $_POST['no_students'];
    $no_courses = $_POST['no_courses'];
    $no_trainers = $_POST['no_trainers'];
    $no_events = $_POST['no_events'];

$sql = "INSERT INTO about (id, description , about_image, no_students, no_courses, no_trainers, no_events) VALUES ('$title', '$description', '$about_image', '$no_students', '$no_courses', '$no_trainers', '$no_events')";

}

if (mysqli_query($conn, $sql)) { //this is line 30
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>