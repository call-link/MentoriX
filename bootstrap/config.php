<?php


$conn = new mysqli("localhost", "root", "root", "MentoriX");

if ($conn->connect_errno) {
    echo "no";
    exit;
}
// echo 'yes' ;