<!DOCTYPE html>
<html>
<head>
	<title>Add product</title>
	<meta charset="utf-8">
</head>
<body>

<div class = "form">
	<form action="" method="post" enctype="multipart/form-data" id = "addproduct" >
		Tên Sản phẩm: 	<input type = "text" name = "title" required /><br>
		Hình đại diện: 	<input type = "file" name = "file" value = "Browser" /><br>
		Hình thumb: 	<input type = "file" name = "thumb1" value = "Browser" />
						<input type = "file" name = "thumb2" value = "Browser" />
						<input type = "file" name = "thumb3" value = "Browser" /><br>
		Giá sản phẩm: 	<input type = "number" name = "price" /><br>
		Danh mục sản phẩm: <select name = "catalog">
								  	<option value = "1">Intro Company</option>
									<option value = "2">Business</option>
									<option value = "3">Shop cart </option>
							</select></br>
		Thông tin ngắn: <input type="text" name="info" /><br>
		Thông tin sản phẩm:
						<textarea name="content" form="addproduct"> Nhập thông tin sản phẩm tại đây...</textarea><br>
						<input type = "submit" name = "submit" value = "Thêm sản phẩm">
	</form>
</div>

<?php
if(isset($_POST['submit'])){
	//Khai bao bien lay du lieu
	$name = $_POST['title'];
	$price = $_POST['price'];
	$catalog = $_POST['catalog'];
	$info = $_POST['info'];
	$content = $_POST['content'];


	//upload hinh đại diện
	move_uploaded_file($_FILES['file']['tmp_name'], '../upload/product/'.$_FILES['file']['name']);
	$domain = 'http://localhost/gopada';
	$img = $domain.'/upload/product/'.$_FILES['file']['name'];

	//upload hinh thumb1
	move_uploaded_file($_FILES['thumb1']['tmp_name'], '../upload/product/thumb/'.$_FILES['thumb1']['name']);
	$domain = 'http://localhost/gopada';
	$thumb1 = $domain.'/upload/product/thumb/'.$_FILES['thumb1']['name'];
	//thumb 2
	move_uploaded_file($_FILES['thumb2']['tmp_name'], '../upload/product/thumb/'.$_FILES['thumb2']['name']);
	$domain = 'http://localhost/gopada';
	$thumb2 = $domain.'/upload/product/thumb/'.$_FILES['thumb2']['name'];
	//thumb 3
	move_uploaded_file($_FILES['thumb3']['tmp_name'], '../upload/product/thumb/'.$_FILES['thumb3']['name']);
	$domain = 'http://localhost/gopada';
	$thumb3 = $domain.'/upload/product/thumb/'.$_FILES['thumb3']['name'];

	//Connect database
	$conn = mysql_connect("localhost", "root", "") or die ("Connect error");
	mysql_select_db('gopada',$conn);

	$sql = mysql_query("INSERT INTO product (name, img, imgthumb1, imgthumb2, imgthumb3, price, catalogid, info, content) VALUES ('".$name."', '".$img."', '".$thumb1 ."', '".$thumb2 ."', '".$thumb3 ."', '".$price."' ,'".$catalog."', '".$info."', '".$content."')");
	echo "<div id ='alert'> Đã thêm thành công sản phẩm: " .$name ."</div>";

}
else{
	echo "<div id ='alert'>Vui lòng nhập đủ trường dữ liệu! </div>";
}

?>

</body>
</html>
