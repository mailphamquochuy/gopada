<!DOCTYPE html>
<html>
<head>
	<title>Gopada.net - Mua website trả góp </title>
	<meta charset = "utf-8">
	<link rel = "stylesheet" type = "text/css" href = "assets/css/style.css">
</head>
<body>

<!-- TopNav-->
<div id = "topnav">
	<div class = "hotmenu">
		<ul>
			<li><a href = "#"> Contact</a></li>
			<li><a href = "#"> Hotline</a></li>
			<li><a href = "#"> Socail</a></li>
		</ul>
	</div>

	<div class = "member">
		<div class = "register"><a href = "#">Register</a></div>
		<div class ="login"><a href = "#">Login</a></div>
	</div>

	<div class = "cart">
		<span><a href = "#">Cart</a></span>
	</div>

</div>

<!--Header-->
<!-- Logo & search-->
<div id = "header">
	<div id = "logo">
		<span><a href="#"><img src="assets/img/logo.png"></a></span>
	</div>

	<div id = "search">
		<form action = "search.php" method = "post">
			<input type = "search" name = "search" value = "Nhập từ khóa" />
				<select name = "catalogsearch">
				<option value="0">--Select catalog--</option>
					<option value = "1">Intro Company</option>
					<option value = "2">Business</option>
					<option value = "3">Shop cart </option>
				</select>
			<input type = "submit" name = "subsearch" value = "Tìm Kiếm" />
		</form>
	</div>

</div>
<!--End logo & Search-->


<!--Menu bar-->
<div id = "nav">
	<ul>
		<li><a href="#">Home</a></li>
		<li><a href="detail.html">Promotion</a></li>
		<li><a href="#">Color Template</a></li>
		<li><a href="#">Colum Template</a></li>
		<li><a href="#">Type Template</a></li>
		<li><a href="#">Customer</a></li>
		<li style="border-right: none"><a href="#">Pricing</a></li>
	</ul>





</div>
<!--End menu bar-->

<!--Slider bar and hotbanner-->

<div id = "slide">
	<!--Slide-->
	<div class = "col1">
		<img src="assets/img/slideshow.png">
	</div>
	<!--End slide-->

	<!--hotbanner-->
	<div class ="col2">
		<a href="#"><img src="assets/img/banner/hot1.png"></a>
	</div>

	<div class = "col3">
		<a href="#"><img src="assets/img/banner/hot2.png"></a>
	</div>
	<!--End hotbanner-->
</div>



<div class = "clear"></div>
<!--Filter-->
<div id = "filterbar">
	<div class = "filter">
		<p>This is filter choice Catalog website:</p>
		<span>Chọn giá:
			<form action = "" method = "">
				<select name = "price">
					<option value = "1">--Chọn khoảng giá--</option>
					<option value = "2">500.000 vnđ</option>
					<option value = "3">1.000.000 vnđ</option>
					<option value = "4">2.000.000 vnđ</option>	
				</select>
			</form>
		</span>

		<span>Chọn ngành: 
			<form action = "" method = "">
				<select name = "catalogsearch">
						<option value = "0">--Select catalog--</option>
						<option value = "1">Intro Company</option>
						<option value = "2">Business</option>
						<option value = "3">Shop cart </option>
				</select>
			</form>
		</span>
	</div>
	<!--Share website on socail-->
	<div class = "social">
		<a href = ""><img src="assets/img/ico/social.png" /></a>
	</div>
	<!--End share-->
</div>
<!--End Filter-->


<div class = "clear"></div>
<!--Content wrap -->
<?php 
include ('function/product.php');
//include ('function/connecdb.php');
?>
	
		<?php
			foreach ($arr_product as $key => $val) {
				echo "<div id = 'content'>";
					echo "<div class = 'product'>";
						echo "<div class = 'col4'><a href = '#'><img src =". $val->img." /></a></div>";

						echo "<div class = 'col5'><a href = '#'><img src =". $val->thumb1." /></a></div>";

						echo "<div class = 'col6'><a href = '#'><img src =". $val->thumb2." /></a></div>";

						echo "<div class = 'col7'><a href = '#'><img src =". $val->thumb3." /></a></div>";
					echo "</div>";
						
					echo "<div class = 'info'>";
						echo "<div class = 'col8'><h2>".$val->name."</h2>".$val->info."</div>";
						echo "<div class = 'col9'><h2>MUA THEME NÀY</h2>
								<div class = 'payout'>Trả trước: 
									<form action = '' method = ''>
										<select name = 'pay'>
											<option value = '0'>".$val->percent."%"."</option>
										</select>
									</form>
								</div>
								<div class = 'permonth'>Trả góp: 
									<form action = '' method = ''>
										<select name = 'permonth'>
											<option value = '0'>".$val->paymethod."</option>
										</select>
									</form>
								</div>
								<div class = 'sumpay'>Total:  
									<form action = '' method = ''>
										<input type='number' name='sumpay' value='2,500,000 VNĐ' />
									</form>
								</div>
								<div class = 'submit'>  
									<form action = '' method = ''>
										<input type = 'submit' name = 'submit' value = 'Mua Ngay->' />
									</form>
								</div>
							</div>";
					echo "</div>";
				echo "</div>";
			}
		?>
<!--End content wrap-->

<div class="clear"></div>
<!--Slide bottom-->
<div id = "slidebottom">
	<div class="title">
		<p>Hot theme:</p>
	</div>
	<marquee>
		<?php 
			foreach ($arr_product as $key => $val) {
				echo "<div class='itemtheme'><img src =".$val->img." /></div>";
			}

		?>
	</marquee>
</div>
<!--End slide bottom-->

<!--News-->
<div id = "news">
	<?php
	include ('function/new.php');
	foreach ($array_new as $key => $item) {
		echo "<div class = 'col10'><h2>".$item->title."</h2>
				<ul>
					<li>".$item->title."</li>
				</ul>
			</div>";
		echo "<div class = 'col11'><h2>".$item->title."</h2>
				<ul>
					<li>".$item->title."</li>
				</ul>
			</div>";
		echo "<div class = 'col12'><h2>".$item->title."</h2>
				<ul>
					<li>".$item->title."</li>
				</ul>
			 </div>";
	}
	
	?>


</div>
<!--End news-->
<div class="clear"></div>
<!--Support-->
<div id = "title-support">
	<h2>Các chuyên viên tư vấn của chúng tôi</h2>
	<span class = "text-support"><i>Luôn sẵn sàng hỗ trợ bạn</i></span>
</div>
<div id = "support">
	<div class="support">
		<img src="upload/img/support/avata.png" /><br />
		<p>Nguyễn Thị Huyền</p>
		<p>0989 525 555</p>
		<img src="upload/img/icon/skype.png">

	</div>
	<div class="support">
		<img src="upload/img/support/avata2.png" /><br />
		<p>Phạm Linh Thảo</p>
		<p>0989 525 455</p>
		<img src="upload/img/icon/skype.png">
	</div>
	<div class="support">
		<img src="upload/img/support/avata3.png" /><br />
		<p>Trần Bảo Trâm</p>
		<p>0977 322 333</p>
		<img src="upload/img/icon/skype.png">
	</div>
	<div class="support-end">
		<img src="upload/img/support/avata.png" /><br />
		<p>Nguyễn Thị Huyền</p>
		<p>0989 525 555</p>
		<img src="upload/img/icon/skype.png">
	</div>
	

	
</div>
<!--End support-->
<div class="clear"></div>
<!--Footer-->
<div id = "footer">
	<p>&copy; PQH-Gopadaco</p>
</div>
<!--End footer-->


</body>
</html>