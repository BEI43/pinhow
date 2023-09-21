<title>品好乳酪-註冊</title>
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
<td><input type="button" name="sin" value="會員專區"  onclick="location.href='sin.php'" style="border:0;background-color:#FFFFAB;font-weight:bold;font-size:20px"></td>
<td><input type="button" name="manage" value="管理員"  onclick="location.href='manage.php'" style="border:0;background-color:#FFFFAB;font-weight:bold;font-size:20px"></td>

</tr>
</table>
</form>
</div>

<center>

</center>


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
	echo "連線成功<br>";
echo "<br>";

if($_POST['user']!="")
{
	$insert = "INSERT INTO `member`(`user`,`pw`,`name`,`phone`,`adress`,`mail`) VALUES('".$_POST['user']."','".$_POST['pw']."','".$_POST['name']."','".$_POST['phone']."','".$_POST['adress']."','".$_POST['mail']."')";
    $result = mysqli_query($conn, $insert);
	$insert = "INSERT INTO `car`(`user`) VALUES('".$_POST['user']."')";
    $result = mysqli_query($conn, $insert);
	$insert = "INSERT INTO `oder`(`user`) VALUES('".$_POST['user']."')";
    $result = mysqli_query($conn, $insert);
	echo '<script> alert("註冊成功");</script>';
	
	//顯示
	$query = "select * from `member` where `user`='".$_POST["user"]."'";
	$result = mysqli_query($conn,$query);
	$rows=mysqli_fetch_assoc($result);
	echo '<script> alert("請重新登入 '.$rows['name'].' ");window.location="sin.php"; </script>';
	// if(isset($rows['user']))
	// {
		// echo '<script> alert("帳號密碼輸入錯誤");</script>';
	// }
}




mysql_close();
?>


<div style="background-color:#FFFFAB;">
<table bgcolor=#FFFFAB border="0">
<tr><td>關於我們</td>
<tr><td>電話06-2455694<br>電子信箱：pinhow@gmail.com<br>每周一公休<br>週二至週日 13:00-20:00</td></tr>

</div>
</center>