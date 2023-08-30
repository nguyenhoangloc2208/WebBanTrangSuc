<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- style -->
  <link href="./style.css" rel="stylesheet">
  <title>Cửa hàng trang sức Cát Tường</title>
  
</head>
<body>
  <header>
    <div id="subnav">
        <a href="index.html"><h1>Cửa hàng trang sức Cát Tường</h1></a>
      <!-- Thanh tìm kiếm -->
      <li class="search-form" action="/search" method="get">
        <input type="text" name="query" placeholder="Dây chuyền, bông tai, lắc tay,...">
        <button class="btn1" type="submit">Tìm kiếm</button>
      </li>
      <li class="login-register">
        <a href="#" class="login">Đăng nhập</a>
        <a href="#" class="register">Đăng ký</a>
      </li>
    </div>
    <!-- Thanh điều hướng -->
    <nav>
        <ul class="hmenu">
          <li><a href="index.html">Trang chủ</a></li>
          <li><a>Sản phẩm</a>
            <ul class="sub-menu">
              <li><a href="#">Dây chuyền</a></li>
              <li><a href="#">Mặt dây chuyền</a></li>
              <li><a href="#">Bông tai</a></li>
              <li><a href="#">Lắc tay</a></li>
              <li><a href="#">Đồng hồ</a></li>
              <li><a href="#">Nhẫn</a></li>
            </ul>
          </li>
          <li><a>Chất liệu</a>
            <ul class="sub-menu">
              <li><a href="#">Mạ vàng</a></li>
              <li><a href="#">Bạc S925</a></li>
              <li><a href="#">Vàng 999</a></li>
            </ul>
          </li>
          <li><a href="#">Thanh toán</a></li>
          <li><a href="#">Hướng dẫn mua hàng</a></li>
          <li><a href="#">Liên hệ</a></li>
        </ul>
    </nav>
  </header>
  <div class="row">
    <main>

      <!-- Hàng mới về -->
      <section class="content">
        <div class="product-details">
            <img src="./image/1.jpg" alt="Dây chuyền bạc mặt thánh giá">
            <h3>Dây chuyền bạc mặt thánh giá</h3>
            <p>Dây chuyền được làm từ chất liệu bạc S925, mặt dây chuyền tạo hình thánh giá và được nạm đá zicron. Sản phẩm phù hợp để sử dụng cho mọi dịp</p>
            <span>Giá: 699.000vnđ</span>
            <span>Còn 15 hàng</span>
            <form class="cart" action="">
                <input type="number" step="1" min="1" max="15" value="1">
                <a href="#"><button>Thêm vào giỏ hàng</button></a>
            </form>
        </div>
      </section>
      
    </main>
    <div class="main-right">
      <div class="card">
        <h2>Giới thiệu</h2>
        <iframe width="350" height="230" src="https://youtube.com/embed/djH4tUslaLE"></iframe>
        <p>ASM WEB1013 là Assignment môn xây dựng website</p>
      </div>
      <div class="card">
        <h2>Follow Me</h2>
        <img width="50%" src="image/social.jpg" alt="">
      </div>
      <div class="card">
        <h2>Liên hệ</h2>
        <p>Điện thoại: 0332649498</p>
        <p>Email: nguyenhoangloc2208@gmail.com</p>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 2023 Cửa hàng trang sức Cát Tường. All rights reserved.</p>
  </footer>
</body>
</html>