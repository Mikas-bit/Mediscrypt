<?php
session_start();
require_once __DIR__.'/../config/database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user['username'];
        header('Location: /dashboard.php');
        exit;
    } else {
        $_SESSION['error'] = 'Invalid credentials';
        header('Location: /login.php');
        exit;
    }
}
?>