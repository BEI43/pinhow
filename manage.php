<title>品好乳酪-管理員</title>
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
	$sql = "SELECT * FROM `member` WHERE `login`='2'";
	//echo $sql."搜尋+修改成功<br>";
	$result = mysqli_query($conn,$sql);
	//1為登入0為沒登入
	$rows= mysqli_num_rows($result);
	//echo $rows;
if($rows==1)
{
	echo<<<_END
	<form method="POST" action="manage.php">
	帳號：<input type="text" name="user" value=""><br>
	密碼：<input type="password" name="pw" value=""><br>
	<input type="submit" value="確認" name="manage1" onclick="location.href='manage.php'">
	</form>
_END;

	if(isset($_POST['manage1']))
	{
		$aa=$_POST['user'];
		$bb=$_POST['pw'];
		if($aa == "asd7800237" && $bb == "asd867790")
		{
		$sql = "SELECT * FROM `member` WHERE `login`='2'";
		//`user`='".$_POST['user']."' and `pw`='".$_POST['pw']."' and 
		//echo $sql;
		$result = mysqli_query($conn,$sql);
		//echo $result;
		// if($result) echo  "成功<br>";
		// else echo"失敗<br>";
		$rows=mysqli_fetch_assoc($result);
		
		$update= "UPDATE `member` SET `login`='3' WHERE `login`='2' ";
		//echo $update."搜尋+修改成功<br>";
		$result = mysqli_query($conn,$update);
		echo '<script> alert("成功登入管理系統");window.location="manage.php"; </script>';	
		}
		else echo '<script> alert("管理者帳號或密碼錯誤");window.location="manage.php"; </script>';
	}
	//else echo '<script> alert("登入失敗");window.location="manage.php"; </script>';
}

$sql = "SELECT * FROM `member` WHERE `login`='3'";
	//echo $sql."搜尋+修改成功<br>";
	$result = mysqli_query($conn,$sql);
	//1為登入0為沒登入
	$rows= mysqli_num_rows($result);
	//echo $rows;
if($rows==1)
{	
	echo<<<_END
	<form method="POST" action="manage.php">
	<input type="submit" value="訂單管理" name="manageoder">
	<input type="submit" value="評價管理" name="managelike">
	<input type="submit" value="管理員登出" name="manageout"><br><br>
_END;

	if(isset($_POST['manageout']))
	{
		$update= "UPDATE `member` SET `login`='2' WHERE `login`='3' ";
		//echo $update."搜尋+修改成功<br>";
		$result = mysqli_query($conn,$update);
		echo '<script> alert("管理者已登出");window.location="manage.php"; </script>';	
	}
	
	if(isset($_POST['manageoder']))
	{
		echo<<<_END
		<table border="1" align="center" rules=rows width="50%">
		<form method="POST" action="manage.php">
		<tr align="center"><td>訂單編號</td><td>訂單狀態</td></tr>
_END;
		$query="SELECT * from `oder`  ";
		// echo $query;
		$result=mysqli_query($conn,$query);
		$rows= $result->num_rows;
		for($j=0;$j<$rows;$j++)
		{
		$result->data_seek($j);
		$status=$result->fetch_assoc()['status'];
		$result->data_seek($j);
		$num=$result->fetch_assoc()['num'];	
			if($status!=0)
			{
				if($status==1)
					$s="訂單處理中";
				if($status==2)
					$s="已接收匯款";
				if($status==3)
					$s="商品運送中";
				if($status==4)
					$s="完成訂單";
					
			echo "<tr align='center'><td>".$num."</td><td>".$s."</td></tr>";
				
			}
		echo "</tr>";
		
		}
		ECHO "</table>";
		echo "<br><br>產品編號：<input type='text' name='odernum'><input type='submit' value='已接收匯款' name='ok1'><input type='submit' value='商品運送中' name='ok2'><input type='submit' value='完成' name='ok3'>";
		ECHO "</form>";
		
	}
	
	if(isset($_POST['ok1']))
	{
		$update = "UPDATE `oder` SET `status`='2' WHERE `num`='".$_POST['odernum']."' ";
		$result = mysqli_query($conn,$update);
	}
	if(isset($_POST['ok2']))
	{
		$update = "UPDATE `oder` SET `status`='3' WHERE `num`='".$_POST['odernum']."' ";
		$result = mysqli_query($conn,$update);
	}
	if(isset($_POST['ok3']))
	{
		$update = "UPDATE `oder` SET `status`='4' WHERE `num`='".$_POST['odernum']."' ";
		$result = mysqli_query($conn,$update);
	}
	
	if(isset($_POST['managelike']))
	{
		$sql = "SELECT * FROM `good` ";
		$result = mysqli_query($conn,$sql);
		$rows= $result->num_rows;


		echo<<<_END
		<form method="POST" action="manage.php">
		<table border="1" rules=rows width="50%" align="center">
		<tr align="center"><td>編號</td><td>評論</td></tr>
_END;
		for($j=0;$j<$rows;$j++)
			{
				echo "<tr align='center'><td>";
				$result->data_seek($j);
				$num=$result->fetch_assoc()['num'];
				echo $num."</td>";
				
				echo "<td>";
				$result->data_seek($j);
				$goodcontexy=$result->fetch_assoc()['context'];
				echo $goodcontexy."</td></tr>";
			}
		echo "</table>";
		echo "<br>編號：<input type='text' name='likenum'><input type='submit' name='likedel' value='刪除'>";
			}
		
		
		if(isset($_POST['likedel']))
		{
			$delete = "DELETE FROM `good` WHERE `num`='".$_POST['likenum']."'";
			$result=mysqli_query($conn,$delete);
			
		}
}

?>


<div style="background-color:#FFFFAB;">
<table bgcolor=#FFFFAB border="0">
<tr><td>關於我們</td>
<tr><td>電話06-2455694<br>電子信箱：pinhow@gmail.com<br>每周一公休<br>週二至週日 13:00-20:00</td></tr>

</div>
</center>
