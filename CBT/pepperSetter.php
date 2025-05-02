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
$pepper_setter_id = $_POST['pepper_setter_id'];
$pepper_setter_name = $_POST['pepper_setter_name'];
// echo $pepper_setter_id;
// echo $pepper_setter_name;

$sql = "INSERT INTO pepperSetter VALUES('$pepper_setter_id','$pepper_setter_name')";

if (mysqli_query($conn, $sql)) {
}
mysqli_close($conn);
?>