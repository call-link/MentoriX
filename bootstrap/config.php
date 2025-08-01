<?php


$conn = new mysqli("localhost", "root", "root", "MentoriX");

if ($conn->connect_errno) {
    echo "no";
    exit;
}
// echo "ok<br>";

$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();


$result = $stmt->get_result(); 
$rows = $result->fetch_all(MYSQLI_ASSOC); 


// echo "<pre>";
// print_r($rows);
// echo "</pre>";