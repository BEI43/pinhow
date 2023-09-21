<title>品好乳酪-會員專區</title>
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


//確認登入帳號login=1者
	$sql = "SELECT * FROM `member` WHERE `login`='1'";
	//echo $sql."搜尋+修改成功<br>";
	$result = mysqli_query($conn,$sql);
	//1為登入0為沒登入
	$rows= mysqli_num_rows($result);
	//echo $rows."重點<br>";
	//確認
	// echo $result."??<br>";
	// if($result) echo  "成功<br>";
	// else echo"失敗<br>";
	if($rows==1)
	{
		//登入確認
		$user=$_POST['user'];
		$pw=$_POST['pw'];
		$code2=$_POST['code2'];
		echo<<<_END
		<center>
		<H1 align="center">會員專區</H1>
_END;
		//顯示會員資料
			echo "<b>會員資料<br></b>";
			echo "<table border='0'>";
			echo "<td align='left'>";
			$query="SELECT * from `member` WHERE `login`='1'";
			$result=mysqli_query($conn,$query);
			$rows= $result->num_rows;
			for($j=0;$j<$rows;$j++)
			{
				$result->data_seek($j);
				echo '帳號：'.$result->fetch_assoc()['user'].'<br>';
				$result->data_seek($j);
				echo '密碼：'.$result->fetch_assoc()['pw'].'<br>';
				$result->data_seek($j);
				echo '姓名：'.$result->fetch_assoc()['name'].'<br>';
				$result->data_seek($j);
				echo '電話：'.$result->fetch_assoc()['phone'].'<br>';
				$result->data_seek($j);
				echo '地址：'.$result->fetch_assoc()['adress'].'<br>';
				$result->data_seek($j);
				echo '信箱：'.$result->fetch_assoc()['mail'].'<br><br>';
			}
			echo "</td>";
			echo "</table>";
		
		echo<<<_END
		<form method="POST"  action="sin.php">
		<input type="button" name="buy" value="我的購物車" onclick="location.href='buy.php'">
		<input type="button" name="check" value="我的訂單" onclick="location.href='checkout.php'">
		<input type="button" name="data" value="修改會員資料" onclick="location.href='data.php'">
		<input type="submit" name="out" value="登出"><br><br>
		</form>
		</center>
_END;
			
		
		//修改為登出
		if(isset($_POST['out']))
		{
			$user=$_POST['user'];
			$pw=$_POST['pw'];
			$code2=$_POST['code2'];
			echo "抓取".$user.$pw."<br>";
			///login out
			$update= "UPDATE `member` SET `login`='0' WHERE `login`='1'";
			echo $update."搜尋+修改成功<br>";
			$result = mysqli_query($conn,$update);
			echo $result."<br>";
			if($result) echo  "成功<br>";
			else echo"失敗<br>";
			
			echo '<script> alert("您已登出'.$rows['user'].'");window.location="sin.php"; </script>';
		}
		
		
	}
	else if($rows==0)
	{
		session_start();
		for($a=0;$a<4;$a++)
		{
			$r=rand(1,3);
			if($r==1)
			{
				$code.=rand(0,9);
			}
			else if($r==2)
			{
				$code.=chr(rand(65,90));
			}
			else
			{
				$code.=chr(rand(97,122));
			}
		}
		setcookie('code',$code,time()+3600);
		

?>

<P Align=center><img src="https://i.ibb.co/2yFprL7/member.jpg" width="40%"></P>


<?php
echo<<<_END
<center>

<table border="0">
<tr><td>
<form method="POST" action="sin2.php">
<p align="left">
帳號：<input type="text" name="user" value=""><br>
密碼：<input type="password" name="pw" value=""><br>
</p>
<input type="submit" value="登入">
<input type="button" name="forget" value="忘記密碼" onclick=location.href='forget.php'>
</form></td></tr>
</table>

<br><br>
_END;
?>

<P Align=center><img src="https://i.ibb.co/qNTPP4x/member2.jpg" width="40%"></P>

<?php
echo<<<_END
<table border="0">
<tr><td>
<form method="POST" action="sin3.php">
<p align="left">
帳號：<input type="text" name="user" value=""><br>
密碼：<input type="password" name="pw" value=""><br>
姓名：<input type="text" name="name" value=""><br>
電話：<input type="text" name="phone" value=""><br>
地址：<input type="text" name="adress" value=""><br>
信箱：<input type="text" name="mail" value=""><br>
</p>
<input type="submit" value="註冊">
</form></td></tr>
</table>
</center>
_END;
// setcookie('user',$user,time()+3600);
// setcookie('pw',$pw,time()+3600);
	}




// 驗證碼
// echo $code
//：<input type="text" name="code2" value=""><br>

 



?>







<center>
<div style="background-color:#FFFFAB;">
<table bgcolor=#FFFFAB border="0">
<tr><td>關於我們</td>
<tr><td>電話06-2455694<br>電子信箱：pinhow@gmail.com<br>每周一公休<br>週二至週日 13:00-20:00</td></tr>
</div>
</center>

