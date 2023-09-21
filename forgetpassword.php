
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : Perfume 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130406

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Perfume by Ann</title>
<link href="http://fonts.googleapis.com/css?family=Oxygen:400,700,300" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="menu-wrapper">
		<div id="menu" class="container">
			<ul>
				<li><a href="index.php">首頁</a></li>
				<li><a href="perfume.php">香水</a></li>
				<li><a href="#">香氛</a></li>
				<li><a href="#">男性</a></li>
				<li><a href="#">女性</a></li>
				<li><a href="#">購物車</a></li>
				<li class="current_page_item"><a href="registered(ann).php">註冊/登入</a></li>
			</ul>
		</div>
	</div>
	<div id="logo" class="container">
		<h1>Perfume</a></h1>
	</div>
<form method="POST" action="login(ann).php" align="center">
修改密碼<br>
姓名：<input type="text" name="f_name"><br>
帳號：<input type="text" name="f_us"><br>
密碼：<input type="password" name="f_pw"><br>
<input type="submit" value="確定" name="forgot">      
<input type="button" value="返回" name="return" onclick="location.href='login(ann).php'"><br><br>
<?php
$hn='127.0.0.1';
$db='perfume';
$us='root';
$pw='ann20263';

$conn = new mysqli($hn,$us,$pw,$db);
if ($conn->connect_error) 
	die ("無法連上資料庫(".$conn->connect_errno .")".$conn->connect_error);
echo "<br>";

mysql_close();
?>