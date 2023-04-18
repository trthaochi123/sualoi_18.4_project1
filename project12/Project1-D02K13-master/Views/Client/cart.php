<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/cart.css">
    <link rel="shortcut icon" href="img/favicon-16x16.png">
    <title>DALLAS Furniture</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>
<script>
    function buyNow() {
        document.getElementById('buy-now').submit();
    }
</script>

<body>
    <div class="main">
        <header class="header">
            <!-- thong bao ngắn -->
            <nav class="header__navbar">
                <p>Ưu đãi đến 50% tất cả sản phẩm đến 26.3. Đừng bỏ lỡ</p>
            </nav>

            <!-- BEGIN NAV -->
            <!-- nav 1 -->
            <div class="grid">
                <nav class="header__navbar--elm">
                        <ul class="header__navbar-list">
                            <img src="img/vn flag.png" alt="tieng viet">
                            <li class="header__navbar-item">Viet Nam</li>
                            <li class="header__navbar-phoneicon">
                                <i class="fa-solid fa-phone"></i>
                            </li>
                            <a class="header__navbar-phone header__navbar-phone-icon-hover" href="tel:1900 7220">1900 7220</a>
                            <li class="header__navbar-item">
                                <a class="header__navbar-item-link">Giới thiệu</a>
                            </li>
                            <li class="header__navbar-item">
                                <a class="header__navbar-item-link">Khuyến mãi</a>
                            </li>
                        </ul>

                    <ul class="header__navbar-icon">
                        <li class="header__navbar-item">
                            <i class="ti-location-pin"></i>
                        </li>
                        <li class="header__navbar-item">
                            <i class="ti-shopping-cart">
                              <?php
                        // Hiển thị số lượng sản phẩm theo mã sản phẩm
                        if(isset($_SESSION["cart"])){
                            $totals = 0;
                            foreach($arr['product'] as $prd_id=>$qtt){
                                $totals++;
                            }
                            echo $totals;
                        }
                        else{
                            echo 0;
                        }
                        ?>
                            </i>
                        </li>
                        <li class="header__navbar-item">
                            <a href="" class="login__navbar-item login__navbar-item--strong">Đăng nhập</a>
                            <i class="ti-user"></i>  
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- nav 2 -->
            <div class="container"> 
                <div class="menu__navbar">
                    <ul id="menu_nav">

                      <!-- 3 gạch icon -->
                        <li class ="menu__navbar-btn-icon">
                            <button class="btn btn-primary my-5 btn-light bg-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                            <img class="menu_navbar-menu-icon" src="./img/menu_icon.png" alt="">
                            </button>

                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <img class="menu__navbar-logo" src="./img/logo.jpg" alt="logo">
                          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>

                        <div class="offcanvas-body ">
                          <div class="dropdown mt-3">
                            <button style="color: black" class="btn btn-secondary dropdown-toggle bg-light" type="button" data-bs-toggle="dropdown">
                              Sofa và Armchair
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Sofa</a></li>
                              <li><a class="dropdown-item" href="#">Armchair</a></li>
                              <li><a class="dropdown-item" href="#">Ghế dài</a></li>
                              <li><a class="dropdown-item" href="#">Ghế thư giãn</a></li>
                            </ul>
                          </div>

                          <div class="dropdown mt-3">
                            <button style="color: black" class="btn btn-secondary dropdown-toggle bg-light" type="button" data-bs-toggle="dropdown">
                              Bàn
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Bàn nước</a></li>
                              <li><a class="dropdown-item" href="#">Bàn ăn</a></li>
                              <li><a class="dropdown-item" href="#">Bàn làm việc</a></li>
                              <li><a class="dropdown-item" href="#">Bàn trang điểm</a></li>
                            </ul>
                          </div>

                          <div class="dropdown mt-3">
                            <button style="color: black" class="btn btn-secondary dropdown-toggle bg-light" type="button" data-bs-toggle="dropdown">
                              Ghế
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Ghế ăn</a></li>
                              <li><a class="dropdown-item" href="#">Ghế bar</a></li>
                              <li><a class="dropdown-item" href="#">Ghế làm việc</a></li>
                            </ul>
                          </div>

                          <div class="dropdown mt-3">
                            <button style="color: black" class="btn btn-secondary dropdown-toggle bg-light" type="button" data-bs-toggle="dropdown">
                              Giường ngủ
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Giường</a></li>
                              <li><a class="dropdown-item" href="#">Bàn đầu giường</a></li>
                              <li><a class="dropdown-item" href="#">Nệm</a></li>
                            </ul>
                          </div>

                          <div class="dropdown mt-3">
                            <button style="color: black" class="btn btn-secondary dropdown-toggle bg-light" type="button" data-bs-toggle="dropdown">
                                Tủ và Kệ
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Tủ tivi</a></li>
                              <li><a class="dropdown-item" href="#">Tủ trưng bày</a></li>
                              <li><a class="dropdown-item" href="#">Tủ rượu</a></li>
                              <li><a class="dropdown-item" href="#">Tủ quần áo</a></li>
                              <li><a class="dropdown-item" href="#">Tủ giày</a></li>
                            </ul>
                          </div>

                          <div class="dropdown mt-3">
                            <button style="color: black" class="btn btn-secondary dropdown-toggle bg-light" type="button" data-bs-toggle="dropdown">
                                Bếp
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Tủ bếp</a></li>
                              <li><a class="dropdown-item" href="#">Quầy bar</a></li>
                              <li><a class="dropdown-item" href="#">Phụ kiện bếp</a></li>
                            </ul>
                          </div>

                        </div>
                            </div>
                        </li>

                        <!-- Logo navbar -->
                        <li>
                             <a class ="menu__navbar-logo-office" href="index.php">
                                <img class="menu__navbar-logo-office-item" src="./img/logo.jpg" alt="">
                            </a> 
                        </li>

                        <!-- Menu Item -->
                        <li class="menu_nav-text">
                            <a class="menu__navbar-menu-item" href="">SẢN PHẨM</a>
                            <i class ="ti-angle-down"></i>
                            <ul class="subnav">
                                <li><a class="menu__navbar-menu-item-detail" href="">Sofa</a></li>
                                <li><a class="menu__navbar-menu-item-detail" href="">Bàn ăn</a></li>
                                <li><a class="menu__navbar-menu-item-detail" href="">Giường ngủ</a></li>
                                <li><a class="menu__navbar-menu-item-detail" href="">Tủ kệ</a></li>
                            </ul>
                        </li>
                        <li class="menu_nav-text">
                            <a class ="menu__navbar-menu-item" href="">PHÒNG</a>
                            <i class ="ti-angle-down"></i>
                            <ul class="subnav">
                                <li><a class="menu__navbar-menu-item-detail" href="">Phòng ăn</a></li>
                                <li><a class="menu__navbar-menu-item-detail" href="">Phòng ngủ</a></li>
                                <li><a class="menu__navbar-menu-item-detail" href="">Phòng làm việc</a></li>
                                <li><a class="menu__navbar-menu-item-detail" href="">Tủ bếp</a></li>
                            </ul>
                        </li>
                        <li>
                          <a class ="menu__navbar-menu-item" href="">THIẾT KẾ NỘI THẤT</a>
                        </li>
                        <li>
                          <a class ="menu__navbar-menu-item" href="">BỘ SƯU TẬP</a>
                        </li>
                        <li>
                          <a class ="menu__navbar-menu-item" href="">GÓC CẢM HỨNG</a>
                        </li>

                        <!-- Search BTN -->
                        <li>
                          <div class="container">
                            <form id="animated">
                              <i class="fa fa-search" aria-hidden="true"></i><input type="text" name="search" placeholder="Tìm sản phẩm...">
                            </form>
                        </li>
                        <!-- END Search BTN -->

                    </ul>

                    <!-- END NAV -->
                </div>
            </div>    

        </header>

        <!-- CART -->

        <div class="small-container cart-page">
        <?php
                    if(isset($_SESSION['cart'])) {
                    ?>
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                <form method="post" action="?redirect=<?= $redirect ?>&action=update">
                <?php
                            $total_price_all = 0;
                            foreach ($arr['product'] as $productID => $item) {
                                $total_price = $item['amount'] * $item["price"];
                                $total_price_all += $total_price; // Tính tổng tiền sản phẩm trong giỏ hành
                            ?>
                <tr>
                    <td >
                      <div class="cart-info">
                      <img src="img/<?= $item['image'] ?>">
                        <div>
                        <h5><?= $item['name'] ?></h5>
                          <br>
                          <a href="?redirect=cart&action=del&id=<?= $productID ?>">Xóa</a>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                        <input type="number" id="quantity" name="qtt[<?= $productID ?>]" class="form-control form-blue quantity" value="<?= $item['amount'] ?>" min="1" max="<?= $item['quantity'] ?>">
                      </div>
                    </td>
                    <td>
                    <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b><?= number_format($item['price']); ?>đ</b></div>
                    </td>
                </tr>
                <?php } ?>
            </table>
            <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                    <button id="update-cart" class="btn btn-success" type="submit" name="sbm">Cập nhật giỏ hàng</button>
                                </div>
            <div class="total-price">
              <table>
                <tr>
                  <td>Total</td>
                  <td>
                  <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b><?= number_format($total_price_all); ?>đ</b></div>
                  </td>
                </tr>
              </table>
            </div>

        </div>
        </form>
      
     <!--	Customer Info	-->
     <div id="customer">
                        <form id="buy-now" method="post" action="?redirect=cart&action=checkaccess">
                            <div class="row">

                                <div id="customer-name" class="col-lg-4 col-md-4 col-sm-12">
                                    <input placeholder="Họ và tên (bắt buộc)" type="text" name="fullname" class="form-control" required>
                                </div>
                                <div id="customer-phone" class="col-lg-4 col-md-4 col-sm-12">
                                    <input placeholder="Số điện thoại (bắt buộc)" type="text" name="phone" class="form-control" required>
                                </div>
                                <div id="customer-mail" class="col-lg-4 col-md-4 col-sm-12">
                                    <input placeholder="Email (bắt buộc)" type="text" name="email" class="form-control" required>
                                </div>
                                <div id="customer-add" class="col-lg-12 col-md-12 col-sm-12">
                                    <input placeholder="Địa chỉ nhà riêng hoặc cơ quan (bắt buộc)" type="text" name="address" class="form-control" required>
                                </div>

                            </div>
                        </form>
                        
                        <div class="row">
                            <div class="by-now col-lg-6 col-md-6 col-sm-12">
                                <a href="#" onClick="buyNow()">
                                    <b>Mua ngay</b>
                                    <span>Giao hàng tận nơi siêu tốc</span>
                                </a>
                            </div>
                            <div class="by-now col-lg-6 col-md-6 col-sm-12">
                                <a href="#">
                                    <b>Trả góp Online</b>
                                    <span>Vui lòng call (+84) 0988 550 553</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--	End Customer Info	-->
    
                    <?php } else {
                        echo '<div class="alert alert-danger mt-3">Giỏ hàng của bạn hiện không có sản phẩm nào !</div>';
                    } ?>
        

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>



</html>