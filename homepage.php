<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Homepage</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="css/font-awesome.min.css">
  	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php require "header.php"?>
	<!-- end header -->

	<div class="container-fluid ads">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
		    <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			    <li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			  <!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="img/laptop_km.jpg" alt="Chania">
			    </div>

			    <div class="item">
			      <img src="img/iphone7_km.jpg" alt="Chania">
			    </div>

			    <div class="item">
			      <img src="img/ipad_km.jpg" alt="Flower">
			    </div>

			    <div class="item">
			      <img src="http://www.greatdeal4u.in/modules/homeslider/images/75c5cd355113065aeaf4cc884f8cf94ffb15dc2b_3c0fdc1f-3142-4f38-a4e0-9a41817b9e01.png" alt="Flower">
			    </div>
			</div>

			  <!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			 </a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			 </a>
		</div>
	</div>
	<!-- end ads -->

	<div class="container content">
		<div class="col-xs-12 col-sm-12 col-md-8 product">
			<ul class="list-inline">
				<li>
					<a href="product.php">
						<img src="https://cdn3.tgdd.vn/Products/Images/42/84798/Feature/samsung-galaxy-j7-prime-600-277.jpg" alt="">
						<h3>Samsung Galaxy J7 Prime</h3>
						<strong>6.290.000đ</strong>
						
					</a>
					<button type="button" class="btn btn-info" onclick="window.location.href='showinfo.php'">Mua ngay</button>
				</li>
				<li>
					<a href="">
						<img src="https://cdn2.tgdd.vn/Products/Images/42/81592/Feature/oppo-f1s-ft-1.jpg" alt="">
						<h3>Oppo F1s</h3>
						<strong>5.990.000đ</strong>
					</a>
					<button type="button" class="btn btn-info" onclick="window.location.href='showinfo.php'">Mua ngay</button>
				</li>
				<li>
					<a href="">
						<img src="https://cdn4.tgdd.vn/Products/Images/42/75199/Feature/samsung-galaxy-a9-pro-600-277-2.jpg" alt="">
						<h3>Samsung A9 Pro</h3>
						<strong>11.990.000đ</strong>
						
					</a>
					<button type="button" class="btn btn-info" onclick="window.location.href='showinfo.php'">Mua ngay</button>
				</li>
				<li>
					<a href="">
						<img src="https://cdn4.tgdd.vn/Products/Images/42/81259/Feature/huawei-y6-ii-ft.jpg" alt="">
						<h3>Huawei Y6 II</h3>
						<strong>2.990.000đ</strong>
						
					</a>
					<button type="button" class="btn btn-info" onclick="window.location.href='showinfo.php'">Mua ngay</button>
				</li>
			</ul>
		</div>
		<div class="hidden-xs hidden-sm col-md-4 news">
			<div class="border_news"><h2>TIN CÔNG NGHỆ</h2></div>
			<ul class="list-unstyled">
				<li>
					<a href="">
						<img src="https://cdn.tgdd.vn/Files/2016/10/13/899315/coolpad-sky-300x200.jpg" alt="">
						<h3>5 smartphone giá rẻ, 1 triệu rưỡi mà có đủ tính năng, "xài OK!"</h3>
					</a>
				</li>
				<li>
					<a href="">
						<img src="https://cdn4.tgdd.vn/Files/2016/10/13/899364/fa-300x200.jpg" alt="">
						<h3>Samsung sẽ tiêu hủy toàn bộ Galaxy Note 7 thu hồi</h3>
					</a>
				</li>
				<li>
					<a href="">
						<img src="https://cdn4.tgdd.vn/Files/2016/10/13/899239/rsz_galaxynote7-300x200.jpg" alt="">
						<h3>Cùng chiêm ngưỡng lại Galaxy Note 7 màu Coral Blue tuyệt đẹp</h3>
					</a>
				</li>
				<li>
					<a href="">
						<img src="https://cdn4.tgdd.vn/Files/2016/10/13/899274/samsung-gear-vr2-300x200.jpg" alt="">
						<h3>Top 3 thiết bị đeo nên mua để trải nghiệm công nghệ mới (10/2016)</h3>
					</a>
				</li>
				<li>
					<a href="">
						<img src="https://cdn1.tgdd.vn/Files/2016/10/13/899251/anhdaidien-300x200.jpg" alt="">
						<h3>Coolpad Fancy lên kệ TGDĐ: thiết kế cao cấp, RAM 2 GB giá dưới 4 triệu</h3>
					</a>
				</li>
				<li>
					<a href="">
						<img src="https://cdn1.tgdd.vn/Files/2016/10/12/898966/fa-300x200.jpg" alt="">
						<h3>Với cách này nhà mạng không thể trừ tiền oan của bạn nữa</h3>
					</a>
				</li>
				<li>
					<a href="">
						<img src="https://cdn3.tgdd.vn/Files/2016/10/12/898968/fa-300x200.jpg" alt="">
						<h3>Smartphone thay thế Galaxy Note 7 của Samsung đây rồi, vừa xuất hiện luôn nhé</h3>
					</a>
				</li>
			</ul>
		</div>
		<div class="product-full">
			<ul class="list-unstyled list-inline">
				<li>
					<a href="#">
						<img src="https://cdn1.tgdd.vn/Products/Images/42/60546/Feature/iphone-5s-16gb-16.jpg" alt="">
						<h3>Iphone 5s 16GB</h3>
						<strong>6.990.000đ</strong>
						
					</a>
					<button type="button" class="btn btn-info" onclick="window.location.href='showinfo.php'">Mua ngay</button>
				</li>
				<li>
					<a href="#">
						<img src="https://cdn.tgdd.vn/Products/Images/42/75245/Feature/sony-xperia-xa-newft.jpg" alt="">
						<h3>Sony Xperia XA</h3>
						<strong>5.490.000đ</strong>
						
					</a>
					<button type="button" class="btn btn-info" onclick="window.location.href='showinfo.php'">Mua ngay</button>
				</li>
				<li>
					<a href="#">
						<img src="https://cdn3.tgdd.vn/Products/Images/42/72173/Feature/htc-one-me-600-277-4.jpg" alt="">
						<h3>HTC One ME</h3>
						<strong>6.490.000đ</strong>
						
					</a>
					<button type="button" class="btn btn-info" onclick="window.location.href='showinfo.php'">Mua ngay</button>
				</li>
				<li>
					<a href="#">
						<img src="https://cdn3.tgdd.vn/Products/Images/522/73768/Feature/ipad-mini-4-wifi-16gb-4.jpg" alt="">
						<h3>Ipad Mini 4 Wifi</h3>
						<strong>9.990.000đ</strong>
						
					</a>
					<button type="button" class="btn btn-info" onclick="window.location.href='showinfo.php'">Mua ngay</button>
				</li>
				<li>
					<a href="#">
						<img src="https://cdn2.tgdd.vn/Products/Images/522/71637/Feature/huawei-mediapad-t1-701u-8.jpg" alt="">
						<h3>Huawei Mediapad T1</h3>
						<strong>2.090.000đ</strong>
						
					</a>
					<button type="button" class="btn btn-info" onclick="window.location.href='showinfo.php'">Mua ngay</button>
				</li>
				<li>
					<a href="#">
						<img src="https://cdn.tgdd.vn/Products/Images/44/80720/Feature/apple-macbook-12-mmgl2-core-m-11g-8gb-256gb-macoscopy-1.jpg" alt="">
						<h3>Apple Macbook 12''</h3>
						<strong>31.490.000đ</strong>
						
					</a>
					<button type="button" class="btn btn-info" onclick="window.location.href='showinfo.php'">Mua ngay</button>
				</li>
			</ul>
		</div>
	</div>
	<!-- end content -->

	<?php require "footer.php"?>
	<!-- end footer -->
</body>
</html>