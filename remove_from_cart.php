<?php
session_start();

// Kiểm tra xem có id sản phẩm và admin được truyền qua URL không
if (isset($_GET['id'])) {
    $productId = $_GET['id'];  // Lấy ID sản phẩm từ URL
    $isAdmin = isset($_GET['admin']) && $_GET['admin'] == 'true'; // Kiểm tra xem có phải admin không

    // Nếu là admin, thực hiện xóa từ cơ sở dữ liệu
    if ($isAdmin) {
        // Kết nối cơ sở dữ liệu
        $servername = "localhost";
        $username = "root";  // Thay bằng username của bạn
        $password = "";      // Thay bằng mật khẩu của bạn
        $dbname = "webbanbanh2024";  // Tên cơ sở dữ liệu của bạn

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Xóa sản phẩm khỏi cơ sở dữ liệu
        $sql = "DELETE FROM sanphambanh WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $productId);
        if ($stmt->execute()) {
            $_SESSION['admin_message'] = "Sản phẩm đã được xóa khỏi cơ sở dữ liệu.";
        } else {
            $_SESSION['admin_message'] = "Lỗi khi xóa sản phẩm: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        // Xóa sản phẩm khỏi giỏ hàng (nếu không phải admin)
        unset($_SESSION['cart'][$productId]);
        $_SESSION['cart_message'] = "Sản phẩm đã được xóa khỏi giỏ hàng.";
    }
} else {
    $_SESSION['error_message'] = "Không có ID sản phẩm.";
}

// Chuyển hướng về trang giỏ hàng hoặc trang quản trị
header('Location: ' . ($_GET['admin'] == 'true' ? 'admin.php' : 'cart.php'));
exit();
?>
