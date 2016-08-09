<?php
$host = "localhost";
$database = "gopada";
$user = "root";
$pass = "";

// Connect///

$connect = mysql_connect("$host", "$user", "$pass") or die ("Can not connect database !");
mysql_select_db("gopada", $connect);


/*
//Test connect//

if (!$connect) {
	echo "not connect";
}
else {
	echo "connect success!";
}
*/












?>