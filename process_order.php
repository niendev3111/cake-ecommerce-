<?php
session_start();
include('connect.php'); // Kết nối với cơ sở dữ liệu

// Kiểm tra nếu form đã được gửi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Kiểm tra nếu giỏ hàng đã có sản phẩm
    if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
        $_SESSION['cart_message'] = "Giỏ hàng của bạn trống. Vui lòng thêm sản phẩm trước khi đặt hàng.";
        header('Location: cart.php');
        exit;
    }

    // Tính tổng tiền từ giỏ hàng
    $total = 0;
    foreach ($_SESSION['cart'] as $product) {
        $total += $product['quantity'] * $product['price'];
    }

    // Lấy thông tin từ form
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $note = mysqli_real_escape_string($conn, $_POST['note']);
    $payment_method = mysqli_real_escape_string($conn, $_POST['payment_method']);

    // Bước 1: Lưu thông tin đơn hàng vào bảng 'don_hang'
    $query = "INSERT INTO don_hang (ho_ten, so_dien_thoai, email, dia_chi, ghi_chu, phuong_thuc_thanh_toan, tong_tien)
              VALUES ('$name', '$phone', '$email', '$address', '$note', '$payment_method', '$total')";

    if (mysqli_query($conn, $query)) {
        // Lấy ID đơn hàng mới
        $order_id = mysqli_insert_id($conn);

        // Bước 2: Lưu chi tiết đơn hàng vào bảng 'chi_tiet_don_hang'
        // Bước 2: Lưu chi tiết đơn hàng vào bảng 'chi_tiet_don_hang'
foreach ($_SESSION['cart'] as $productId => $product) {
    $product_name = $product['name'];
    $quantity = $product['quantity'];
    $price = $product['price'];
    $subtotal = $quantity * $price;

    $query_detail = "INSERT INTO chi_tiet_don_hang (id_don_hang, ten_san_pham, so_luong, gia, thanh_tien)
                     VALUES ('$order_id', '$product_name', '$quantity', '$price', '$subtotal')";
    mysqli_query($conn, $query_detail);
}


        // Xóa giỏ hàng sau khi đặt hàng
        unset($_SESSION['cart']);
        
        // Thông báo thành công
        $_SESSION['cart_message'] = "Đặt hàng thành công! Cảm ơn bạn đã mua hàng.";

        // Chuyển hướng đến trang cảm ơn hoặc thông báo
        header('Location: cart.php');
        exit;
    } else {
        // Nếu có lỗi trong việc lưu đơn hàng
        $_SESSION['cart_message'] = "Có lỗi trong quá trình đặt hàng. Vui lòng thử lại.";
        header('Location: cart.php');
        exit;
    }
} else {
    // Nếu người dùng truy cập trực tiếp mà không gửi form
    $_SESSION['cart_message'] = "Vui lòng hoàn tất đơn hàng.";
    header('Location: cart.php');
    exit;
}
?>
