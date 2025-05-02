<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CBT";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("<br>Connection failed: " . mysqli_connect_error());
}

// Get data from form
$question_bank_code = $_POST['question_bank_code'];
$subject = $_POST['subject'];
$pepper_setter = $_POST['pepper_setter'];

// Prepare statement
$stmt = $conn->prepare("INSERT INTO QuestionBankMaster (question_bank_code, subject, pepper_setter) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $question_bank_code, $subject, $pepper_setter);

// Execute
if ($stmt->execute()) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Close
$stmt->close();
$conn->close();
?>
