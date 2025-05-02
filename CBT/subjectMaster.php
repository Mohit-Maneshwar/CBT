<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CBT";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    echo "<BR>Invalid Database or path";
}

// $subjectCode = $_POST['subjectCode'];
$subjectName = $_POST['subjectName'];

$sql = "INSERT INTO subjectmaster (subject_name) VALUES('$subjectName')";

if (mysqli_query($conn, $sql)) {
}
mysqli_close($conn);
?>