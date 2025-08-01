<?php
require_once './bootstrap/config.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["name"] ?? '';
    $password = $_POST["pass"] ?? '';

    $stmt = $conn->prepare("SELECT * FROM users WHERE name = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();
    var_dump($user);
    // if ($user && $user['pass'] === $password) {
    //     $_SESSION['name'] = $username;
    //     header("Location: index.html");
    //     exit;
    // } else {
    //     echo "<script>alert('Login failed. Try again.'); window.location.href = './views/auth/index-tpl.html';</script>";
    //     exit;
    // }
}
?>