<?php
session_start();
require 'conn.php';

// اتأكد إنه جاي من POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
    $userId = intval($_POST['user_id']);

    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $userId);

    if ($stmt->execute()) {
        header("Location: test-login.php"); // رجّعه للجدول
        exit;
    } else {
        echo "Error deleting user.";
    }
}
?>