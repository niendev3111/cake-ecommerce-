<?php
include 'connect.php';  

// Lấy chi tiết sản phẩm
if (isset($_GET['id'])) {
    $product_id = intval($_GET['id']);
    $sql = "SELECT * FROM sanphambanh WHERE id = $product_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Sản phẩm không tồn tại.";
        exit;
    }
} else {
    echo "Không có sản phẩm nào được chọn.";
    exit;
}

// Truy vấn danh sách sản phẩm
$sql_list = "SELECT * FROM sanphambanh";
$result_list = $conn->query($sql_list);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['ten_sanpham']; ?></title>
    <link rel="stylesheet" href="css/style3.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-gray-100">

<!-- HEADER -->
<body class="bg-gray-100">
<header class="header p-4 flex justify-between items-center" style="background-color: #EE9F1F;">
   <div class="logo flex items-center">
      <img alt="Bakery Logo" height="40" src="img/Screenshot_2024-11-10_152955-removebg-preview.png" width="60"/>
      <div class="ml-6 text-[#4a2b0a] font-semibold space-x-6 hidden md:flex">
         <a class="text-white hover:text-yellow-600" href="trangchu.php">Trang Chủ</a>
         <a class="text-white hover:text-yellow-600" href="gioithieu.php">Giới Thiệu</a>
         <a class="text-white hover:text-yellow-600" href="tintucvasukien.php">Tin Tức & Sự Kiện</a>
         <a class="text-white hover:text-yellow-600" href="sanpham.php">Sản Phẩm</a>
         <a class="text-white hover:text-yellow-600" href="hethongcuahang.php">Hệ Thống Cửa Hàng</a>
         <a class="text-white hover:text-yellow-600" href="#">Tuyển Dụng</a>
         <a class="text-white hover:text-yellow-600" href="lienhe.php">Liên Hệ</a>
      </div>
   </div>
   <form action="timkiem.php" method="GET">
    <input type="text" name="query" placeholder="Tìm kiếm sản phẩm..." style="padding: 3px; width: 200px; border-radius: 30px; ">
    
</form>
  </header>
  <?php
if (isset($_GET['status']) && $_GET['status'] === 'success') {
    echo "<p style='color: green;'>Sản phẩm đã được thêm vào giỏ hàng thành công!</p>";
}
?>
<!-- Chi tiết sản phẩm -->
<div class="product-detail">
    <!-- Hình ảnh sản phẩm -->
    <div class="product-image">
        <?php
        $image_path = $row['hinhanh'];
        if (file_exists($image_path)) {
            echo "<img src='$image_path' alt='" . htmlspecialchars($row['ten_sanpham']) . "'>";
        } else {
            echo "<p>Ảnh không tồn tại.</p>";
            echo "<img src='img/default.png' alt='Ảnh sản phẩm không có'>";
        }
        ?>
    </div>

    <!-- Thông tin sản phẩm: tên, mô tả, giá và nút thêm vào giỏ hàng -->
    <div class="product-info">
    <h1><?php echo htmlspecialchars($row['ten_sanpham']); ?></h1>
    <p><?php echo htmlspecialchars($row['mota']); ?></p>
    <p class="price"><strong>Giá: <?php echo number_format($row['gia']); ?> VND</strong></p>


    <!-- Form thêm vào giỏ hàng -->
    <div class="add_to_cart">
        <form method="post" action="add_to_cart.php" style="margin-top: 10px;">
            <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
            <input type="hidden" name="product_name" value="<?php echo $row['ten_sanpham']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $row['gia']; ?>">
            <button type="submit">🛒 Thêm vào giỏ hàng</button>
        </form>
    </div>
      </div>  
        <!-- Thông tin liên hệ -->
        <div style="text-align: left; margin-top: 160px; margin-left: 100px; font-size: 14px;  margin-left: 170px; font-weight: bold; color: #ff6600;">
    <span>Hoặc Đặt Hàng Qua Điện Thoại: 0931 60 20 60</span>
</div>
</div>
</div>
<!-- Trường số lượng (hidden) để gửi đi với dữ liệu form -->

<style>
 /* Loại bỏ margin và padding mặc định */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Đảm bảo body và html chiếm toàn bộ chiều cao và chiều rộng */
html, body {
    width: 100%;
    height: 100%;
}

/* Bao bọc tất cả phần tử sản phẩm */
.product-detail {
    display: flex; /* Sử dụng Flexbox */
    justify-content: space-between; /* Đặt khoảng cách giữa ảnh và thông tin */
    align-items: flex-start; /* Căn phần tử dọc theo trục chính */
    padding: 20px; /* Padding cho sản phẩm */
    width: 100%;
    max-width: 1200px; /* Giới hạn độ rộng tối đa */
    margin: 0 auto; /* Căn giữa phần tử trên trang */
    box-sizing: border-box;
}

/* Hình ảnh sản phẩm */
.product-image {
    flex: 0 0 40%; /* Ảnh chiếm 40% chiều rộng */
    max-width: 40%; /* Giới hạn ảnh chiếm tối đa 40% */
    margin-right: 20px; /* Khoảng cách giữa ảnh và thông tin sản phẩm */
}
.quantity {
            display: flex;
            align-items: center;
            margin: 10px 0;
            margin-left: 900px;
            margin-top: -60px;
        }
        .quantity label {
            margin-right: 10px;
        }
        .quantity input {
            width: 40px;
            text-align: center;
        }
        .quantity button {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 5px 10px;
            cursor: pointer;
        }
.product-image img {
    width: 100%; /* Đảm bảo ảnh chiếm đủ chiều rộng */
    object-fit: cover; /* Đảm bảo ảnh không bị méo */
    border-radius: 8px; /* Bo góc cho ảnh */
}

/* Phần thông tin sản phẩm: tên, mô tả, giá */
.product-info {
    flex: 1; /* Phần này chiếm hết không gian còn lại */
    text-align: left; /* Căn lề trái cho các thông tin */
    flex-direction: column;
}

/* Tiêu đề sản phẩm */
.product-info h1 {
    font-size: 2rem;
    font-weight: bold;
    color: #FFAA00;
    margin-bottom: 15px;
}

/* Giá sản phẩm */
.product-info .price {
    font-size: 1.4rem;
    font-weight: bold;
    color: #FF4500;
    margin-bottom: 15px;
}

/* Mô tả sản phẩm */
.product-info p {
    font-size: 1rem;
    color: #666;
    line-height: 1.5;
    margin-bottom: 20px;
}

/* Nút thêm vào giỏ hàng */
.add_to_cart {
    background-color: orange;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    display: inline-block;
    margin-top: 20px;
    border-radius: 5px;
}

.add-to-cart:hover {
    background-color: #FF8C00;
}


</style>


<!-- Danh sách sản phẩm -->
<div class="flex justify-center items-center space-x-4 mt-4">
    <div class="flex items-center">
    </div>
    <h1 class="text-3xl font-bold text-yellow-500 " style="font-family: 'Pacifico', cursive; margin-top: 30px;">Sản Phẩm Liên Quan</h1>
    <div class="flex items-center">
    </div>
</div>


<div class="product-list">
    <?php
    if ($result_list->num_rows > 0) {
        while ($row_list = $result_list->fetch_assoc()) {
            echo "<div class='product-item'>";
            echo "<img src='" . $row_list["hinhanh"] . "' alt='" . htmlspecialchars($row_list["ten_sanpham"]) . "'>";
            echo "<h3>" . htmlspecialchars($row_list["ten_sanpham"]) . "</h3>";
            echo "<p><strong>Giá: " . number_format($row_list["gia"]) . " VND</strong></p>";
            echo "</div>";
        }
    } else {
        echo "<p>Không có sản phẩm nào.</p>";
    }
    ?>
</div>
<style>
    .product-list {
  display: flex; /* Sử dụng Flexbox */
  flex-wrap: wrap; /* Đảm bảo các sản phẩm xuống hàng nếu không đủ chỗ */
  gap: 16px; /* Khoảng cách giữa các sản phẩm */
  justify-content: center; /* Căn giữa các sản phẩm */
  margin: 20px auto; /* Căn giữa toàn bộ danh sách sản phẩm */
  padding: 10px;
}

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
<?php $conn->close(); ?>

<!-- footer-->
<div class="container6">
<div class="flex justify-between items-start">
  <div class="nienkhung">
   <img alt="Anh Quan Bakery Logo" class="mb-4" height="150" src="img/Screenshot_2024-11-10_152955-removebg-preview.png" width="150"/>
   <p class="font-bold">
    HỘ KINH DOANH WEB BÁN BÁNH
   </p>
   <p>
    Trụ sở: Thạch Nham Tây – Hòa Nhơn – Hòa Vang – TP Đà Nẵng
   </p>
   <p>
    Hotline: 0931 60 20 60 - 0763 679 363 - Mr Niên
   </p>
   <p>
    Email: 5aebanbanh@gmail.com
   </p>
   <p>
    Giấy phép kinh doanh số 0402055577-001, phòng tài chính - kế hoạch Huyện Hòa Vang, Thành phố Đà Nẵng cấp lần 2 ngày 19 tháng 06 năm 2024
   </p>
   <p>
    Mã số giấy ATTP: 06/24/GCNATTP-ATTP - Ngày cấp: 03/07/2024 - Nơi cấp giấy ATTP: Phòng Kinh Tế Và Hạ Tầng Huyện Hoà Vang
   </p>
  </div>
 <div class="niendep">
   <h2>Hổ Trợ</h2>
   <ul>
    <li>
Chính sách bảo mật thông tin
    </li>
    <li>
      Phương Thức Thanh Toán
    </li>
    <li>
      Chính sách giao, nhận hàng và kiểm hàng 
    </li>
    <li>
      Chính sách đổi trả và hoàn tiền
    </li>
   </ul>
 </div>
  <div class="w-1/3 text-center">
   <h2 class="font-bold text-lg mb-4">
    Chăm Sóc Khách Hàng
   </h2>
   <img alt="Customer Service Image" class="mx-auto mb-2" height="150" src="img/hinhnienee.jpg" width="150"/>
  </div>
  <div class="w-1/3">
   <h2 class="font-bold text-lg mb-4">
    Liên Kết Nhanh
   </h2>
   <ul>
    <li>
     Giới Thiệu
    </li>
    <li>
     Hệ Thống Cửa Hàng
    </li>
    <li>
     Sản Phẩm
    </li>
    <li>
     Tin Tức &amp; Sự Kiện
    </li>
   </ul>
   <div class="flex space-x-4 mt-4">
    <a href="#">
     <i class="fab fa-instagram">
     </i>
    </a>
    <a href="">
     <i class="fab fa-facebook">
     </i>
    </a>
    <a href="#">
     <i class="fab fa-twitter">
     </i>
    </a>
    <a href="#">
     <i class="fab fa-youtube">
     </i>
    </a>
   </div>
   <img alt="Certification Badge" class="mt-4" height="50" src="img/logoSaleNoti.png" width="100"/>
  </div>
 </div>

 <hr>
 <div class="flex justify-between items-center mt-10">
  <p>
   Copyright © 2022 5 AnhEM Bakery. All Rights Reserved.
  </p>
  <p>
   Designed and Maintained by
   <span class="font-bold">
    VHNWEB
   </span>
  </p>
 </div>
</div>
<div class="hotline-phone-ring-wrap">
	<div class="hotline-phone-ring">
		<div class="hotline-phone-ring-circle"></div>
		<div class="hotline-phone-ring-circle-fill"></div>
		<div class="hotline-phone-ring-img-circle">
		<a href="tel:0987654321" class="pps-btn-img">
			<img src="https://wiki.minhduy.vn/wp-content/uploads/2022/07/icon-call-nh.png" alt="Gọi điện thoại" width="50">
		</a>
		</div>
	</div>
	<div class="hotline-bar">
		<a href="tel:0987654321">
			<span class="text-hotline">0763.679.363</span>
		</a>
	</div>
</div>
 <!-- Hộp chat -->
<div class="chat-widget">
  <!-- Nút Messenger với thông báo tin nhắn chưa đọc -->
  <button class="chat-btn">
    <i class="fab fa-facebook-messenger"></i>
    <span class="notification-bubble">3</span> <!-- Số tin nhắn chưa đọc -->
  </button>
  <div class="chat-box">
    <div class="chat-header">
      <span>Chào bạn! Cần giúp đỡ gì không?</span>
      <button class="close-chat">X</button>
    </div>
    <div class="chat-body">
      <p>Chúng tôi đang online, bạn có thể hỏi bất kỳ điều gì!</p>
    </div>
    <input type="text" class="chat-input" placeholder="Nhập tin nhắn...">
  </div>
</div>

<!-- CSS -->
<style>
  .chat-widget {
    position: fixed;
    bottom: 20px;
    right: 20px;
  }
  
  .chat-btn {
    padding: 10px;
    background-color: #0084ff; /* Màu của Messenger */
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 50%;
    font-size: 50px; /* Kích thước biểu tượng */
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative; /* Thêm vị trí để chèn thông báo */
    transition: background-color 0.3s ease, transform 0.3s ease; /* Hiệu ứng hover */
  }

  .chat-btn i {
    font-size: 28px;
  }

  .notification-bubble {
    position: absolute;
    top: -5px;
    right: -5px;
    background-color: red; /* Màu đỏ của thông báo */
    color: white;
    font-size: 12px;
    font-weight: bold;
    padding: 5px;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: transform 0.3s ease; /* Hiệu ứng khi hover */
  }

  .chat-box {
    display: none;
    width: 250px;
    height: 350px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    position: absolute;
    bottom: 60px;
    right: 0;
  }

  .chat-header {
    background-color: #0084ff; /* Màu của Messenger */
    color: white;
    padding: 10px;
    border-radius: 10px 10px 0 0;
    display: flex;
    justify-content: space-between;
  }

  .chat-body {
    padding: 10px;
    flex: 1;
    overflow-y: scroll;
  }

  .chat-input {
    width: 100%;
    padding: 10px;
    border: none;
    border-top: 1px solid #ddd;
    border-radius: 0 0 10px 10px;
  }

  .close-chat {
    background: transparent;
    border: none;
    color: white;
    cursor: pointer;
  }

  /* Hover Effects */
  .chat-btn:hover {
    background-color: #006bb3; /* Màu nền khi hover */
    transform: scale(1.1); /* Phóng to nút khi hover */
  }

  .notification-bubble:hover {
    transform: scale(1.2); /* Phóng to thông báo khi hover */
    background-color: #ff0000; /* Đổi màu thông báo khi hover */
  }
</style>

<!-- JavaScript -->
<script>
  const chatBtn = document.querySelector('.chat-btn');
  const chatBox = document.querySelector('.chat-box');
  const closeBtn = document.querySelector('.close-chat');
  const notificationBubble = document.querySelector('.notification-bubble');

  // Hiển thị hộp chat khi người dùng nhấn vào nút Messenger
  chatBtn.addEventListener('click', () => {
    chatBox.style.display = 'block';
    notificationBubble.style.display = 'none'; // Ẩn thông báo khi mở chat
  });

  // Đóng hộp chat
  closeBtn.addEventListener('click', () => {
    chatBox.style.display = 'none';
  });

  // Thay đổi số tin nhắn chưa đọc (ví dụ)
  function updateNotification(newMessages) {
    if (newMessages > 0) {
      notificationBubble.textContent = newMessages;
      notificationBubble.style.display = 'flex'; // Hiển thị thông báo khi có tin nhắn mới
    } else {
      notificationBubble.style.display = 'none'; // Ẩn nếu không có tin nhắn
    }
  }

  // Ví dụ: Cập nhật thông báo tin nhắn chưa đọc là 1
  updateNotification(1);
</script>

</body>
</html>
