<?php
session_start(); // Bắt đầu session

// Kết nối cơ sở dữ liệu
$conn = new mysqli('localhost', 'root', '', 'webbanbanh2024');

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Xử lý khi form được submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']); // Loại bỏ khoảng trắng
    $password = trim($_POST['password']); // Loại bỏ khoảng trắng

    // Truy vấn thông tin từ cơ sở dữ liệu
    $stmt = $conn->prepare("SELECT password FROM admins WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // So sánh mật khẩu nhập vào với mật khẩu đã mã hóa trong cơ sở dữ liệu
        if (password_verify($password, $hashed_password)) {
            // Đăng nhập thành công
            $_SESSION['admin_logged_in'] = true;
            header('Location: admin.php');
            exit();
        } else {
            $error = "Sai mật khẩu!";
        }
    } else {
        $error = "Tên đăng nhập không tồn tại!";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<h3>HI CHÀO BẠN ĐÂY LÀ PHẦN ĐĂNG NHẬP CỦA ADMIN VUI VÒNG KHÔNG ĐĂNG NHẬP TẠI ĐÂY!</h3>
<h2>Login Form</h2>

<form action="admin.php" method="post"> <!-- Chuyển action thành trang hiện tại để gửi dữ liệu -->
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="username"><b>Username</b></label> <!-- Đổi từ uname thành username -->
    <input type="text" placeholder="Enter Username" name="username" required> <!-- Sửa lại name là username -->

    <label for="password"><b>Password</b></label> <!-- Đổi từ psw thành password -->
    <input type="password" placeholder="Enter Password" name="password" required> <!-- Sửa lại name là password -->
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
