<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Samsung Galaxy J7 Prime</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="js/jquery.elevatezoom.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/basket.css">
    <script src="js/basket.js"></script>
</head>
<body>
    <?php require "header.php"?>
    <!-- end header -->

    <div class="container sanpham">
        <ul class="breadcrumb">
            <li><a href="homepage.php">Trang chủ</a><span class="divider"></span></li>
            <li class="active"><a href="">Giỏ hàng</a></li>
        </ul>

        <!--TODO-->
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 list_product">Sản phẩm</div>
                    <div class="col-lg-3 list_product">Số lượng</div>
                    <div class="col-lg-3 list_product">Giá mua</div>
                </div>
                <div class="row fix_list">
                    <div class="col-lg-6 img_product">
                        <img src="img/j7_01.png" alt=""><span>Galaxy J7 Prime</span><br>
                        <button type="button" class="btn btn-default btn-xs">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Xóa khỏi giỏ hàng
                        </button>
                    </div>
                    <div class="col-lg-3 quantity2">
                        <div class="quantity">
                            <button type="button" class="btn btn-default btn-xs" onclick="plus(1)">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            </button>
                            <input title="" id="number_pr1" type="number" readonly value="0">
                            <button type="button" class="btn btn-default btn-xs" onclick="minus(1)">
                                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-3 price">
                        <span>15.000.000 VNĐ</span>
                    </div>
                </div>
                <div class="row fix_list">
                    <div class="col-lg-6 img_product">
                        <img src="img/j7_01.png" alt=""><span>Galaxy J7 Prime</span><br>
                        <button type="button" class="btn btn-default btn-xs">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Xóa khỏi giỏ hàng
                        </button>
                    </div>
                    <div class="col-lg-3 quantity2">
                        <div class="quantity">
                            <button type="button" class="btn btn-default btn-xs" onclick="plus(2)">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            </button>
                            <input title="" id="number_pr2" type="number" readonly value="0">
                            <button type="button" class="btn btn-default btn-xs" onclick="minus(2)">
                                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-3 price">
                        <span>15.000.000 VNĐ</span>
                    </div>
                </div>
                <div class="row fix_list">
                    <div class="col-lg-6 img_product">
                        <img src="img/j7_01.png" alt=""><span>Galaxy J7 Prime</span><br>
                        <button type="button" class="btn btn-default btn-xs">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Xóa khỏi giỏ hàng
                        </button>
                    </div>
                    <div class="col-lg-3 quantity2">
                        <div class="quantity">
                            <button type="button" class="btn btn-default btn-xs" onclick="plus(3)">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            </button>
                            <input title="" id="number_pr3" type="number" readonly value="0">
                            <button type="button" class="btn btn-default btn-xs" onclick="minus(3)">
                                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-3 price">
                        <span>15.000.000 VNĐ</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 totalcost">
                <table class="costofproduct">
                    <tr>
                        <td>Tạm tính</td>
                        <td>30.000.000</td>
                        <td>VNĐ</td>
                    </tr>
                    <tr>
                        <td>Giảm giá</td>
                        <td>200.000</td>
                        <td>VNĐ</td>
                    </tr>
                </table>
                <table class="totalofproduct">
                    <tr>
                        <td>Thành tiền</td>
                        <td>29.800.000</td>
                        <td>VNĐ</td>
                    </tr>
                </table><br>
                <button type="button" class="btn btn-success btn-lg checkout">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Tiến hành đặt hàng
                </button>
                <div class="paymethod">
                    <img src="img/payment-1.png" alt="">
                </div>
            </div>
        </div><br>
        <div class="numberproduct">
            <span>Giỏ hàng:</span><span>2 sản phẩm</span>
        </div><br>
        <div class="row">
            <div class="col-lg-8 method">
                <p>Phương thức giao hàng</p>
                <table>
                    <tr>
                        <td>
                            <input id="method1" type="radio" name="deliverymethod" value="free">
                            <label for="method1">Giao hàng miễn phí</label>
                        </td>
                        <td>0 VNĐ</td>
                    </tr>
                    <tr>
                        <td>
                            <input id="method2" type="radio" name="deliverymethod" value="standard">
                            <label for="method2">Giao hàng tiêu chuẩn</label>
                        </td>
                        <td>10.000 VNĐ</td>
                    </tr>
                    <tr>
                        <td>
                            <input id="method3" type="radio" name="deliverymethod" value="fast">
                            <label for="method3">Giao hàng nhanh</label>
                        </td>
                        <td>40.000 VNĐ</td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-4"></div>
        </div>
        <br>
    </div>
    <!-- end content -->

    <?php require "footer.php"?>
    <!-- end footer -->
</body>
</html>