<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_bantrangsuc";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Kết nối thất bại: " . $conn->connect_error);
}

// Xử lý dữ liệu đăng ký
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $msv = $_POST["student_id"];
  $hoTen = $_POST["fullname"];
  $email = $_POST["email"];
  $gioiTinh = $_POST["gender"];
  $soThich = implode(", ", $_POST["soThich"]);
  $quocTich = $_POST["nationality"];
  $chuThich = $_POST["chuThich"];

  // Kiểm tra và xác minh dữ liệu ở đây (không hiển thị ở đây để tập trung vào việc chèn dữ liệu)
  $message = "";
  // Thực hiện truy vấn SQL để chèn dữ liệu vào cơ sở dữ liệu
  $sql = "INSERT INTO user (username, password, student_id, full_name, email, gender, nationality, notes) VALUES (?, ?, ?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sssssss", $msv, $hoTen, $email, $gioiTinh, $soThich, $quocTich, $chuThich);

  $message = ""; // Khởi tạo biến $message
  if ($stmt->execute()) {
    $message = "Đăng ký thành công!";
  } else {
    $message = "Đăng ký thất bại: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Đăng ký</title>
  <link rel="stylesheet" href="./css/dangkythanhvien.css" />
</head>

<body>
  <div class="container">
    <h1>ĐĂNG KÝ THÀNH VIÊN</h1>
    <form onsubmit="return dktvForm(event)">
      <ul>
        <li>
          <span>Mã sinh viên</span>
          <input type="text" id="msv" name="student_id" />
        </li>
        <li>
          <span>Họ và tên</span>
          <input type="text" id="hoTen" name="fullname" />
        </li>
        <li>
          <span>Email</span>
          <input type="text" id="email" name="email" />
        </li>
        <li>
          <span>Giới tính</span>
          <div class="gender gioiTinh">
            <input type="radio" name="gender" value="Nam" />
            <label>Nam</label>
            <input type="radio" name="gender" value="Nữ" />
            <label>Nữ</label>
          </div>
        </li>
        <li>
          <span>Sở thích</span>
          <div class="soThich">
            <input type="checkbox" name="soThich[]" /><label for="">Đọc sách</label>
            <input type="checkbox" name="soThich[]" /><label for="">Du lịch</label>
            <input type="checkbox" name="soThich[]" /><label for="">Âm nhạc</label>
            <input type="checkbox" name="soThich[]" /><label for="">Ẩm thực</label>
            <input type="checkbox" name="soThich[]" /><label for="">Khác</label>
          </div>
        </li>
        <li>
          <span>Quốc tịch</span>
          <select name="nationality" id="quocTich">
            <option value="" disabled selected>Chọn quốc tịch</option>
            <option value="1">Việt Nam</option>
            <option value="2">Lào</option>
            <option value="3">Campuchia</option>
          </select>
        </li>
        <li>
          <span>Chú thích</span>
          <textarea name="" id="chuThich" cols="30" rows="10" id="chuThich"></textarea>
        </li>
      </ul>
      <button type="submit" name="submit" id="submitBtn">Đăng ký</button>
    </form>
  </div>
  <div class="sss">
    <?php if (isset($message)) { ?>
      <p>
        <?php echo $message; ?>
      </p>
    <?php } ?>
  </div>

  <script src="./script/dangkythanhvien.js"></script>
</body>

</html>