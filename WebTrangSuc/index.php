<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="./style.css" rel="stylesheet" />
  <title>Cửa hàng trang sức Cát Tường</title>
</head>

<body>
  <header>
    <div id="subnav">
      <a href="index.php">
        <h1>Cửa hàng trang sức Cát Tường</h1>
      </a>
      <li class="search-form" action="/search" method="get">
        <input type="text" name="query" placeholder="Dây chuyền, bông tai, lắc tay,..." />
        <button class="btn1" type="submit">Tìm kiếm</button>
      </li>
      <li class="login-register">
        <a href="#" class="login">Đăng nhập</a>
        <a href="#" class="register">Đăng ký</a>
      </li>
    </div>
    <div class="wrapper">
      <form action="" id="form-login">
        <h1 class="form-heading">Form đăng nhập</h1>
        <div class="form-group">
          <input type="text" class="form-input" placeholder="Tên đăng nhập" />
        </div>
        <div class="form-group">
          <input type="password" class="form-input" placeholder="Mật khẩu" />
        </div>
        <input type="submit" value="Đăng nhập" class="form-submit" />
      </form>
    </div>
    <!-- Thanh điều hướng -->
    <nav>
      <ul class="hmenu">
        <li><a href="index.php">Trang chủ</a></li>
        <li>
          <a>Sản phẩm</a>
          <ul class="sub-menu">
            <li><a href="#">Dây chuyền</a></li>
            <li><a href="#">Mặt dây chuyền</a></li>
            <li><a href="#">Bông tai</a></li>
            <li><a href="#">Lắc tay</a></li>
            <li><a href="#">Đồng hồ</a></li>
            <li><a href="#">Nhẫn</a></li>
          </ul>
        </li>
        <li>
          <a>Chất liệu</a>
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
    <div class="main-left">
      <section class="content">
        <div class="product">
          <a href="details.php"><img src="./image/1.jpg" alt="Product 1" /></a>
          <h3>Dây chuyền bạc mặt thánh giá</h3>
          <p>
            Dây chuyền được làm từ chất liệu bạc S925, mặt dây chuyền tạo hình
            thánh giá và được nạm đá zicron. Sản phẩm phù hợp để sử dụng cho
            mọi dịp
          </p>
          <span>Giá: 699.000vnđ</span>
          <a href="details.php"><button>Chi tiết sản phẩm</button></a>
        </div>

        <div class="product">
          <a href="details.php"><img src="./image/2.jpg" alt="Product 2" /></a>
          <h3>Lắc tay vàng charm hồ điệp</h3>
          <p>
            Lắc tay được làm từ chất liệu bạc vàng 999, charm được lấy cảm
            hứng từ hồ điệp bay lượn và cùng chất liệu với Dây. Sản phẩm phù
            hợp để sử dụng cho mọi dịp
          </p>
          <span>Giá: 1.809.000vnđ</span>
          <a href="details.php"><button>Chi tiết sản phẩm</button></a>
        </div>

        <div class="product">
          <a href="details.php"><img src="./image/3.jpg" alt="Product 3" /></a>
          <h3>Hoa tai bạc hình hoa anh đào</h3>
          <p>
            Hoa tai được làm từ chất liệu bạc S925, được nạm đá zicron và tạo
            hình nụ hoa anh đào chớm nở, mang vẻ đẹp tinh tế và thanh lịch .
            Sản phẩm phù hợp để sử dụng cho mọi dịp
          </p>
          <span>Giá: 459.000vnđ</span>
          <a href="details.php"><button>Chi tiết sản phẩm</button></a>
        </div>

        <div class="product">
          <a href="details.php"><img src="./image/4.jpg" alt="Product 4" /></a>
          <h3>Mặt dây chuyền bạc đính đá kim cương</h3>
          <p>
            Một thiết kế đầy sang trọng đến từ trang sức Cát Tường, dây chuyền
            bạc hình tròn cách điệu xinh xắn này ở trên cổ bạn, khi đi làm, đi
            chơi hay hẹn hò, sẽ thật tuyệt vời phải không nào.
          </p>
          <span>Giá: 11.325.000vnđ</span>
          <a href="details.php"><button>Chi tiết sản phẩm</button></a>
        </div>

        <div class="product">
          <a href="details.php"><img src="./image/5.jpg" alt="Product 5" /></a>
          <h3>Đồng hồ mạ vàng Adriatica</h3>
          <p>
            Dây chuyền được làm từ chất liệu thép không rỉ kèm mạ vàng 24K.
            Sản phẩm phù hợp để sử dụng cho những dịp lễ trang trọng.
          </p>
          <span>Giá: 2.189.000vnđ</span>
          <a href="details.php"><button>Chi tiết sản phẩm</button></a>
        </div>

        <div class="product">
          <a href="details.php"><img src="./image/6.png" alt="Product 6" /></a>
          <h3>Nhẫn vàng khắc hình rồng</h3>
          <p>
            Nhẫn được làm từ chất liệu vàng 999, được nghệ nhân khắc hình rồng
            bay mang ý nghĩa thịnh vượng, trung tâm nạm kim cương 0.5 carat.
            Sản phẩm phù hợp để sử dụng cho những dịp lễ trang trọng.
          </p>
          <span>Giá: 14.899.000vnđ</span>
          <a href="details.php"><button>Chi tiết sản phẩm</button></a>
        </div>

        <div class="product">
          <a href="details.php"><img src="./image/7.jpg" alt="Product 7" /></a>
          <h3>Đồng hồ dây da màu hồng mộng mơ</h3>
          <p>
            Đồng hồ đeo tay dây da màu hồng mộng mơ là một món phụ kiện thời
            trang tinh tế và nữ tính. Màu hồng mộng mơ thường tượng trưng cho
            sự tươi mới, ngọt ngào và tình yêu, tạo nên một cái nhìn đáng yêu
            và dịu dàng.
          </p>
          <span>Giá: 999.999vnđ</span>
          <a href="details.php"><button>Chi tiết sản phẩm</button></a>
        </div>

        <div class="product">
          <a href="details.php"><img src="./image/8.jpg" alt="Product 8" /></a>
          <h3>Dây chuyền vàng kép mặt dây hình trái tim</h3>
          <p>
            Dây chuyền vàng dáng kép với mặt hình trái tim là một món đồ trang
            sức đầy ý nghĩa và lãng mạn. Sản phẩm này thường được thiết kế
            tinh tế và phù hợp để tặng cho người thân yêu, bạn bè hoặc đối tác
            trong các dịp đặc biệt như kỷ niệm, sinh nhật, lễ tình nhân.
          </p>
          <span>Giá: 459.000vnđ</span>
          <a href="details.php"><button>Chi tiết sản phẩm</button></a>
        </div>

        <div class="product">
          <a href="details.php"><img src="./image/9.jpg" alt="Product 9" /></a>
          <h3>Dây chuyền vàng mặt vòng hoa nguyệt quế</h3>
          <p>
            Nhẫn được làm từ chất liệu vàng 999 theo dáng cổ điển, mặt dây
            thiết kế hình vòng hoa nguyệt quế tạo cảm giác nhẹ nhàng, tinh tế.
            Sản phẩm phù hợp để sử dụng cho mọi dịp.
          </p>
          <span>Giá: 769.000vnđ</span>
          <a href="details.php"><button>Chi tiết sản phẩm</button></a>
        </div>

        <div class="product">
          <a href="details.php"><img src="./image/10.jpg" alt="Product 10" /></a>
          <h3>Cặp nhẫn đính hôn nạm đá màu rosegold</h3>
          <p>
            Cặp nhẫn được làm từ chất liệu vàng 999, được nghệ nhân chế tác
            màu rosegold thời thượng vô cung hợp mốt, trendy; trung tâm nhẫn
            nữ nạm kim cương 1 carat.
          </p>
          <span>Giá: 18.899.000vnđ</span>
          <a href="details.php"><button>Chi tiết sản phẩm</button></a>
        </div>

        <div class="product">
          <a href="details.php"><img src="./image/11.jpg" alt="Product 11" /></a>
          <h3>Khuyên tai vàng nạm kim cương tự nhiên</h3>
          <p>
            Khuyên tai được làm từ chất liệu vàng 9999, được nghệ nhân thiết
            kế lồng ghép vào nhau, bên trên nạm thêm 45 viên kim cương tự
            nhiên, vô cùng sang trọng và đẳng cấp. Sản phẩm phù hợp để sử dụng
            cho những dịp lễ trang trọng.
          </p>
          <span>Giá: 22.099.000vnđ</span>
          <a href="details.php"><button>Chi tiết sản phẩm</button></a>
        </div>

        <div class="product">
          <a href="details.php"><img src="./image/12.jpg" alt="Product 12" /></a>
          <h3>(Mua 1 tặng 1 - nhẫn vàng) Dây chuyền vàng</h3>
          <p>
            Dây chuyền được làm từ chất liệu vàng 999, dạng cổ điển, vô cùng
            tinh tế khi đeo lên. Sản phẩm phù hợp để sử dụng cho mọi dịp.
          </p>
          <span>Giá: 209.000vnđ</span>
          <a href="details.php"><button>Chi tiết sản phẩm</button></a>
        </div>
      </section>
    </div>
    <div class="main-right">
      <div class="intro">
        <h2>Giới thiệu</h2>
        <iframe src="https://youtube.com/embed/djH4tUslaLE"></iframe>
        <p>ASM WEB1013 là Assignment môn xây dựng website</p>
      </div>
      <div class="card">
        <h2>Follow Me</h2>
        <img width="50%" src="image/social.jpg" alt="" />
      </div>
      <div class="card">
        <h2>Liên hệ</h2>
        <p>Điện thoại: 0332649498</p>
        <p>Email: nguyenhoangloc2208@gmail.com</p>
      </div>
      <button class="asm2" onclick="window.location.href='bosuutap.php'">
        Bộ sưu tập
      </button>
      <button class="asm2" onclick="window.location.href='banhang.php'">
        Bán Hàng
      </button>
      <button class="asm2" onclick="window.location.href='dangkythanhvien.php'">
        Đăng ký Thành Viên
      </button>
    </div>
  </div>

  <footer>
    <p>&copy; 2023 Cửa hàng trang sức Cát Tường. All rights reserved.</p>
  </footer>
  <script>
    const loginLink = document.querySelector(".login");
    const registerLink = document.querySelector(".register");
    const wrapper = document.querySelector(".wrapper");

    loginLink.addEventListener("click", () => {
      wrapper.style.display = "flex";
    });

    registerLink.addEventListener("click", () => {
      wrapper.style.display = "flex";
    });

    wrapper.addEventListener("click", (event) => {
      if (event.target === wrapper) {
        wrapper.style.display = "none";
      }
    });
  </script>
</body>

</html>