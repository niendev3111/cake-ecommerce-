<?php
session_start();
require 'db_webbanbanh2024.php'; // Kết nối cơ sở dữ liệu

// Kiểm tra nếu dữ liệu POST được gửi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lấy dữ liệu từ form
    $productId = $_POST['product_id'];
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    $productQuantity = isset($_POST['product_quantity']) ? $_POST['product_quantity'] : 1; // Mặc định là 1 nếu không có

    // Kiểm tra nếu sản phẩm có tồn tại trong cơ sở dữ liệu
    $sql = "SELECT * FROM sanphambanh WHERE id = ? AND trang_thai = 1"; // Trang thái '1' là sản phẩm còn bán
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $productId); // "i" cho kiểu integer
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc(); // Lấy thông tin sản phẩm từ CSDL

        // Khởi tạo giỏ hàng nếu chưa có
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        // Kiểm tra nếu sản phẩm đã có trong giỏ hàng
        if (isset($_SESSION['cart'][$productId])) {
            // Nếu đã có sản phẩm thì chỉ cập nhật số lượng
            $_SESSION['cart'][$productId]['quantity'] += $productQuantity;
        } else {
            // Nếu chưa có sản phẩm thì thêm vào giỏ hàng
            $_SESSION['cart'][$productId] = [
                'name' => $productName,
                'price' => $productPrice,
                'image' => $row['hinhanh'],
                'quantity' => $productQuantity,
                'description' => $row['mota'],
            ];
        }

        // Thông báo và chuyển hướng sang giỏ hàng
        $_SESSION['cart_message'] = "Sản phẩm đã được thêm vào giỏ hàng!";
        header("Location: cart.php");  // Chuyển hướng sang trang giỏ hàng
        exit();
    } else {
        echo "Sản phẩm không tồn tại hoặc đã ngừng bán.";
    }
}
?>
