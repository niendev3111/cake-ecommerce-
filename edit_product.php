<?php
session_start();
include('connect.php');  // Kết nối cơ sở dữ liệu

// Kiểm tra nếu có ID sản phẩm được truyền qua URL
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Lấy thông tin sản phẩm từ cơ sở dữ liệu
    $sql = "SELECT * FROM sanphambanh WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $result = $stmt->get_result();

    // Kiểm tra xem có sản phẩm hay không
    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        echo "Sản phẩm không tồn tại.";
        exit;
    }
}

// Cập nhật thông tin sản phẩm khi form được gửi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy thông tin từ form
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $status = isset($_POST['status']) ? $_POST['status'] : 'inactive';  // Mặc định trạng thái là 'inactive'

    // Kiểm tra nếu có ảnh mới được tải lên
    $image = $product['hinhanh'];  // Giữ lại hình ảnh cũ nếu không có ảnh mới

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = "img/";  // Đường dẫn thư mục chứa ảnh
        $target_file = $target_dir . basename($_FILES["image"]["name"]);

        // Kiểm tra định dạng ảnh
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($imageFileType, $allowed_types)) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $image = $target_file;  // Cập nhật hình ảnh mới
            } else {
                echo "Có lỗi khi tải ảnh lên.";
            }
        } else {
            echo "Chỉ hỗ trợ ảnh JPG, JPEG, PNG, GIF.";
        }
    }

    // Cập nhật thông tin sản phẩm vào cơ sở dữ liệu
    $sql_update = "UPDATE sanphambanh SET ten_sanpham = ?, gia = ?, hinhanh = ?, mota = ?, trang_thai = ? WHERE id = ?";
    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bind_param("sssssi", $name, $price, $image, $description, $status, $productId);

    if ($stmt_update->execute()) {
        $_SESSION['message'] = "Sản phẩm đã được cập nhật thành công!";
        header("Location: admin.php");  // Quay lại trang quản trị sản phẩm
        exit();
    } else {
        echo "Lỗi: " . $stmt_update->error;
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sửa Sản Phẩm</title>
</head>
<body>
    <h1>Sửa Sản Phẩm</h1>

    <!-- Hiển thị thông báo nếu có -->
    <?php
    if (isset($_SESSION['message'])) {
        echo "<p>" . $_SESSION['message'] . "</p>";
        unset($_SESSION['message']);
    }
    ?>

    <form method="POST" action="edit_product.php?id=<?php echo $productId; ?>" enctype="multipart/form-data">
        <label for="name">Tên Sản Phẩm:</label>
        <input type="text" name="name" id="name" value="<?php echo $product['ten_sanpham']; ?>" required><br><br>

        
        <label for="price">Giá:</label>
        <input type="number" name="price" id="price" value="<?php echo $product['gia']; ?>" required><br><br>

        <label for="image">Ảnh Sản Phẩm:</label>
        <input type="file" name="image" id="image"><br><br>

        <input type="submit" value="Cập Nhật Sản Phẩm">
    </form>

    <p><a href="admin.php">Quay lại trang quản trị sản phẩm</a></p>
</body>
</html>

<?php
$conn->close();  // Đóng kết nối CSDL
?>
