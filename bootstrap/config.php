<?php


$conn = new mysqli("localhost","root", "root", "MentoriX");

if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    exit ;
}
// echo "Connected successfully";