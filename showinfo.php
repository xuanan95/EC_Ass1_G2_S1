<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Showinfo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="css/font-awesome.min.css">
  	<link rel="stylesheet" href="css/style.css">
  	<style type="text/css">
  			#head-btn{
  				text-align: center;
  				background-color: red;
  			}
  			#head-btn{
  				color: white;
  			}
  			#body-pop .col-md-4 img{
  				margin-left: 10%;
  			}
  			#body-pop .col-md-4 h2{
  				margin-left: 15%;
  				color: #00A9E8;
  				font-weight: bold;
  				font-family: "Times New Romand";
  			}
  			#body-pop .col-md-4 h3{
  				margin-left: 15%;
  				color: #00A9E8;
  				font-family: "Times New Romand"
  			}
  			#tbl table td{
  				width: 40%;
  			}
  			#ver{
  				margin-left: 35%;
  			}
  	</style>
  	<script type="text/javascript">
	  	$(function(){
		    $('#ver').click(function(){
		        var url='data:application/vnd.ms-excel,' + encodeURIComponent($('#tbl').html()) 
		        location.href=url
		        return false
		    })
		})
		function showInput(){
			document.getElementById('one').innerHTML = 
                    document.getElementById("name").value;
            document.getElementById('two').innerHTML = 
                    document.getElementById("phone").value;
            document.getElementById('three').innerHTML = 
                    document.getElementById("address").value;
            document.getElementById('four').innerHTML = 
                    document.getElementById("email").value;
            document.getElementById('seven').innerHTML = 
                    document.getElementById("number-p").value;
             if(document.getElementById("black").checked = true){
             	document.getElementById('eight').innerHTML = "Đen"     
             }
             if(document.getElementById("white").checked = true){
             	document.getElementById('eight').innerHTML = "Trắng"     
             }
            document.getElementById('nine').innerHTML = 
                    document.getElementById("comment").value;
		}
  	</script>
</head>
<body>
	<?php require "header.php"?>

	<div class="container" id="info">
		<div class="row" style="margin-top: 1em;">
			<h2 class="text-center" style="font-weight: bold; font-size: 3em; margin-bottom: 1em; text-shadow: 0 0 2em #07e107;">THÔNG TIN MUA HÀNG</h2>
			        <div class="col-md-4 col-xs-4 " >
			        <div>
			         	<img src="img/j7_01.png" class="img-responsive" alt="">
			        </div>
			        <div>
				        <h2 class="text-center">SAMSUNG J7 Prime</h2>
				        <h3 class="text-center">Giá: 6.290.000</h3>
			        </div>
				    </div>
				    <div class="col-md-8 col-xs-8">
				    <form>
				          	<div class="form-group">
				          		<label for="name">Họ Tên</label>
				          		<input type="text" class="form-control" id="name" size="30" required>
				          	</div>
				          	<div class="form-group">
								<label for="phone">Số điện thoại</label>
								<input type="text" class="form-control" id="phone" required>
							</div>
							<div class="form-group">
								<label for="address">Địa chỉ </label>
								<input type="text" class="form-control" id="address" required>
							</div>
				          	<div class="form-group">
								<label for="email">Email address</label>
								<input type="email" class="form-control" id="email" placeholder="example@abc.com" required>
							</div>
							<div class="form-group">
								<label>Số lượng: </label>
								<input type="number" size="1" id="number-p">
							</div>
							<div class="form-group">
								<label>Chon màu:</label>
								<div class="radio-inline">
								<label><input type="radio" name="optradio" id="black">Đen</label>
							</div>
							<div class="radio-inline">
								<label><input type="radio" name="optradio" id="white">Trắng</label>
							</div>
						</div>
						<div class="form-group">
							<label for="comment">Ghi chú</label>
							<textarea class="form-control" rows="5" id="comment"></textarea>
						</div>
						<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="btdh" onclick="showInput()">ĐẶT HÀNG</button>
						<div class="modal fade" id="myModal" role="dialog">
						    <div class="modal-dialog modal-md">
						      <div class="modal-content">
						        <div id="head-btn" class="modal-header">
						          <h4 class="modal-title">MUA HÀNG - NGHE TƯ VẤN MIỄN PHÍ</h4>
						        </div>
						        <div id="body-pop"class="modal-body">	 

						          		<div id="tbl">
						          		<table class="table">
						          			<tr>
				                                <td><label>Họ Tên</label></td>
				                                <td><p id="one"></p></td>
				                            </tr>
				                            <tr>
				                                <td><label>Số điện thoại</label></td>
				                              	<td><p id="two"></p></td>
			                                </tr>
			                                <tr>
					                            <td><label>Địa chỉ</label></td>
					                            <td><p id="three"></p></td>
					                        </tr>
					                        <tr>
					                            <td><label>Email address</label></td>
					                            <td><p id="four"></p></td>
					                        </tr>
					                        <tr>
					                        	<td><label>Tên sản phẩm</label></td>
					                        	<td><p id="five">Samsung J7 Prime</p></td>
					                        </tr>
					                        <tr>
					                        	<td><label>Giá bán</label></td>
					                        	<td><p id="six">6.290.000</p></td>
					                        </tr>    
					                        <tr>
					                        	<td><label>Số seri</label></td>
					                        	<td><p>IMEI123456</p></td>
					                        </tr>    
					                        <tr>
					                            <td><label>Số lượng</label></td>
					                            <td><p id="seven"></p></td>
					                        </tr>
					                        <tr>
					                            <td><label>Màu</label></td>
					                            <td><p id="eight"></p></td>
					                        </tr>
					                        <tr>
					                          	<td><label>Thời gian giao hàng (dự kiến)</label></td>
					                            <td><p>20/10/2016</p></td>
					                         </tr>
					                        <tr>
					                          	<td><label>Thời gian bảo hành</label></td>
					                            <td><p>12 tháng</p></td>
					                         </tr>
			                        		<tr>
					                          	<td><label>Ghi chú</label></td>
					                            <td><p id="nine"></p></td>
					                         </tr>
										</table>
										</div>
										<button type="submit" id="ver" class="btn btn-info" style="padding: 0.4em 2em;">MUA</button>
				          				<button type="button" class="btn btn-danger" data-dismiss="modal" style="padding: 0.4em 2em;">HỦY</button>
						        </div>
				     		 </div>
					    	</div>
					  	</div>
			    	</form>
				</div>
			</div>
		</div>
	<?php require "footer.php"?>
</body>
</html>