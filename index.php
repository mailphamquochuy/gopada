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
		<li><a href="#">Promotion</a></li>
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
<div id = "wrap">
	<div class = "product">
		<div class = "col4"></div>
		<div class = "col5"></div>
		<div class = "col6"></div>
		<div class = "col7"></div>
	</div>
	<div class = "info">
		<div class = "col8"></div>
		<div class = "col9"></div>
	</div>
</div>
<!--End content wrap-->

<!--Slide bottom-->
<div id = "slidebottom"></div>
<!--End slide bottom-->

<!--News-->
<div id = "news"></div>
<!--End news-->

<!--Support-->
<div id = "support"></div>
<!--End support-->

<!--Footer-->
<div id = "footer"></div>
<!--End footer-->



</body>
</html>