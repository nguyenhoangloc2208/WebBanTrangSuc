<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Thông Tin Tài Khoản</title>
</head>

<body>
    <div class="container">
        <h1>Thông Tin Tài Khoản</h1>
        <?php
        // Kết nối tới database
        include '../config.php';

        // Bắt đầu phiên làm việc
        session_start();

        // Kiểm tra nếu chưa đăng nhập thì chuyển hướng về trang đăng nhập
        if (!isset($_SESSION['user'])) {
            header('Location: login.php');
            exit();
        }

        // Lấy thông tin tài khoản từ session
        $username = $_SESSION['user'];
        $sql = "SELECT username, password, student_id, full_name, email, gender, nationality, notes FROM user WHERE username = '$username'";
        $result = mysqli_query($connect, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            ?>
            <div class="info-item">
                <span class="info-label">Tên đăng nhập:</span>
                <span class="info-value">
                    <?php echo $row['username']; ?>
                </span>
            </div>
            <!-- Để an toàn, không nên hiển thị mật khẩu -->
            <!-- <div class="info-item">
                <span class="info-label">Mật khẩu:</span>
                <span class="info-value password"><?php echo $row['password']; ?></span>
            </div> -->
            <div class="info-item">
                <span class="info-label">Mã sinh viên:</span>
                <span class="info-value">
                    <?php echo $row['student_id']; ?>
                </span>
            </div>
            <div class="info-item">
                <span class="info-label">Họ và tên:</span>
                <span class="info-value">
                    <?php echo $row['full_name']; ?>
                </span>
            </div>
            <div class="info-item">
                <span class="info-label">Email:</span>
                <span class="info-value">
                    <?php echo $row['email']; ?>
                </span>
            </div>
            <div class="info-item">
                <span class="info-label">Giới tính:</span>
                <span class="info-value">
                    <?php echo $row['gender']; ?>
                </span>
            </div>
            <div class="info-item">
                <span class="info-label">Quốc tịch:</span>
                <span class="info-value">
                    <?php echo $row['nationality']; ?>
                </span>
            </div>
            <div class="button-container">
                <button class="edit-button"><a href="../index.php"><i class="fa-solid fa-house"></i> Trang chủ</a></button>
                <button class="edit-button"><a href="edit_profile.php">Chỉnh Sửa</a></button>
            </div>
            <?php
        } else {
            echo "Không tìm thấy thông tin tài khoản.";
        }
        ?>
    </div>
</body>

</html>