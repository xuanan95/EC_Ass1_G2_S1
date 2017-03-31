<link rel="stylesheet" href="css/suggestion-box.css">
<!--<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>-->
<script src="js/suggestion-box.min.js"></script>

<div class="container-fluid header" id="logo">
    <div class="col-xs-12 col-sm-4 col-md-2">
        <a href="homepage.php"><img src="img/logo1.png" alt="logo"></a>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-5 text-center">
        <div id="custom-search-input" style="margin: 1.8em 0;">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Tìm kiếm" id="search" />
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg">
                            <button type="button" id="dropdownMenu1" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                                <li><a href="samsung.php">Điện thoại</a></li>
                                <li><a href="samsung.php">Tablet</a></li>
                                <li><a href="samsung.php">Laptop</a></li>
                                <li><a href="samsung.php">Phụ kiện</a></li>
                                <li><a href="samsung.php">Cũ giá rẻ</a></li>
                                <li><a href="samsung.php">Sim, thẻ</a></li>
                            </ul>
                        </div>
                        <button type="submit" onclick="location.href='result.php';" class="btn btn-success"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-5" id="opt_header" style="font-size:16px; margin-top: 30px;">
        <ul class="list-unstyled list-inline" id="rh">
            <li><a href="#" ><i class="fa fa-sign-in" aria-hidden="true" ><span style="padding-left: 10px;">Đăng nhập</span></i> </a></li>
            <li ><a href="#" id="mc"><i class="fa fa-user-plus" aria-hidden="true"><span style="padding-left: 10px;">Đăng ký</span></i> </a></li>
            <li><a href="#"><span class="glyphicon glyphicon-question-sign"><span style="padding-left: 10px;">Hỗ trợ</span></span></a></li>
            <li><a href="basket.php"><i class="fa fa-shopping-cart" aria-hidden="true"><span style="padding-left: 10px;">Giỏ hàng</span></i></a></li>
        </ul>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#search').suggestionBox({
            filter: true,
            widthAdjustment: -8,
            leftOffset: 4,
            topOffset: 0,
        }).loadSuggestions('js/demo.json');
    });
</script>
<!-- end header -->

<div class="container-fluid navibar" >
    <div class="container" style="margin-top: 0px !important;">
        <div class="col-sm-2 col-md-2">
            <a href="homepage.php">
                <p><i class="fa fa-home" aria-hidden="true"></i></p>
                <p>TRANG CHỦ</p>
            </a>
        </div>
        <div class="col-sm-2 col-md-2 nav_dt">
            <a href="#">
                <p><i class="fa fa-mobile" aria-hidden="true"></i></p>
                <p>ĐIỆN THOẠI</p>
            </a>
            <div class="sub_menu sub_dt">
                <ul class="list-unstyled list">
                    <li><a href="samsung.php">Samsung</a></li>
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">LG</a></li>
                    <li><a href="#">Sony</a></li>
                    <li><a href="#">Motorola</a></li>
                    <li><a href="#">Xiaomi</a></li>
                    <li><a href="#">Nokia - Microsoft</a></li>
                    <li><a href="#">Các hãng khác</a></li>
                </ul>
            </div>
            <script>
                $('.sub_dt').hide();
                $('.nav_dt').hover(function() {
                    $('.sub_dt').show();
                }, function() {
                    $('.sub_dt').hide();
                });
            </script>
        </div>
        <div class="col-sm-2 col-md-2 nav_tablet">
            <a href="#">
                <p><i class="fa fa-tablet" aria-hidden="true"></i></p>
                <p>TABLET</p>
            </a>
            <div class="sub_menu sub_tablet">
                <ul class="list-unstyled list">
                    <li><a href="#">Samsung</a></li>
                    <li><a href="#">Ipad</a></li>
                    <li><a href="#">Lenovo</a></li>
                    <li><a href="#">Sony</a></li>
                    <li><a href="#">Nokia</a></li>
                    <li><a href="#">Xiaomi</a></li>
                    <li><a href="#">Các hãng khác</a></li>
                </ul>
            </div>
            <script>
                $('.sub_tablet').hide();
                $('.nav_tablet').hover(function() {
                    $('.sub_tablet').show();
                }, function() {
                    $('.sub_tablet').hide();
                });
            </script>
        </div>
        <div class="col-sm-2 col-md-2 nav_laptop">
            <a href="#">
                <p><i class="fa fa-laptop" aria-hidden="true"></i></p>
                <p>LAPTOP</p>
            </a>
            <div class="sub_menu sub_laptop">
                <ul class="list-unstyled list">
                    <li><a href="#">Macbook</a></li>
                    <li><a href="#">Dell</a></li>
                    <li><a href="#">Hp</a></li>
                    <li><a href="#">Sony</a></li>
                    <li><a href="#">Toshiba</a></li>
                    <li><a href="#">Các hãng khác</a></li>
                </ul>
            </div>
            <script>
                $('.sub_laptop').hide();
                $('.nav_laptop').hover(function() {
                    $('.sub_laptop').show();
                }, function() {
                    $('.sub_laptop').hide();
                });
            </script>
        </div>
        <div class="col-sm-2 col-md-2">
            <a href="#">
                <p><i class="fa fa-gift" aria-hidden="true"></i></p>
                <p>KHUYẾN MÃI</p>
            </a>
        </div>
        <div class="col-sm-2 col-md-2">
            <a href="#">
                <p><i class="fa fa-laptop" aria-hidden="true"></i></p>
                <p>CÔNG NGHỆ</p>
            </a>
        </div>
    </div>
</div>
<!-- end navibar -->
<!-- BEGIN BANNERS -->
<div class="banner outer hidden-xs">
    <div class="container inner">
        <div class="col-sm-2 col-md-2 btn-banner">
            <a href="#">
                <div class="col-sm-2 col-md-2" style="height:100%;width:30%"><img src="./img/mouse-click.png" width="80%" height="80%"/></div>
                <div class="col-sm-2 col-md-2 text">FREE CLICK AND COLLECT</div>
            </a>
        </div>

        <div class="col-sm-2 col-md-2 btn-banner">
            <a href="#">
                <div class="col-sm-2 col-md-2" style="height:100%;width:30%"><img src="./img/free-ship.png" width="80%" height="80%"/></div>
                <div class="col-sm-2 col-md-2 text">FREE HOME DELIVERY</div>
            </a>
        </div>

        <div class="col-sm-2 col-md-2 btn-banner">
            <a href="#">
                <div class="col-sm-2 col-md-2" style="height:100%;width:30%"><img src="./img/return-shop.png" width="80%" height="80%"/></div>
                <div class="col-sm-2 col-md-2 text">FREE RETURN</div>
            </a>
        </div>

        <div class="col-sm-2 col-md-2 btn-banner">
            <a href="#">
                <div class="col-sm-2 col-md-2" style="height:100%;width:30%"><img src="./img/gift-card.png" width="80%" height="80%"/></div>
                <div class="col-sm-2 col-md-2 text">GIFT CARD</div>
            </a>
        </div>

        <div class="col-sm-2 col-md-2 btn-banner">
            <a href="#">
                <div class="col-sm-2 col-md-2" style="height:100%;width:30%"><img src="./img/discount.png" width="80%" height="80%"/></div>
                <div class="col-sm-2 col-md-2 text">STUDENT DISCOUNT</div>
            </a>
        </div>
    </div>
</div>
<!-- END BANNERS -->