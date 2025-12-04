<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$Name= $_POST['name'];
$Email= $_POST['email'];
$Messege= $_POST['messege'];



$conn = new mysqli('localhost', 'root', 'test', '');


if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
$sql = "INSERT INTO registration (name, email, messege,)
        VALUES (?, ?, ?, )";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $Name, $Email, $Messege,);
if ($stmt->execute()) {
    echo "Registration saved successfully!";
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>