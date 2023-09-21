<title>品好乳酪-好評推薦</title>
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


<P Align=center><img src="https://i.ibb.co/m8TGLxV/good.png" width="50%"></P>


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

/* //判斷是誰
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
			} */

//增加評論
// if(isset($_POST['like2']))
// {
	// echo"有";
	// echo<<<_END
	// <form method="POST" action="like.php">
	// 留下你的評論：<textarea name="ww" rows="5" cols="10"></textarea>
	// <input type="submit" value="送出" name="good">
// _END;
// }
// else echo"沒有";

//新增至資料庫
// if(isset($_POST['good']))
// {
	// $ww=$_POST['ww'];
	// $insert = "INSERT INTO `good`(`user`,`context`) VALUES ('$a','$ww')";
	// $result = mysqli_query($conn,$insert);
// }



//輸出評論
$sql = "SELECT * FROM `good` ";
$result = mysqli_query($conn,$sql);
$rows= $result->num_rows;


echo<<<_END
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
echo "</table><br><br>";

?>

<div style="background-color:#FFFFAB;">
<table bgcolor=#FFFFAB border="0">
<tr><td>關於我們</td>
<tr><td>電話06-2455694<br>電子信箱：pinhow@gmail.com<br>每周一公休<br>週二至週日 13:00-20:00</td></tr>

</div>
</center>