<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang người dùng</title>
</head>
<body>
    <h2>Xin chào, <?= $_SESSION['username'] ?>!</h2>
    <p>Tài khoản của: nhân viên <?= $_SESSION['username'] ?></p>
</body>
</html>
