<?php
$connect = mysql_connect("localhost", "root", "") or die ("Can not connect database !");
mysql_select_db("gopada", $connect);

$query = mysql_query("SELECT * FROM product ");

$arr_product = array();
while ($row = mysql_fetch_array($query)) {

	$product = new StdClass;
	$product->id = $row['id'];
	$product->name = $row['name'];
	$product->info = $row['info'];
	$product->price = $row['price'];
	$product->img = $row['img'];
	$product->thumb1 = $row['imgthumb1'];
	$product->thumb2 = $row['imgthumb2'];
	$product->thumb3 = $row['imgthumb3'];
	$product->catalog = $row['catalogid'];
	$product->paymethod = $row['methodpay'];
	$product->percent = $row['pecentpay'];
	array_push($arr_product, $product);
}
?>