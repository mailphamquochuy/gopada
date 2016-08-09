<?php
$connect = mysql_connect("localhost", "root", "") or die ("Can not connect database !");
mysql_select_db("gopada", $connect);

// Query database////
$new = mysql_query("SELECT * FROM new ");
$array_new = array();

while ($row = mysql_fetch_array($new)){
	$itemnew = new StdClass;
	$itemnew->title = $row['title'];
	$itemnew->intro = $row['intro'];
	$itemnew->content = $row['content'];
	$itemnew->img = $row['img'];
	$itemnew->catalog = $row['catalogid'];
	array_push($array_new, $itemnew);
}


?>