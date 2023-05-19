<?php
    session_start();
//    if (!isset($_SESSION['dangnhap'])) {
//        header('Location: index.php');
//    }
    if (isset($_GET['login'])) {
        $dangxuat = $_GET['login'];
    } else {
        $dangxuat = '';
    }
    if ($dangxuat == 'dangxuat') {
        session_destroy();
        header('Location: vechungtoi.php');
    }
    include 'header.php';
?>

<main class="page">
    <section class="clean-block about-us">
        <section class="clean-block about-us">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Đội ngũ bán hàng của chúng tôi</h2>
                    <p>Luôn nhiệt tình chọn lọc ra những mẫu mới nhất</p>
                </div>
                <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block"
                                                                      src="assets/img/avatars/avatar2.jpg"/>
                            <div class="card-body info" style="height: 178.438px;">
                                <h4 class="card-title">Nguyễn Kim Quân</h4>
                                <p class="card-text">Founder</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i
                                        class="icon-social-instagram"></i></a><a href="#"><i
                                        class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block"
                                                                      src="assets/img/avatars/avatar2.jpg"/>
                            <div class="card-body info" style="height: 178.438px;">
                                <h4 class="card-title">Tạ Hoàng Hải</h4>
                                <p class="card-text">Co-Founder</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i
                                        class="icon-social-instagram"></i></a><a href="#"><i
                                        class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card text-center clean-card"><img class="card-img-top w-100 d-block"
                                                                      src="assets/img/avatars/avatar2.jpg"/>
                            <div class="card-body info" style="height: 177.438px;">
                                <h4 class="card-title">Nguyễn Trọng Đạo</h4>
                                <p class="card-text">Co-Founder</p>
                                <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i
                                        class="icon-social-instagram"></i></a><a href="#"><i
                                        class="icon-social-twitter"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</main>
<footer class="page-footer dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h5>Bắt đầu</h5>
                <ul>
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Đăng nhập</a></li>
                    <li><a href="#">Giỏ hàng</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Thông tin</h5>
                <ul>
                    <li><a href="#">Liên lạc</a></li>
                    <li><a href="#">Giưới thiệu</a></li>
                    <li><a href="#">Reviews</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Hỗ trợ</h5>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">SĐT</a></li>
                    <li><a href="#">Diễn đàn&nbsp;</a></li>
                </ul>
            </div>
            <div class="col-sm-3">
                <h5>Hợp pháp</h5>
                <ul>
                    <li><a href="#">Điều kiện dịch vụ</a></li>
                    <li><a href="#">Điều kiện sử dụng</a></li>
                    <li><a href="#">Chính sách riêng tư</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- <div class="footer-copyright">
        <p>© 2022 Copyright Text</p>
    </div> -->
</footer>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script src="assets/js/vanilla-zoom.js"></script>
<script src="assets/js/theme.js"></script>
</body>

</html>