<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>5aebanbanh</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="css/style.css">
 </head>
 <body class="bg-gray-100">
 <header class="header p-4 flex justify-between items-center" style="background-color: #EE9F1F;">
   <div class="logo flex items-center">
      <img alt="Bakery Logo" height="40" src="img/Screenshot_2024-11-10_152955-removebg-preview.png" width="60"/>
      <div class="ml-6 text-[#4a2b0a] font-semibold space-x-6 hidden md:flex">
         <a class="text-white hover:text-yellow-600" href="trangchu.php">Trang Chủ</a>
         <a class="text-white hover:text-yellow-600" href="gioithieu.php">Giới Thiệu</a>
         <a class="text-white hover:text-yellow-600" href="#">Tin Tức & Sự Kiện</a>
         <a class="text-white hover:text-yellow-600" href="sanpham.php">Sản Phẩm</a>
         <a class="text-white hover:text-yellow-600" href="hethongcuahang.php">Hệ Thống Cửa Hàng</a>
         <a class="text-white hover:text-yellow-600" href="#">Tuyển Dụng</a>
         <a class="text-white hover:text-yellow-600" href="#">Liên Hệ</a>
      </div>
   </div>
   <form action="timkiem.php" method="GET">
    <input type="text" name="query" placeholder="Tìm kiếm sản phẩm..." style="padding: 3px; width: 200px; border-radius: 30px; ">
    
</form>
  </header>

  <?php
session_start();

// Kiểm tra và hiển thị thông báo nếu có
if (isset($_SESSION['cart_message'])) {
    echo "<p style='color: green;'>" . $_SESSION['cart_message'] . "</p>";
    unset($_SESSION['cart_message']);  
}

$total = 0;

if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    echo "<div class='cart-container'>";
    echo "<div class='cart-items'>";
    echo "<h2>Giỏ hàng của bạn</h2>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>Sản Phẩm</th><th>Đơn Giá</th><th>Số Lượng</th><th>Thành Tiền</th><th>Hành Động</th></tr>";

    foreach ($_SESSION['cart'] as $productId => $product) {
        $subtotal = $product['price'] * $product['quantity'];
        $total += $subtotal;

        echo "<tr>";
        echo "<td><img src='" . $product['image'] . "' alt='" . $product['name'] . "' style='width: 50px; height: 50px;'> " . $product['name'] . "</td>";
        echo "<td>" . number_format($product['price'], 0, ',', '.') . " VND</td>";
        echo "<td>" . $product['quantity'] . "</td>";
        echo "<td>" . number_format($subtotal, 0, ',', '.') . " VND</td>";
        echo "<td><a href='remove_from_cart.php?id=$productId'>Xóa</a></td>";
        echo "</tr>";
    }

    echo "<tr><td colspan='3'>Tổng cộng:</td><td>" . number_format($total, 0, ',', '.') . " VND</td><td></td></tr>";
    echo "</table>";
    echo "</div>";

    // Thêm phần thông tin thanh toán
    echo "<div class='checkout-form'>";
    echo "<h2>Thông Tin Giao Hàng</h2>";
    echo "<form method='POST' action='process_order.php'>";
    echo "<label>Họ và tên:</label><input type='text' name='name' required><br>";
    echo "<label>Số điện thoại:</label><input type='text' name='phone' required><br>";
    echo "<label>Email:</label><input type='email' name='email' required><br>";
    echo "<label>Địa chỉ giao hàng:</label><input type='text' name='address' required><br>";
    echo "<label>Ghi chú:</label><textarea name='note'></textarea><br>";
    echo "<label>Phương thức thanh toán:</label><br>";
    echo "<input type='radio' name='payment_method' value='cash' checked> Tiền mặt <br>";
    echo "<input type='radio' name='payment_method' value='bank'> Chuyển khoản<br>";
    echo "<button type='submit'>Xác Nhận Đặt Hàng</button>";
    echo "</form>";
    echo "</div>";
    echo "</div>";
} else {
    // Hiển thị thông báo giỏ hàng trống nhưng giữ thông tin thanh toán
    echo "<div class='cart-container'>";
    echo "<div class='cart-items'>";
    echo "<h2>Giỏ hàng của bạn</h2>";
    echo "<p>Giỏ hàng của bạn hiện tại trống.</p>"; 
    echo "</div>";

    // Hiển thị thông tin thanh toán mặc dù giỏ hàng trống
    echo "<div class='checkout-form'>";
    echo "<h2>Thông Tin Giao Hàng</h2>";
    echo "<form method='POST' action='process_order.php'>";
    echo "<label>Họ và tên:</label><input type='text' name='name' required><br>";
    echo "<label>Số điện thoại:</label><input type='text' name='phone' required><br>";
    echo "<label>Email:</label><input type='email' name='email' required><br>";
    echo "<label>Địa chỉ giao hàng:</label><input type='text' name='address' required><br>";
    echo "<label>Ghi chú:</label><textarea name='note'></textarea><br>";
    echo "<label>Phương thức thanh toán:</label><br>";
    echo "<input type='radio' name='payment_method' value='cash' checked> Tiền mặt <br>";
    echo "<input type='radio' name='payment_method' value='bank'> Chuyển khoản<br>";
    echo "<button type='submit'>Xác Nhận Đặt Hàng</button>";
    echo "</form>";
    echo "</div>";
    echo "</div>";
}
?>


<style>
body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    /* Phần khung giỏ hàng */
    .cart-container {
        width: 80%;
        margin: 40px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    /* Tiêu đề giỏ hàng */
    h2 {
        font-size: 24px;
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    /* Bảng giỏ hàng */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        font-size: 16px;
    }

    th {
        background-color: #f4f4f4;
        font-weight: normal;
    }

    /* Hình ảnh sản phẩm */
    td img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 5px;
    }

    /* Cột sản phẩm */
    td:first-child {
        display: flex;
        align-items: center;
    }

    td:first-child img {
        margin-right: 10px;
    }

    /* Đường kẻ giữa các dòng */
    tr:hover {
        background-color: #f9f9f9;
    }

    /* Nút xóa sản phẩm */
    a {
        color: #ff4747;
        font-weight: bold;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    /* Dòng tổng cộng */
    .total-row {
        background-color: #f9f9f9;
        font-weight: bold;
        text-align: right;
    }

    .total-row td {
        font-size: 18px;
    }

    /* Phần tổng số tiền */
    .cart-footer {
        margin-top: 20px;
        font-size: 18px;
        font-weight: bold;
        text-align: right;
    }

    .cart-footer span {
        color: #333;
    }

    /* Cảnh báo giỏ hàng trống */
    p {
        font-size: 18px;
        color: #333;
        text-align: center;
    }

    /* Thông báo thành công hoặc lỗi */
    p.green {
        color: green;
        text-align: center;
    }
    .cart-container {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.cart-items {
    width: 60%;
}

.checkout-form {
    width: 35%;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #f9f9f9;
}

.checkout-form h2 {
    margin-bottom: 20px;
}

.checkout-form label {
    display: block;
    margin-top: 10px;
}

.checkout-form input[type="text"], .checkout-form input[type="email"], .checkout-form textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
}

.checkout-form button {
    margin-top: 20px;
    padding: 10px;
    background-color: #ff6600;
    color: white;
    border: none;
    cursor: pointer;
}

.checkout-form button:hover {
    background-color: #e65c00;
}
</style>
<body class="bg-white">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-yellow-600" style="font-family: 'Dancing Script', cursive;">Liên Hệ</h2>
            <div class="flex justify-center items-center mt-2">
                <div class="border-t border-yellow-600 w-16"></div>
                <div class="mx-2 text-yellow-600"><i class="fas fa-circle"></i></div>
                <div class="border-t border-yellow-600 w-16"></div>
            </div>
        </div>
        <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <div>
                <h3 class="text-lg font-bold text-brown-800">Địa chỉ</h3>
                <div class="border-t border-brown-800 w-12 mx-auto mt-1 mb-2"></div>
                <p class="text-brown-800">Trụ sở chính: Trường Sơn – Thạch Nham Tây – Hòa Nhơn – Hòa Vang – TP Đà Nẵng</p>
            </div>
            <div>
                <h3 class="text-lg font-bold text-brown-800">Số Điện Thoại</h3>
                <div class="border-t border-brown-800 w-12 mx-auto mt-1 mb-2"></div>
                <p class="text-brown-800">Hotline: 0931 60 20 60 - 0906 449 508 - Mr Quân</p>
            </div>
            <div>
                <h3 class="text-lg font-bold text-brown-800">Email</h3>
                <div class="border-t border-brown-800 w-12 mx-auto mt-1 mb-2"></div>
                <p class="text-brown-800">chungquan111@gmail.com</p>
            </div>
            <div>
                <h3 class="text-lg font-bold text-brown-800">Giờ Làm Việc</h3>
                <div class="border-t border-brown-800 w-12 mx-auto mt-1 mb-2"></div>
                <p class="text-brown-800">5h00 sáng đến 22h00 tối tất cả các ngày trong tuần</p>
            </div>
        </div>
    </div>
</body>
</html>
<style>
  .text-brown-800 {
            color: #5a2d0c;
        }
</style>
<!--ggmap-->
<style>
  .full-width-map {
      width: 100%;
      max-width: 100vw; 
      height: 300px;
      border: none; 
      box-sizing: border-box; 
      margin-top: 20px;
  }
  body, html {
      margin: 0;
      padding: 0;
      width: 100%;
      overflow-x: hidden;
  }
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

<!--foooter-->
<div class="container6">
<div class="flex justify-between items-start">
  <div class="nienkhung">
   <img alt="Anh Quan Bakery Logo" class="mb-4" height="150" src="img/Screenshot_2024-11-10_152955-removebg-preview.png" width="150"/>
   <p class="font-bold">
    HỘ KINH DOANH ANH QUÂN BAKERY 63
   </p>
   <p>
    Trụ sở: Thạch Nham Tây – Hòa Nhơn – Hòa Vang – TP Đà Nẵng
   </p>
   <p>
    Hotline: 0931 60 20 60 - 0906 449 508 - Mr Quân
   </p>
   <p>
    Email: chungquan111@gmail.com
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
    <a href="#">
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

