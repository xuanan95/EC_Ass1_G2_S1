<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Samsung Galaxy J7 Prime</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="js/jquery-3.1.1.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/jquery.elevatezoom.js"></script>
  	<link rel="stylesheet" href="css/font-awesome.min.css">
  	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/product.css">
  	<script src="js/product.js"></script>
</head>
<body>
	<?php require "header.php"?>
	<!-- end header -->

	<div class="container sanpham">
		<ul class="breadcrumb">
			<li><a href="homepage.php">Trang chủ</a><span class="divider"></span></li>
			<li><a href="">Điện thoại</a><span class="divider"></span></li>
			<li><a href="samsung.php">Samsung</a><span class="divider"></span></li>
			<li class="active">Samsung Galaxy J7 Prime</li>
		</ul>
		<div class="col-xs-12 col-sm-6 col-md-6 sp_left" id="gallery_01">
			<div class="show_sp text-center product_show">
				<img id="zoom_01" src="img/j7_01.png" data-zoom-image="img/j7_01_large.png" alt="">
			</div>
			<ul class="child_sp list-inline list-unstyled text-center">
				<li><img onclick="select_sp1()" src="img/j7_01.png" alt=""></li>
				<li><img onclick="select_sp2()" src="img/j7_02.png" alt=""></li>
				<li><img onclick="select_sp3()" src="img/j7_03.png" alt=""></li>
			</ul>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 sp_right">
			<h2>Samsung Galaxy J7 Prime</h2>
			<p>Chọn màu sắc:</p>
			<select name="color" id="color">
				<option value="Vàng">Vàng</option>
				<option value="Đen">Đen</option>
				<option value="Trắng">Trắng</option>
			</select><br>
			<div class="clear"></div>
			<strong class="gia">6.290.000đ</strong> <br>
			<ul id="rating">
				<li><img src="img/1490464509_star-4.png"></li>
				<li><img src="img/1490464509_star-4.png"></li>
				<li><img src="img/1490464509_star-4.png"></li>
				<li><img src="img/1490464509_star-4.png"></li>
				<li><img src="img/1490464515_star-0.png"></li>
			</ul>
			<div class="clear"></div>
			<div id="state">
				<span>Trạng thái:</span> <span>Còn hàng</span>
			</div>
			<div class="quantity">
				<span>Số lượng:</span>
				<button type="button" class="btn btn-default btn-xs" onclick="plus()">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				</button>
				<input title="" id="number_pr" type="number" readonly value="0">
				<button type="button" class="btn btn-default btn-xs" onclick="minus()">
					<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
				</button>
			</div>
			<form action="basket.php" style="float: left; margin-right: 1em;">
				<button class="btn btn-info" type="submit" id="AddToCart">
					<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Giỏ hàng
				</button>
			</form>
			<button class="btn btn-default" id="WishList">
				<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>Ưa thích
			</button>
			<div class="clear"></div>
			<div class="promotion">
				<ul class="list-unstyled">
					<li><strong>4 khuyến mãi áp dụng đến 31/10</strong></li>
					<li><i class="fa fa-circle" aria-hidden="true"></i> Trả góp 0% HOẶC PMH 200,000đ</li>
					<li><i class="fa fa-circle" aria-hidden="true"></i> Cơ hội Trúng 30 xe Liberty</li>
					<li><i class="fa fa-circle" aria-hidden="true"></i> Tặng gói bảo hiểm tai nạn bất ngờ (rơi vỡ, vào nước) trong 12 tháng </li>
					<li><i class="fa fa-circle" aria-hidden="true"></i> Giảm ngay 5% khi Mua Laptop/ Tablet</li>
				</ul>
			</div>
			<p>&diams;  Trong hộp có: Hộp, Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim</p>
			<p>&diams;  Bảo hành chính hãng: <strong>thân máy 12 tháng, pin 12 tháng, sạc 6 tháng</strong></p>
			<p><strong>&diams;  1 đổi 1 trong 1 tháng</strong> với sản phẩm lỗi</p>
			<div class="clear"></div>
			<ul id="deliver">
				<li><input title="" name="deliver" type="radio" value="free"><img src="img/26575-200.png"><span>Giao hàng miễn phí trong nội thành</span></li>
				<li><input title="" name="deliver" type="radio" value="cost"><img src="img/100245-200.png"><span>Giao hàng nhanh</span></li>
			</ul>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 sp_full" id="sp_full">
			<ul class="list-unstyled list-inline menu_sp">
				<li class="li_thongso back_color" id="details">Thông số kỹ thuật</li>
				<li class="li_danhgia" id="review">Đánh giá</li>
<!--				<li class="li_doitra" id="return">Đổi trả hàng</li>-->
			</ul>
			<div id="showedarea">
				<?php require "productdetail.php"?>
			</div>
		</div>
	</div>
	<!-- end content -->

	<?php require "footer.php"?>
	<!-- end footer -->
</body>
</html>