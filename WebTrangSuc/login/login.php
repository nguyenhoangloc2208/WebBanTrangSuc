<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="top">
            <h1 id="title" class="hidden"><span id="logo"> <span>Your Logo</span></span></h1>
        </div>
        <div class="login-box animated fadeInUp">
            <div class="box-header">
                <h2>Đăng nhập</h2>
            </div>
            <form action="login_submit.php" method="POST">
                <label for="username">Tên đăng nhập</label>
                <br>
                <input type="text" id="username" name="username">
                <br>
                <label for="password">Mật khẩu</label>
                <br>
                <input type="password" id="password" name="password">
                <br>
                <button type="submit" name="submit">Đăng nhập</button>
                <br>
            </form>
            <a href="../sign-up/sign-up.php">
                <p class="small">Tạo tài khoản mới</p>
            </a>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#logo').addClass('animated fadeInDown');
            $("input:text:visible:first").focus();
        });
        $('#username').focus(function() {
            $('label[for="username"]').addClass('selected');
        });
        $('#username').blur(function() {
            $('label[for="username"]').removeClass('selected');
        });
        $('#password').focus(function() {
            $('label[for="password"]').addClass('selected');
        });
        $('#password').blur(function() {
            $('label[for="password"]').removeClass('selected');
        });
    </script>
</body>

</html>
