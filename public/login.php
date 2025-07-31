<?php
require_once __DIR__ . '/../src/includes/session.php';

if (!empty($_SESSION['user'])) {
    header('Location: dashboard.php');
    exit;
}

include __DIR__ . '/../src/views/auth/login.view.php';
