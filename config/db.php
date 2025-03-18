<?php
// Bật hiển thị lỗi
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Thông tin kết nối
$host = "localhost";
$user = "root";
$pass = "";
$db = "sql_injection_demo";

// Kết nối MySQL
$conn = new mysqli($host, $user, $pass, $db);

// Kiểm tra kết nối
// if ($conn->connect_error) {
//     die("❌ Lỗi kết nối: " . $conn->connect_error);
// } else {
//     echo "✅ Kết nối MySQL thành công!";
// }
?>
