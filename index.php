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
      <li class="relative dropdown">
        <a class="hover:text-gray-300" href="sanpham.php">
         Sản Phẩm
        </a>
        <ul class="absolute left-0 mt-2 w-48 bg-white text-black shadow-lg dropdown-menu hidden">
         <li>
          <a class="block px-4 py-2 hover:bg-gray-200" href="#">
           Bánh mặn
          </a>
         </li>
         <li>
          <a class="block px-4 py-2 hover:bg-gray-200" href="#">
           Bánh mì
          </a>
         </li>
         <li>
          <a class="block px-4 py-2 hover:bg-gray-200" href="#">
           Bánh bao
          </a>
         </li>
         <li>
          <a class="block px-4 py-2 hover:bg-gray-200" href="#">
           Bánh Kem
          </a>
         </li>
         <li>
          <a class="block px-4 py-2 hover:bg-gray-200" href="#">
           Bánh Ngọt
          </a>
         </li>
         <li>
          <a class="block px-4 py-2 hover:bg-gray-200" href="#">
           Bánh Mì Gối/ Sandwich
          </a>
         </li>
         <li>
          <a class="block px-4 py-2 hover:bg-gray-200" href="#">
           Bánh Bông Lan
          </a>
         </li>
         <li>
          <a class="block px-4 py-2 hover:bg-gray-200" href="#">
           Bánh Bông Lan Trứng Muối
          </a>
         </li>
        </ul>
       </li>
         <a class="text-white hover:text-yellow-600" href="hethongcuahang.php">Hệ Thống Cửa Hàng</a>
         <a class="text-white hover:text-yellow-600" href="#">Tuyển Dụng</a>
         <a class="text-white hover:text-yellow-600" href="lienhe.php">Liên Hệ</a>
      </div>
   </div>
   <form action="timkiem.php" method="GET">
    <input type="text" name="query" placeholder="Tìm kiếm sản phẩm..." style="padding: 3px; width: 200px; border-radius: 30px; ">
 </header>
</form>

 <style>
  /* Định dạng chung cho danh sách */
li {
    list-style: none; /* Loại bỏ dấu chấm mặc định */
    margin: 0;
    padding: 0;
    
}
.dropdown {
    position: relative; 
}
.dropdown-menu {
    display: none; 
    position: absolute; 
    left: 0;
    top: 100%; 
    z-index: 9999; 
    background-color: white; 
    width: 200px; 
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); 
    border-radius: 5px; 
}
.dropdown:hover .dropdown-menu,
.dropdown.active .dropdown-menu {
    display: block;
}
.dropdown-menu li a {
    display: block;
    padding: 10px;
    color: black; 
    text-decoration: none; 
}
.dropdown-menu li a:hover {
    background-color: #f3f3f3; 
    color: #333; 
}
.dropdown-menu {
    list-style-type: none;
}
 </style>
 <script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropdown = document.querySelector('.dropdown');
        dropdown.addEventListener('click', function(e) {
            e.stopPropagation(); 
            dropdown.classList.toggle('active'); 
        });
        document.addEventListener('click', function(e) {
            if (!dropdown.contains(e.target)) {
                dropdown.classList.remove('active');
            }
        });
    });
</script>

  </header>
  <main class="container mx-auto p-4">
    <!-- Slideshow -->
    <div class="slideshownien">
    <div class="slideshow-container">
        <!-- Slide 1 -->
        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="img/banh-bao-thit-huong-vi-truyen-thong-1660205888.jpg" style="width:100%">
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 45px; margin-left: -340px; margin-top: -90px;">Bánh Bao Thịt - Hương Vị Truyền Thống</div>
            <a href="gioithieu.php" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);  background-color: #ff7f00; color: white; padding: 10px 20px; text-decoration: none; border-radius: 20px; font-size: 16px; margin-top: -40px; margin-left: -640px;">Xem thêm</a>
        </div>
        <!-- Slide 2 -->
        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="img/banh-luon-tuoi-luon-moi-tai-cua-hang-1660206143.jpg" style="width:100%">
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 40px; margin-left: -340px; margin-top: -90px;">Thương Hiệu Đã Được - Khẳng Định Từ Những Năm 2000</div>
            <a href="gioithieu.php" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);  background-color: #ff7f00; color: white; padding: 10px 20px; text-decoration: none; border-radius: 20px; font-size: 16px; margin-top: -40px; margin-left: -640px;">Xem thêm</a>
        </div>
        <!-- Slide 3 -->
        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="img/thuong-hieu-da-duoc-khang-dinh-tu-nam-2000-1592357282.png" style="width:100%">
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 45px; margin-left: -340px; margin-top: -90px;">Bánh luôn Tươi - Luôn Mới Tại Cửa Hàng</div>
            <a href="gioithieu.php" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);  background-color: #ff7f00; color: white; padding: 10px 20px; text-decoration: none; border-radius: 20px; font-size: 16px; margin-top: -40px; margin-left: -640px;">Xem thêm</a>
        </div>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</div>
      <!-- end -->
<!-- js -->
 <script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (let i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Chuyển ảnh sau 4 giây
}
 </script>

 <!-- js -->

  <!--giua-->
 <div class="container mx-auto p-6">
  <div class="flex flex-col md:flex-row">
   <div class="md:w-1/2">
    <img alt="" class="rounded-lg shadow-lg" src="img/banh-mi-bee-mee3-1438765493783.webp" style="width: 600px; height: 500px; margin-left: 80px;">
   </div>
   <div class="md:w-1/2 md:pl-10 mt-6 md:mt-0">
    <h1 class="text-2xl font-bold text-orange-600 mb-4">
     Sứ Mệnh Của Chúng Tôi Là Lưu Giữ Những Giá Trị Truyền Thống Của Bánh Mì Việt Nam
    </h1>
    <p class="text-base mb-4" style="color: #9E7B4F;">
     Tiền thân là một tiệm bánh nhỏ của gia đình tại Đà Nẵng vào đầu năm 2009. Cho đến nay, Anh Quân Bakery đã thành lập nên hệ thống hơn 60 cửa hàng lớn nhỏ khắp Đà Nẵng. Chúng tôi là đơn vị chuyên về sản xuất và kinh doanh các loại bánh:
    </p>
    <ul class="list-disc list-inside mb-4">
     <li>
      Bánh Mỳ
     </li>
     <li>
      Bánh Âu
     </li>
     <li>
      Bánh Bông Lan (Mặn, Ngọt)
     </li>
     <li>
      Bánh Kem
     </li>
    </ul>
    <p class="text-base mb-4" style="color: #9E7B4F;">
     Trong suốt quá trình hơn 15 năm phát triển, chúng tôi luôn đề cao vấn đề chất lượng sản phẩm, chất lượng phục vụ và sự tiện ích, nhằm mang đến giá trị lớn nhất cho khách hàng.
    </p>
    <button class="bg-orange-500 text-white px-6 py-2 rounded-full shadow-lg hover:bg-orange-600 transition duration-300">
     <a href="gioithieu.php">Tìm Hiểu</a>
     <i class="fas fa-arrow-right ml-2">
     </i>
    </button>
   </div>
  </div>
  <div class="flex justify-center mt-10">
   <a class="text-orange-600 font-bold mx-4 border-b-2 border-orange-600" href="#">
    Giới Thiệu Chung
   </a>
   <a class="text-gray-600 font-bold mx-4" href="sumenh.php">
    Khởi Nguồn Và Sứ Mệnh
   </a>
   <a class="text-gray-600 font-bold mx-4" href="#">
    Giá Trị Cốt Lõi
   </a>
  </div>
 </div>
  <!--giua-->
<!--SP CHÍNH-->
<section class="mb-8">
  <h2 class="section-title text-center">Sản Phẩm Chính</h2>
  <div class="relative overflow-hidden">
    <div class="grid grid-flow-col auto-cols-max gap-8 overflow-x-auto scroll-smooth" id="product-container">
      <!-- Sản phẩm 1 -->
<div class="relative bg-white rounded-lg shadow-lg overflow-hidden w-72 group">
  <!-- Bao quanh hình ảnh và thông tin sản phẩm bằng thẻ <a> để tạo liên kết -->
  <a href="banhbao.php">
    <img alt="Sliced bread with raisins" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110" src="img/banhbao.jpg" />
    <div class="p-4 text-center">
      <p class="text-lg font-semibold">Bánh Bao</p>
    </div>
  </a>
</div>

      <!-- Sản phẩm 2 -->
      <div class="relative bg-white rounded-lg shadow-lg overflow-hidden w-72 group">
  <!-- Bao quanh hình ảnh và thông tin sản phẩm bằng thẻ <a> để tạo liên kết -->
  <a href="banhmy.php">
    <img alt="Sliced bread with raisins" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110" src="img/banhmy.jpg" />
    <div class="p-4 text-center">
      <p class="text-lg font-semibold">Bánh mỳ</p>
    </div>
  </a>
</div>
      <!-- Sản phẩm 3 -->
      <div class="relative bg-white rounded-lg shadow-lg overflow-hidden w-72 group">
        <img alt="Cinnamon rolls with nuts" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110" src="img/banhmygoi.jpg" />
        <div class="p-4 text-center">
          <p class="text-lg font-semibold">Bánh Mỳ Gối</p>
        </div>
      </div>
      <!-- Sản phẩm 4 -->
      <div class="relative bg-white rounded-lg shadow-lg overflow-hidden w-72 group">
  <!-- Bao quanh hình ảnh và thông tin sản phẩm bằng thẻ <a> để tạo liên kết -->
  <a href="banhbonglan.php">
    <img alt="Sliced bread with raisins" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110" src="img/banhbonglan.jpg" />
    <div class="p-4 text-center">
      <p class="text-lg font-semibold">Bánh Bông Lan</p>
    </div>
  </a>
</div>
      <!-- Sản phẩm 5 -->
      <div class="relative bg-white rounded-lg shadow-lg overflow-hidden w-72 group">
  <!-- Bao quanh hình ảnh và thông tin sản phẩm bằng thẻ <a> để tạo liên kết -->
  <a href="banhkem.php">
    <img alt="Sliced bread with raisins" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110" src="img/banhkem.jpg" />
    <div class="p-4 text-center">
      <p class="text-lg font-semibold">Bánh Kem</p>
    </div>
  </a>
</div>
      <!-- Sản phẩm 6 -->
      <div class="relative bg-white rounded-lg shadow-lg overflow-hidden w-72 group">
  <!-- Bao quanh hình ảnh và thông tin sản phẩm bằng thẻ <a> để tạo liên kết -->
  <a href="banhman.php">
    <img alt="Sliced bread with raisins" class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-110" src="img/BANHMAN.jpg" />
    <div class="p-4 text-center">
      <p class="text-lg font-semibold">Bánh Mặn</p>
    </div>
  </a>
</div>
    <!-- Nút mũi tên trái -->
    <div class="absolute inset-y-0 left-0 flex items-center">
      <button class="bg-orange-500 text-white p-2 rounded-full ml-2" id="scroll-left">
        <i class="fas fa-arrow-left"></i>
      </button>
    </div>
    <div class="absolute inset-y-0 right-0 flex items-center">
      <button class="bg-orange-500 text-white p-2 rounded-full mr-2" id="scroll-right">
        <i class="fas fa-arrow-right"></i>
      </button>
    </div>
    <!-- Nút mũi tên -->
  </div>
</section>

<!-- Thêm Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const scrollLeftButton = document.getElementById('scroll-left');
    const scrollRightButton = document.getElementById('scroll-right');
    const productContainer = document.getElementById('product-container');
    scrollLeftButton.addEventListener('click', () => {
        productContainer.scrollBy({
            left: -300,  
            behavior: 'smooth'
        });
    });
    scrollRightButton.addEventListener('click', () => {
        productContainer.scrollBy({
            left: 300,  
            behavior: 'smooth'
        });
    });
  });
</script>
<!--SP CHÍNH-->
<div class="image-container">
  <img src="img/banhngot.jpg" alt="Bánh ngọt" class="hover-effect">
  <img src="img/banhread.jpg" alt="Bánh trang" class="hover-effect">
</div>
<style>
  /* CSS */
.image-container {
  display: inline-block; /* Để ảnh không chiếm hết chiều rộng */
  overflow: hidden; /* Đảm bảo ảnh không bị lộ ra ngoài container khi di chuyển */
  display: flex;
}

.image-container img {
  transition: transform 0.3s ease-in-out;
  height: 500px;
  width: 700px;
  border-radius: 20px;
  margin-right: 60px;
}

.image-container img:hover {
  transform: scale(1.05) translateY(-5px); /* Di chuyển và phóng to ảnh khi hover */
}

</style>
<!--SP banchay-->
   </section>
   <section class="mb-8">
    <h2 class="section-title text-center">
     Sản Phẩm Bán Chạy
    </h2>
    <div class="container mx-auto py-8">
      <div class="flex justify-center gap-8">
        <!-- Product 1 -->
        <div class="text-center">
          <img alt="A pink cake with strawberries and cream" class="w-[200px] h-[200px] rounded-lg" src="img/pro1-mo79a8li-1283-banh-kem-cho-nu-2010-4.jpg" />
          <h2 class="text-sm font-semibold text-yellow-600 mt-4">
            Bánh Kem Cho Nữ 2010-4
          </h2>
          <p class="text-xs text-gray-600 mt-2">
            Size 14: 120.000đ; Size 16: 155.000đ;
            <br />
            Size 18: 185.000đ; Size 20: 220.000đ.
            <br />
            Nhận đặt bánh mẫu theo yêu cầu:
            <br />
            0931 60 20 60.
          </p>
          <p class="text-xs text-red-600 font-bold mt-2">
            185,000 VND
          </p>
          <i class="fas fa-shopping-cart text-red-600 mt-2"></i>
        </div>
        <!-- Product 2 -->
        <div class="text-center">
          <img alt="A pink cake with a bow and flowers" class="w-[200px] h-[200px] rounded-lg" src="img/pro1-z1sci7vy-1282-banh-kem-cho-nu-2010-3.jpg" />
          <h2 class="text-sm font-semibold text-yellow-600 mt-4">
            Bánh Kem Cho Nữ 2010-5
          </h2>
          <p class="text-xs text-gray-600 mt-2">
            Size 14: 120.000đ; Size 16: 155.000đ;
            <br />
            Size 18: 185.000đ; Size 20: 220.000đ.
            <br />
            Nhận đặt bánh mẫu theo yêu cầu:
            <br />
            0931 60 20 60.
          </p>
          <p class="text-xs text-red-600 font-bold mt-2">
            185,000 VND
          </p>
          <i class="fas fa-shopping-cart text-red-600 mt-2"></i>
        </div>
        <!-- Product 3 -->
        <div class="text-center">
          <img alt="A cake with a crown and red roses" class="w-[200px] h-[200px] rounded-lg" src="img/pro1-q300un8c-1281-banh-kem-cho-nu-2010-2.jpg" />
          <h2 class="text-sm font-semibold text-yellow-600 mt-4">
            Bánh Kem Cho Nữ 2010-2
          </h2>
          <p class="text-xs text-gray-600 mt-2">
            Size 14: 120.000đ; Size 16: 155.000đ;
            <br />
            Size 18: 185.000đ; Size 20: 220.000đ.
            <br />
            Nhận đặt bánh mẫu theo yêu cầu:
            <br />
            0931 60 20 60.
          </p>
          <p class="text-xs text-red-600 font-bold mt-2">
            220,000 VND
          </p>
          <i class="fas fa-shopping-cart text-red-600 mt-2"></i>
        </div>
        <!-- Product 4 -->
        <div class="text-center">
          <img alt="A white cake with pink decorations" class="w-[200px] h-[200px] rounded-lg" src="img/pro1-wb2yztpb-1284-banh-kem-cho-nu-2010-5.jpg" />
          <h2 class="text-sm font-semibold text-yellow-600 mt-4">
            Bánh Kem Cho Nữ 2010-3
          </h2>
          <p class="text-xs text-gray-600 mt-2">
            Size 14: 120.000đ; Size 16: 155.000đ;
            <br />
            Size 18: 185.000đ; Size 20: 220.000đ.
            <br />
            Nhận đặt bánh mẫu theo yêu cầu:
            <br />
            0931 60 20 60.
          </p>
          <p class="text-xs text-red-600 font-bold mt-2">
            185,000 VND
          </p>
          <i class="fas fa-shopping-cart text-red-600 mt-2"></i>
        </div>
      </div>
    </div>
 <!--SP banchay-->


 <div style="
    border: 2px solid orange; 
    padding: 10px; 
    background-color: orange; 
    width: fit-content; 
    margin: 0 auto; 
        border-radius: 20px;
    text-align: center;">
    <a href="sanpham.php" >
        Xem Tất Cả
    </a>
</div>


<div class="container9">
   <div class="content">
    <div class="news">
     <img alt="Halloween cake with an eyeball decoration and other Halloween-themed decorations" height="300" src="img/anhnayne.jpg" width="600"/>
     <div class="news-title">
      HALLOWEEN CAKE - NHANH TAY CHỌN NGAY
     </div>
     <div class="news-description">
      Halloween, thời gian của sự bí ẩn và niềm vui đang đến rất gần.
     </div>
     <a class="read-more" href="tintucvasukien.php">
      XEM THÊM
     </a>
    </div>
    <div class="facebook">
    <iframe allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowfullscreen="true" frameborder="0" height="500" scrolling="no" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D61570251001444&amp;tabs=timeline&amp;width=340&amp;height=500&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId" style="border:none;overflow:hidden" width="340"></iframe>
    </div>
   </div>
   <div class="footer">
    <i class="fas fa-circle">
    </i>
    <i class="fas fa-circle">
    </i>
    <i class="fas fa-circle">
    </i>
    <i class="fas fa-circle">
    </i>
    <i class="fas fa-circle">
    </i>
    <i class="fas fa-circle">
    </i>
    <i class="fas fa-circle">
    </i>
    <i class="fas fa-circle">
    </i>
    <i class="fas fa-circle">
    </i>
    <i class="fas fa-circle">
    </i>
   </div>
  </div>
<style>
   body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #fff;
}
.container9 {
    width: 90%;
    margin: 0 auto;
    padding: 20px 0;
}
.header-with-lines {
    position: relative;
    text-align: center;
    font-size: 24px;
    color: #f5a623;
    margin-bottom: 20px;
}

.header-with-lines::before, .header-with-lines::after {
    content: '';
    position: absolute;
    top: 50%;
    width: 50px;
    height: 1px;
    background-color: #f5a623;
    transform: translateY(-50%);
}

.header-with-lines::before {
    left: -60px;
}

.header-with-lines::after {
    right: -60px;
}
.content {
    display: flex;
    justify-content: space-between;
}
.news {
    width: 65%;
}
.news img {
    width: 100%;
    border-radius: 10px;
}
.news-title {
    font-size: 18px;
    color: #f5a623;
    margin: 10px 0;
}
.news-description {
    font-size: 14px;
    color: #333;
    margin-bottom: 10px;
}
.read-more {
    font-size: 14px;
    color: #d0021b;
    text-decoration: none;
}
.facebook {
    width: 30%;
}
.facebook iframe {
    width: 100%;
    border: none;
    border-radius: 10px;
}
.footer {
    text-align: center;
    margin-top: 20px;
}
.footer i {
    color: #f5a623;
    margin: 0 5px;
}
</style>
  <!--lienhe-->
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
<div>
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
    Hotline: 0931 60 20 60 - 0763 679 363 - Mr Nien
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
