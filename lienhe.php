<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>5aebanbanh</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="css/style5.css">
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
 <!-- js -->
 <style>
  .full-width-map {
      width: 210%;
      max-width: 100vw; 
      height: 300px;
      border: none; 
      box-sizing: border-box; 
      margin-top: -0.2px;
      margin-left: -15px;
  }
  body, html {
      margin: 0;
      padding: 0;
      width: 100%;
      overflow-x: hidden;
  }
  .vuivui{
    margin-top:20px;
  }
</style>

<div>
    <iframe class="full-width-map" 
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3470.637085734743!2d108.13716157459875!3d16.00420399117648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zVGjhuqFjaCBOaGFtIFTDonkg4oCTIEjDsmEgTmjGoW4g4oCTIEjDsmEgVmFuZyDigJMgVFAgxJDDoCBO4bq1bmc!5e1!3m2!1svi!2s!4v1731562868194!5m2!1svi!2s" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
  <!--giua-->
  <div class="vuivui">
  <div class="max-w-6xl mx-auto p-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h1 class="text-2xl font-bold text-yellow-500">Hệ Thống WEB BÁN BÁNH</h1>
                <h2 class="text-xl font-bold mt-2">Hệ Thống WEB BÁN BÁNH - TP. Đà Nẵng</h2>
                <p class="mt-2">Địa chỉ: Thạch Nham Tây – Hòa Nhơn – Hòa Vang – TP Đà Nẵng</p>
                <p>Email: <a href="mailto:nienvhpd10366@gmail,com" class="text-blue-500">nienvhpd10366@gmail.com</a></p>
                <p>Số điện thoại: 0931 602060 - CSKH / 0763 679 363 - Mr. Niên</p>
                <div class="mt-4 space-y-4">
                    <div class="flex items-center">
                        <i class="fas fa-plus-circle text-yellow-500 mr-2"></i>
                        <a href="#" class="text-lg">Nhượng Quyền Cửa Hàng?</a>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-plus-circle text-yellow-500 mr-2"></i>
                        <a href="#" class="text-lg">Hủy Đơn Hàng Vừa Đặt?</a>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-plus-circle text-yellow-500 mr-2"></i>
                        <a href="#" class="text-lg">Thay Đổi Thời Gian Vận Chuyển?</a>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-plus-circle text-yellow-500 mr-2"></i>
                        <a href="#" class="text-lg">Phương Thức Vận Chuyển?</a>
                    </div>
                </div>
            </div>
            <div>
                <form class="space-y-4">
                    <div class="flex space-x-4">
                        <input type="text" placeholder="Tên Người Đặt" class="w-full p-3 border border-gray-300 rounded-lg">
                    </div>
                    <div class="flex space-x-4">
                        <input type="email" placeholder="Email" class="w-full p-3 border border-gray-300 rounded-lg">
                        <input type="text" placeholder="Số Điện Thoại" class="w-full p-3 border border-gray-300 rounded-lg">
                    </div>
                    <div>
                        <textarea placeholder="Nội Dung" class="w-full p-3 border border-gray-300 rounded-lg h-32"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-gradient-to-r from-yellow-400 to-orange-500 text-white p-3 rounded-lg font-bold">GỬI →</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

  <!--giua-->
<!--SP CHÍNH-->
<!--SP CHÍNH-->
<!--SP banchay-->
 <!--SP banchay-->
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
    Hotline: 0931 60 20 60 - 0763 679 363 - Mr Quân
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
