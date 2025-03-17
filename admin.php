 








 <?php
$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "webbanbanh2024"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Thêm sản phẩm
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $description = isset($_POST['description']) ? $_POST['description'] : '';
    $price = isset($_POST['price']) ? $_POST['price'] : '';
    $loai_sanpham = isset($_POST['loai_sanpham']) ? $_POST['loai_sanpham'] : '';
    $status = isset($_POST['status']) ? $_POST['status'] : 'inactive'; 

    if (empty($name) || empty($description) || empty($price) || empty($loai_sanpham)) {
        echo "Vui lòng điền đầy đủ thông tin sản phẩm.";
    } else {
        // Kiểm tra nếu có ảnh được tải lên
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $image = "";
            $target_dir = "img/";  
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            
            // Lấy loại file ảnh
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];

            if (in_array($imageFileType, $allowed_types)) {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    $image = $target_file;  
                } else {
                    echo "Có lỗi khi tải ảnh lên.";
                }
            } else {
                echo "Chỉ hỗ trợ tải lên ảnh định dạng JPG, JPEG, PNG, GIF.";
            }
        } else {
            echo "Chưa chọn ảnh để tải lên.";
        }

        // Thêm sản phẩm vào CSDL nếu có ảnh
        if ($image) {
            $stmt = $conn->prepare("INSERT INTO sanphambanh (ten_sanpham, gia, hinhanh, mota, trang_thai, loai_sanpham) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $name, $price, $image, $description, $status, $loai_sanpham);

            if ($stmt->execute()) {
                echo "Sản phẩm đã được thêm thành công!";
            } else {
                echo "Lỗi: " . $stmt->error;
            }

            $stmt->close();
        }
    }
}

// Lấy danh sách sản phẩm
$sql = "SELECT * FROM sanphambanh";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang Quản Trị Sản Phẩm</title>
</head>
<body>
    <h1>Trang Quản Trị Sản Phẩm</h1>
    <form method="POST" action="admin.php" enctype="multipart/form-data">
        <label for="name">Tên Sản Phẩm:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="description">Mô Tả:</label>
        <textarea name="description" id="description" required></textarea><br><br>

        <label for="price">Giá:</label>
        <input type="number" name="price" id="price" required><br><br>

        <label for="trang_thai">Trạng thái:</label>
        <select name="status" id="status">
            <option value="1" selected>Hiển thị</option>
            <option value="0">Ẩn</option>
        </select><br><br>

          <!-- Thêm loại sản phẩm -->
          <label for="category">Loại Sản Phẩm:</label>
<input type="text" name="loai_sanpham" id="category" required><br><br>

        
        <!-- Thêm các loại sản phẩm khác -->
    </select><br><br>

        <label for="image">Ảnh Sản Phẩm:</label>
        <input type="file" name="image" id="image" required><br><br>

        <input type="submit" value="Thêm Sản Phẩm">
    </form>

    <h2>Danh Sách Sản Phẩm</h2>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá</th>
            <th>Mô Tả</th>
            <th>Ảnh</th>
            <th>Trạng Thái</th>
            <th>Hành Động</th>
            <th>Loại Sản Phẩm</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Hiển thị danh sách sản phẩm
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['ten_sanpham'] . "</td>";
                echo "<td>" . number_format($row['gia'], 0, ',', '.') . " VND</td>";
                echo "<td>" . $row['loai_sanpham'] . "</td>"; 
                echo "<td>" . $row['mota'] . "</td>";
                echo "<td><img src='" . $row['hinhanh'] . "' alt='" . $row['ten_sanpham'] . "' style='width: 50px; height: 50px;'></td>";
                echo "<td>" . ($row['trang_thai'] == '1' ? 'Hiển thị' : 'Ẩn') . "</td>";
                echo "<td>
                <a href='edit_product.php?id=" . $row['id'] . "'>Sửa</a> | 
                <a href='remove_from_cart.php?id=" . $row['id'] . "&admin=true'>Xóa</a>
              </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7' style='text-align:center;'>Chưa có sản phẩm nào.</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<style>
    .product-list {
    display: flex;
    flex-wrap: wrap; /* Cho phép item tự động xuống dòng nếu không đủ chỗ */
    gap: 20px; /* Khoảng cách giữa các sản phẩm */
    justify-content: center; /* Căn giữa các sản phẩm */
    padding: 20px; /* Khoảng cách bên trong danh sách */
    background-color: #f9f9f9; /* Màu nền nhạt */
}

/* Item của từng sản phẩm */
.product-item {
    width: 250px; /* Chiều rộng cố định cho mỗi sản phẩm */
    background-color: #fff; /* Màu nền trắng */
    border: 1px solid #ddd; /* Đường viền mỏng */
    border-radius: 8px; /* Bo góc nhẹ */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Hiệu ứng đổ bóng */
    overflow: hidden; /* Đảm bảo không tràn nội dung */
    text-align: center; /* Căn giữa nội dung */
    transition: transform 0.2s ease, box-shadow 0.2s ease; /* Hiệu ứng khi hover */
}

/* Hiệu ứng hover cho sản phẩm */
.product-item:hover {
    transform: translateY(-5px); /* Nhấc nhẹ lên */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); /* Tăng đổ bóng */
}

/* Ảnh sản phẩm */
.product-item img {
    width: 100%; /* Chiếm toàn bộ chiều rộng item */
    height: 200px; /* Đặt chiều cao cố định */
    object-fit: cover; /* Đảm bảo ảnh không bị méo */
    border-bottom: 1px solid #ddd; /* Đường viền giữa ảnh và nội dung */
}

/* Tiêu đề sản phẩm */
.product-item h3 {
    font-size: 18px;
    font-weight: bold;
    margin: 10px 0;
    color: #333; /* Màu chữ đậm */
}

/* Mô tả sản phẩm */
.product-item p {
    font-size: 14px;
    color: #666; /* Màu chữ nhạt */
    margin: 5px 10px;
}

/* Giá sản phẩm */
.product-item p strong {
    color: #e63946; /* Màu đỏ nổi bật cho giá */
    font-size: 16px;
}

/* Link bao quanh sản phẩm */
.product-item a {
    text-decoration: none; /* Loại bỏ gạch chân */
    color: inherit; /* Giữ nguyên màu chữ */
}

</style>
    <hr>
    <div class="product-list">
    <?php
    // Kiểm tra nếu có sản phẩm và hiển thị
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='product-item'>";
            echo "<img src='" . $row["hinhanh"] . "' alt='" . $row["ten_sanpham"] . "'>";
            echo "<h3>" . $row["ten_sanpham"] . "</h3>";
            echo "<p>" . $row["mota"] . "</p>";
            echo "<p><strong>Giá: " . number_format($row["gia"]) . " VND</strong></p>";
            echo "<p><strong>Trạng Thái: " . ucfirst($row["trang_thai"]) . "</strong></p>";
            echo "</div>";
        }
    } else {
        echo "<p>Không có sản phẩm nào.</p>";
    }

    // Đóng kết nối sau khi hoàn tất tất cả các thao tác
    $conn->close();
    ?>
</div>
</body>
</html>
