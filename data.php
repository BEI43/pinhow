<title>品好乳酪-修改資料</title>
<P Align=center><img src="https://i.ibb.co/mN6XxxP/logo2.png" width="30%"></P>

<html>
<center>

<div style="background-color:#FFFFAB;">
<table bgcolor=#FFFFAB border="0" height="50">
<form  method="POST" action="pagehome.php">
<tr><td><input type="button" name="home" value="首頁" onclick="location.href='pagehome.php'" style="border:0;background-color:#FFFFAB;font-weight:bold;font-size:20px"  ></td>
<td><input type="button" name="cake" value="重乳酪蛋糕" onclick="location.href='product.php'" style="border:0;background-color:#FFFFAB;font-weight:bold;font-size:20px"></td>
<td><input type="button" name="like" value="好評推薦" onclick="location.href='like.php'" style="border:0;background-color:#FFFFAB;font-weight:bold;font-size:20px" ></td>
<td><input type="button" name="about" value="關於"  onclick="location.href='about.php'" style="border:0;background-color:#FFFFAB;font-weight:bold;font-size:20px"></td>
<td><input type="button" name="sin" value="會員專區"  onclick="location.href='sin.php'" style="border:0;background-color:#FFFFAB;font-weight:bold;font-size:20px"></td>
<td><input type="button" name="manage" value="管理員"  onclick="location.href='manage.php'" style="border:0;background-color:#FFFFAB;font-weight:bold;font-size:20px"></td>

</tr>
</table>
</form>
</div>
<br>
<H1 align="center">會員專區</H1>
<center>
<b>修改會員資料</b>
</center>

<center>
<table border="0">
<td>
<form method="POST" action="data.php">
<p align="left">
帳號：<input type="text" name="user" value=""><br>
密碼：<input type="password" name="pw" value=""><br>
姓名：<input type="text" name="name" value=""><br>
電話：<input type="text" name="phone" value=""><br>
地址：<input type="text" name="adress" value=""><br>
信箱：<input type="text" name="mail" value=""><br>


<?php
//連線資料庫
$hn='127.0.0.1';
$db='pinhow';
$ur='root';
$pw='asd867790';

$conn= new mysqli($hn,$ur,$pw,$db);
if($conn->connect_error)
	die("無法連上資料庫(".$conn->connect_error .")".$connect_error);
else
	echo "";
echo "<br>";
if($_POST['user']!="" && $_POST['pw']!="" && $_POST['name']!="" && $_POST['phone']!="" && $_POST['adress']!="" && $_POST['mail']!="" )
{
	$update= "UPDATE `member` SET `user`='".$_POST['user']."',`pw`='".$_POST['pw']."',`name`='".$_POST['name']."',`phone`='".$_POST['phone']."',`adress`='".$_POST['adress']."',`mail`='".$_POST['mail']."' WHERE `login`='1'";
	//echo $update."搜尋+修改成功<br>";
	$result = mysqli_query($conn,$update);
	// echo $result."<br>";
	// if($result) echo  "成功<br>";
	// else echo"失敗<br>";
}
?>

</p>
<center>
<input type="submit" value="更新">
<input type="button" value="返回" onclick="location.href='sin.php'">
</form>
</td>
</center>
</table>


<div style="background-color:#FFFFAB;">
<table bgcolor=#FFFFAB border="0">
<tr><td>關於我們</td>
<tr><td>電話06-2455694<br>電子信箱：pinhow@gmail.com<br>每周一公休<br>週二至週日 13:00-20:00</td></tr>

</div>
</center>
