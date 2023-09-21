<title>品好乳酪-訂單</title>
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

<H1 align="center">會員專區</H1>
<center>
<b>我的訂單</b>
</center>



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

//判斷是誰的購物車
$sql = "SELECT * FROM `member` WHERE `login`='1'";
//echo $sql."查詢成功<br>";
$result = mysqli_query($conn,$sql);
//echo $result."執行成功<br>";
$rows= $result->num_rows;
			for($j=0;$j<$rows;$j++)
			{
				$result->data_seek($j);
				$a=$result->fetch_assoc()['user'];
				//echo "帳號：".$a;
			}

if(!isset($_POST['like2']))
{
//顯示訂單
$query="SELECT * from `oder` WHERE `user`='$a' ";
// echo $query;
$result=mysqli_query($conn,$query);
$rows= $result->num_rows;
// echo $rows;
if($rows!=="0" && $rows!=="5")
{

echo<<<_END
<form method="POST" action="checkout.php">
<table border="1" align="center" rules=rows width="50%">
<tr align="center"><td>訂單編號</td><td>金額</td><td>訂單狀態</td><td>取消/評價</td></tr>
_END;
for($j=0;$j<$rows;$j++)
{
$result->data_seek($j);
$num=$result->fetch_assoc()['num'];
$result->data_seek($j);
$money=$result->fetch_assoc()['money'];

$result->data_seek($j);
$status=$result->fetch_assoc()['status'];
}

if($status=="1")
{
$s="訂單處理中";
echo "<tr align='center'><td>".$num."</td><td>".$money."</td><td>".$s."</td><td><input type='submit' value='取消' name='cancel' onclick=location.href='checkout.php'></td></tr>";
echo "</form>";
}
else if($status=="2")
{
$s="已接收匯款";
echo "<tr><td>".$num."</td><td>".$money."</td><td>".$s."</td><td>無法取消</td></tr>";
}
else if($status=="3")
{
$s="商品運送中";
echo "<tr><td>".$num."</td><td>".$money."</td><td>".$s."</td><td>無法取消</td></tr>";
}
else if($status=="4")
{
$s="完成訂單";
echo "<form method='POST' action='checkout.php'>";
echo "<tr><td>".$num."</td><td>".$money."</td><td>".$s."</td><td><input type='submit' value='評價' name='like2' ></td></tr>";
echo "</form>";
}
// else if($status=="5")
// {
// $s="完成訂單";
// echo "<tr><td>".$num."</td><td>".$money."</td><td>".$s."</td><td>完成日期</td></tr>";
// }
	
}
else if($rows =="0")
{
		echo<<<_END
<table border="1" align="center">
<tr><td>訂單編號</td><td>金額</td><td>訂單狀態</td><td>取消/評價</td></tr>
_END;
}
// else if()
// {
	
// }

echo "</table>";
echo "<form method='POST' action='checkout.php'><br><input type='button' value='返回' name='re' onclick=location.href='sin.php'>";
echo "</form>";


//取消訂單
if(isset($_POST['cancel']))
{
	$delete = "DELETE FROM `oder` WHERE `user`='$a'";
	$result=mysqli_query($conn,$delete);
	$insert = "INSERT INTO `oder`(`user`) VALUES('$a')";
    $result = mysqli_query($conn, $insert);
	echo '<script> window.location="checkout.php"; </script>';
}
}

//增加評論
if(isset($_POST['like2']))
{
	echo<<<_END
	<form method="POST" action="checkout.php">
	留下你的評論：<textarea name="ww" rows="5" cols="10"></textarea>
	<input type="submit" value="送出" name="good">
_END;
    

}


//新增至資料庫
if(isset($_POST['good']))
{
	$ww=$_POST['ww'];
	$insert = "INSERT INTO `good`(`user`,`context`) VALUES ('$a','$ww')";
	$result = mysqli_query($conn,$insert);
	$delete = "DELETE FROM `oder` WHERE `user`='$a'";
	$result=mysqli_query($conn,$delete);
	$insert = "INSERT INTO `oder`(`user`) VALUES('$a')";
    $result = mysqli_query($conn, $insert);
	echo '<script> window.location="like.php"; </script>';
}

?>

<div style="background-color:#FFFFAB;">
<table bgcolor=#FFFFAB border="0">
<tr><td>關於我們</td>
<tr><td>電話06-2455694<br>電子信箱：pinhow@gmail.com<br>每周一公休<br>週二至週日 13:00-20:00</td></tr>

</div>
</center>