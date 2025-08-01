<?php
require_once 'config.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"] ?? '';
    $password = $_POST["password"] ?? '';

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && $user['password'] === $password) {
        $_SESSION['username'] = $username;
        header("Location: index.html");
        exit;
    } else {
        echo "<script>alert('Login failed. Try again.'); window.location.href = './views/auth/index-tpl.html';</script>";
        exit;
    }
}
?>