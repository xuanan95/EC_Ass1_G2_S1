<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Search result</title>
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

		</div>
	</div>
	<!-- end ads -->

	<div class="container">

	    <hgroup class="mb20">
			<h1>Kết quả tìm kiếm</h1>
			<h2 class="lead">Có <strong class="text-danger">3</strong> kết quả khi tìm kiếm <strong class="text-danger">điện thoại</strong></h2>	
		</hgroup>

		<hgroup class="mb20 form-inline">
			<div class="input-group">
				<h2 class="lead form-group">Lọc theo </h2>
				<div class="form-group">
					<select class="form-control" id="sel1" >
						<option value="" disabled selected>Lọc theo giá</option>
						<option value="max">Cao nhất</option>
						<option value="min">Thấp nhất</option>
					</select>
				</div>
				<div class="form-group">
					<select class="form-control" id="sel2" >
						<option value="" disabled selected>Lọc theo doanh số</option>
						<option value="max_sell">Bán chạy nhất</option>
					</select>
				</div>
			</div>

		</hgroup>

		<!-- BEGIN results -->
	    <section class="col-xs-12 col-sm-12 col-md-12">

	    	<!-- BEGIN result_1 -->
			<article class="search-result row">
				<!-- IMAGE -->
				<div class="col-xs-12 col-sm-12 col-md-3">
					<a href="#" title="Điện loại Nokia" class="thumbnail"><img src="img/product/nokia.png" alt="Điện loại Nokia" /></a>
				</div>

				<!-- QUICK INFORMATION -->
				<div class="col-xs-12 col-sm-12 col-md-2">
					<ul class="meta-search">
						<li><i class="glyphicon glyphicon-calendar"></i> <span>02/15/2014</span></li>
						<li><i class="glyphicon glyphicon-time"></i> <span>Còn <b>690</b> sản phẩm</span></li>
						<li><i class="glyphicon glyphicon-tags"></i> <span>Điện thoại</span></li>
						<li><i class="glyphicon glyphicon-usd"></i> <span>2.600.000 VND</span></li>
					</ul>
				</div>

				<!-- CONTENT -->
				<div class="col-xs-12 col-sm-12 col-md-7 excerpet">
					<h3><a href="#" title="">Điện loại iPhone</a></h3>
					<p>Phần cứng mạnh mẽ vượt trội, được gia công lắp ráp tỉ mỉ và kết hợp với phần mềm iOS được cập nhật thường xuyên đã tạo nên các sản phẩm iPhone hoàn hảo về cả độ bền, sự ổn định cũng như sự hài lòng của người dùng..</p>						
	                <span class="plus"><a href="#" title="Chi tiết"><i class="glyphicon glyphicon-plus"></i></a></span>
				</div>
				<span class="clearfix borda"></span>
			</article>
			<!-- END result_1 -->

			<!-- BEGIN result_2 -->
	        <article class="search-result row">
				<div class="col-xs-12 col-sm-12 col-md-3">
					<a href="#" title="Điện loại Samsung" class="thumbnail"><img src="img/product/samsung.png" alt="Điện loại Samsung" /></a>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-2">
					<ul class="meta-search">
						<li><i class="glyphicon glyphicon-calendar"></i> <span>02/13/2014</span></li>
						<li><i class="glyphicon glyphicon-time"></i> <span>Còn <b>960</b> sản phẩm</span></li>
						<li><i class="glyphicon glyphicon-tags"></i> <span>Tablet</span></li>
						<li><i class="glyphicon glyphicon-usd"></i> <span>3.700.000 VND</span></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-7">
					<h3><a href="#" title="">Điện loại iPhone</a></h3>
					<p>Phần cứng mạnh mẽ vượt trội, được gia công lắp ráp tỉ mỉ và kết hợp với phần mềm iOS được cập nhật thường xuyên đã tạo nên các sản phẩm iPhone hoàn hảo về cả độ bền, sự ổn định cũng như sự hài lòng của người dùng..</p>					
	                <span class="plus"><a href="#" title="Chi tiết"><i class="glyphicon glyphicon-plus"></i></a></span>
				</div>
				<span class="clearfix borda"></span>
			</article>
			<!-- END result_2 -->

			<!-- BEGIN result_3 -->
			<article class="search-result row">
				<div class="col-xs-12 col-sm-12 col-md-3">
					<a href="#" title="Điện loại iPhone" class="thumbnail"><img src="img/product/iphone.png" alt="Điện loại iPhone" /></a>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-2">
					<ul class="meta-search">
						<li><i class="glyphicon glyphicon-calendar"></i> <span>01/11/2014</span></li>
						<li><i class="glyphicon glyphicon-time"></i> <span>Còn <b>696</b> sản phẩm</span></li>
						<li><i class="glyphicon glyphicon-tags"></i> <span>Laptop</span></li>
						<li><i class="glyphicon glyphicon-usd"></i> <span>9.960.000 VND</span></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-7">
					<h3><a href="#" title="">Điện loại iPhone</a></h3>
					<p>Phần cứng mạnh mẽ vượt trội, được gia công lắp ráp tỉ mỉ và kết hợp với phần mềm iOS được cập nhật thường xuyên đã tạo nên các sản phẩm iPhone hoàn hảo về cả độ bền, sự ổn định cũng như sự hài lòng của người dùng..</p>					
	                <span class="plus"><a href="#" title="Chi tiết"><i class="glyphicon glyphicon-plus"></i></a></span>
				</div>
				<span class="clearfix border"></span>
			</article>	
			<!-- END result_3 -->		

		</section>
		<!-- END results -->
	</div>
	<!-- end content -->

	<?php require "footer.php"?>
	<!-- end footer -->
</body>
</html>