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
  <main class="container mx-auto p-4">
  <!--giua-->
  <div class="max-w-5xl mx-auto py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <div>
            <img alt="A variety of fresh ingredients including bread, vegetables, and sliced meats displayed on a table" class="w-full h-auto rounded-lg shadow-md" height="400" src="img/gt-khoi-nguon.jpg" width="600"/>
          </div>
          <div class="content">
            <h2 class="title text-3xl mb-4">Khởi Nguồn</h2>
            <p class="text-gray-700 mb-4">
              Anh Quân Bakery khởi đầu là một cơ sở sản xuất bánh mì nhỏ với quy mô gia đình vào đầu năm 2009. Trải qua hơn 15 năm xây dựng và phát triển, Anh Quân Bakery đã xây dựng được chuỗi hệ thống cửa hàng với hơn 60 cửa hàng bánh mì, bánh ngọt lớn nhỏ trải khắp thành phố Đà Nẵng.
            </p>
            <p class="text-gray-700">
              Là thương hiệu được biết đến với những sản phẩm chất lượng và ngon miệng từ bánh mì, bánh ngọt, bánh kem đến các sản phẩm khác như hamburger, sandwich,... Cùng với tinh thần ham học hỏi, trách nhiệm, Anh Quân Bakery đã, đang và sẽ luôn mang đến cho khách hàng những ổ bánh mì nóng giòn, những chiếc bánh thơm ngon, đỉnh dưỡng nhất.
            </p>
          </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-10">
          <div class="content">
            <h2 class="title text-3xl mb-4">Sứ Mệnh</h2>
            <p class="text-gray-700 mb-4">
              Sứ mệnh của chúng tôi là lưu giữ những giá trị truyền thống của Bánh mì Việt Nam nói chung và Bánh mì Đà Nẵng nói riêng, những điều làm cho Bánh mì trở thành món ăn hấp dẫn nhất hành tinh.
            </p>
            <p class="text-gray-700">
              “CHẤT LƯỢNG LÀM NÊN THƯƠNG HIỆU”, Anh Quân Bakery luôn cam kết về chất lượng sản phẩm, cùng phong cách phục vụ chuyên nghiệp, thân thiện để có thể đáp ứng tốt nhất nhu cầu của Quý khách hàng.
            </p>
          </div>
          <div class="nienheo">
            <img alt="A hand holding a freshly made sandwich filled with vegetables and meats" class="w-full h-auto rounded-lg shadow-md" height="400" src="img/gt-su-menh.jpg" width="600"/>
          </div>
        </div>
      </div>

      <!-- Giá trị cốt lõi -->
      <body class="bg-gray-100">
  <div class="container mx-auto py-12">
   <div class="text-center mb-8">
    <h2 class="text-4xl font-bold text-orange-500" style="font-family: 'Pacifico', cursive;">
     Giá Trị Cốt Lõi
    </h2>
   </div>
   <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="relative bg-white rounded-lg shadow-lg overflow-hidden">
     <img alt="Bánh bao nhân thịt" class="w-full h-48 object-cover" height="400" src="img/banhbao.jpg" width="300"/>
     <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center p-6">
      <p class="text-white text-center">
       Tạo ra sản phẩm tươi, mới, chất lượng và tốt cho sức khỏe.
      </p>
     </div>
    </div>
    <div class="relative bg-white rounded-lg shadow-lg overflow-hidden">
     <img alt="Khách hàng trải nghiệm dịch vụ" class="w-full h-48 object-cover" height="300" src="img/khachhang.jpg" width="400"/>
     <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center p-6">
      <p class="text-white text-center">
       Luôn lắng nghe mọi phản hồi từ Quý khách hàng để mang đến những trải nghiệm dịch vụ và sản phẩm tốt nhất.
      </p>
     </div>
    </div>
    <div class="relative bg-white rounded-lg shadow-lg overflow-hidden">
     <img alt="Đội ngũ nhân viên" class="w-full h-48 object-cover" height="300" src="img/nhannvien.jpg" width="400"/>
     <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center p-6">
      <p class="text-white text-center">
       Xây dựng văn hóa đội ngũ nhân viên đầy năng lượng, nhiệt tình và sáng tạo.
      </p>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>



  <!--giua-->
<!--SP CHÍNH-->

<!--SP CHÍNH-->
<!--SP banchay-->

 <!--SP banchay-->
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
                <p class="text-brown-800">Hotline: 0931 60 20 60 - 0763 679 363 - Mr Niên</p>
            </div>
            <div>
                <h3 class="text-lg font-bold text-brown-800">Email</h3>
                <div class="border-t border-brown-800 w-12 mx-auto mt-1 mb-2"></div>
                <p class="text-brown-800">5aebanbanh@gmail.com</p>
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
  <!--lienhe-->
  
<!--ggmap-->
<!--foooter-->
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
   Copyright © 2024 5 AnhEM Bakery. All Rights Reserved.
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
