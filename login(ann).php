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

<form method="POST" action="perfume.php" align="center">
登入 <br>
帳號：<input type="text" name="l_us"><br>
密碼：<input type="password" name="l_pw"><br>
驗證碼：
<?php
	session_start();
	for ($i=1;$x<=3;$x++)
	{
		$r=rand(1,2);
		if ($r==1)
		{
			$code.=rand(0,9);
		}
		else if ($r==2)
		{
			$code.=chr(rand(65,90));
		}
	}
	setcookie('code',$code,time()+3600);
	echo $code;
	$_SESSION['code']=$code;
?><input type="text" name="r_code">
<input type="button" value="更新" name="renew" onclick="location.href='login(ann).php'"><br>
<?php 
if (isset($_POST['renew']))
{
	for ($i=1;$x<=3;$x++)
	{
		$r=rand(1,2);
		if ($r==1)
		{
			$code.=rand(0,9);
		}
		else if ($r==2)
		{
			$code.=chr(rand(65,90));
		}
	}
	setcookie('code',$code,time()+3600);
	echo $code;
	$_SESSION['code']=$code;
} 
?>
<input type="submit" value="確定" name="login"><br>
<?php echo "<a href='forgetpassword.php'>忘記密碼?</a><br>" ?>
<br>
<?php
$hn='127.0.0.1';
$db='perfume';
$us='root';
$pw='ann20263';

$conn = new mysqli($hn,$us,$pw,$db);
if ($conn->connect_error) 
	die ("無法連上資料庫(".$conn->connect_errno .")".$conn->connect_error);

echo "<br>";

if (isset($_POST['registered']))
{
	$insert = "INSERT INTO `user`(`姓名`, `帳號`, `密碼`) VALUES ('".$_POST['r_name']."','".$_POST['r_us']."','".$_POST['r_pw']."')";
	$result = mysqli_query($conn, $insert);
}
$query="SELECT * FROM `user`";
$result=mysqli_query($conn,$query);

if ($_POST['forgot'] != null)
{
	echo "<script> alert('密碼修改完成'); </script>";
	$update = "UPDATE `user` SET `帳號`='".$_POST['f_us']."',`密碼`='".$_POST['f_pw']."' WHERE `姓名`='".$_POST['f_name']."'";
	$result = mysqli_query($conn, $update);
}

mysql_close();
?>
</form>