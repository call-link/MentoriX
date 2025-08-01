<?php
require_once './bootstrap/config.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["name"] ?? '';
    $password = $_POST["pass"] ?? '';

    $sql = "SELECT * FROM `users` WHERE name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username); 
    $stmt->execute();
    $result = $stmt->get_result();
    $rows = $result->fetch_all(MYSQLI_ASSOC);

    if ($username == $rows[0]['name'] && $password == $rows[0]['pass']) {
        $_SESSION['name'] = $username;
        header("Location: index.html");
        exit;
    } else {
        echo "<script>alert('Login failed. Try again.'); window.location.href = './views/auth/index-tpl.html';</script>";
        exit;
    }
}
