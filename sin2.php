<title>品好乳酪-登入</title>
<P Align=center><img src="https://i.ibb.co/mN6XxxP/logo2.png" width="30%"></P>
<?php session_start(); ?>
<html>
<center>

<div style="background-color:#FFFFAB;">
<table bgcolor=#FFFFAB border="0">
<form  method="POST" action="pagehome.php" height="50">
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


//登入確認
$user=$_POST['user'];
$pw=$_POST['pw'];
$code2=$_POST['code2'];

if ($user!=null && $pw!=null)//如果使用者名稱和密碼都不為空
{
	
	$sql = "SELECT * FROM `member` WHERE `user`='".$_POST['user']."' and `pw`='".$_POST['pw']."'";
	//echo $sql;
	$result = mysqli_query($conn,$sql);
	// echo $result;
	// if($result) echo  "成功<br>";
	// else echo"失敗<br>";
	$rows=mysqli_fetch_assoc($result);
	//echo $rows;
	
	///login
	$update= "UPDATE `member` SET `login`='1' WHERE `user`='".$_POST['user']."' and `pw`='".$_POST['pw']."'";
	//echo $update."搜尋+修改成功<br>";
	$result = mysqli_query($conn,$update);
	// echo $result."<br>";
	// if($result) echo  "成功<br>";
	// else echo"失敗<br>";
	
	$sql = "SELECT * FROM `member` WHERE `login`='1'";
	//echo $sql."搜尋+修改成功<br>";
	$result = mysqli_query($conn,$sql);
	//1為登入0為沒登入
	$rows= mysqli_num_rows($result);
	//顯示個人資料
	if($rows==1)
	{
	echo '<script> alert("歡迎登入 '.$rows['name'].' ");window.location="sin.php"; </script>';
	//轉移頁面window.location="sin.php";
	}
	else
	//帳密輸入錯誤
	{
	echo '<script> alert("帳號密碼輸入錯誤");window.location="sin.php"; </script>';
	}
}





mysql_close();
?>


<div style="background-color:#FFFFAB;">
<table bgcolor=#FFFFAB border="0">
<tr><td>關於我們</td>
<tr><td>電話06-2455694<br>電子信箱：pinhow@gmail.com<br>每周一公休<br>週二至週日 13:00-20:00</td></tr>

</div>
</center>

