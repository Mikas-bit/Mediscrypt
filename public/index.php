<?php
require_once __DIR__ . '/../src/includes/session.php';

if (!empty($_SESSION['user'])) {
    header('Location: dashboard.php');
    exit;
}

echo "Test";
header('Location: login.php');
exit;
