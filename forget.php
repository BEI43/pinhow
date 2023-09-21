<title>品好乳酪-忘記密碼</title>
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


<?php
//連線
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
$user=$_POST['user'];
$pw=$_POST['pw'];

echo<<<_END
<table border="0"><tr>
<form method='POST' action='forget.php'>
帳號：<input type="text" name="fguser"><br>
姓名：<input type="text" name="fgname"><br>
<input type="submit" value="送出" name="forget2">
<input type="button" value="返回" onclick="location.href='sin.php'">
</tr>
</table>
</form>
_END;


	
if(isset($_POST['forget2']))
{
	$fguser=$_POST['fguser'];
	$fgname=$_POST['fgname'];
	//判斷是誰
	$sql = "SELECT * FROM `member` WHERE `user`='$fguser' AND `name`='$fgname'";
	$result = mysqli_query($conn,$sql);
	//echo $result."執行成功<br>";
	$rows= $result->num_rows;
	for($j=0;$j<$rows;$j++)
{
	$result->data_seek($j);
	$user=$result->fetch_assoc()['user'];
	//echo $user;
	
	$result->data_seek($j);
	$name=$result->fetch_assoc()['name'];
	//echo $name;
	
	$result->data_seek($j);
	$pw=$result->fetch_assoc()['pw'];
	//echo $pw;
}	
	
	if($fguser==$user && $fgname==$name)
	{
		echo "密碼：".$pw;
	}
	else echo '<script> alert("無此帳號或姓名"); window.location="forget.php"; </script>';	
	
}

?>

<div style="background-color:#FFFFAB;">
<table bgcolor=#FFFFAB border="0">
<tr><td>關於我們</td>
<tr><td>電話06-2455694<br>電子信箱：pinhow@gmail.com<br>每周一公休<br>週二至週日 13:00-20:00</td></tr>

</div>
</center>