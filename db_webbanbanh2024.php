<?php
// Cấu hình kết nối cơ sở dữ liệu
$servername = "localhost"; // hoặc tên máy chủ IP nếu bạn không dùng localhost
$username = "root";        // Tên đăng nhập MySQL của bạn
$password = "";            // Mật khẩu MySQL (để trống nếu không có)
$dbname = "webbanbanh2024"; // Tên cơ sở dữ liệu của bạn

// Kết nối đến cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối cơ sở dữ liệu thất bại: " . $conn->connect_error);
} else {
    // echo "Kết nối thành công!";
}
?>
