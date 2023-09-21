<title>品好乳酪-我的購物車</title>
<P Align=center><img src="https://i.ibb.co/mN6XxxP/logo2.png" width="30%"></P>

<html>
<center>

<div style="background-color:#FFFFAB;">
<table bgcolor=#FFFFAB border="0" height="50">
<form  method="POST" action="buy.php">
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
<b>我的購物車</b>
</center>

<center>



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
//判斷購買產品及數量
//產品1
$p1=$_POST['pd1'];
$p2=$_POST['pd2'];
$p3=$_POST['pd3'];
$p4=$_POST['pd4'];
$p5=$_POST['pd5'];
$p6=$_POST['pd6'];
$p7=$_POST['pd7'];
$p8=$_POST['pd8'];
$p9=$_POST['pd9'];

//else echo "未新增";

//確認是否有增加商品
if( isset($_POST['ok']) )
{
	if($a!==null)
	{
		switch ($_POST['pd1'])
		{
			case 0:
			$insert = "UPDATE `car` SET `1`='0' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 1:
			$insert = "UPDATE `car` SET `1`='1' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 2:
			$insert = "UPDATE `car` SET `1`='2' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 3:
			$insert = "UPDATE `car` SET `1`='3' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 4:
			$insert = "INSERT INTO `car`(`1`,`user`) VALUES ('4','$a') ";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 5:
			$insert = "UPDATE `car` SET `1`='4' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
		}

		//2
		switch ($_POST['pd2'])
		{
			case 0:
			$insert = "UPDATE `car` SET `2`='0' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 1:
			$insert = "UPDATE `car` SET `2`='1' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 2:
			$insert = "UPDATE `car` SET `2`='2' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 3:
			$insert = "UPDATE `car` SET `2`='3' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 4:
			$insert = "UPDATE `car` SET `2`='4' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 5:
			$insert = "UPDATE `car` SET `2`='5' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
		}

		//3
		switch ($_POST['pd3'])
		{
			case 0:
			$insert = "UPDATE `car` SET `3`='0' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 1:
			$insert = "UPDATE `car` SET `3`='1' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 2:
			$insert = "UPDATE `car` SET `3`='2' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 3:
			$insert = "UPDATE `car` SET `3`='3' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 4:
			$insert = "UPDATE `car` SET `3`='4' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 5:
			$insert = "UPDATE `car` SET `3`='5' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
		}

		//4
		switch ($_POST['pd4'])
		{
			case 0:
			$insert = "UPDATE `car` SET `4`='0' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 1:
			$insert = "UPDATE `car` SET `4`='1' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 2:
			$insert = "UPDATE `car` SET `4`='2' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 3:
			$insert = "UPDATE `car` SET `4`='3' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 4:
			$insert = "UPDATE `car` SET `4`='4' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 5:
			$insert = "UPDATE `car` SET `4`='5' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
		}

		//5
		switch ($_POST['pd5'])
		{
			case 0:
			$insert = "UPDATE `car` SET `5`='0' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 1:
			$insert = "UPDATE `car` SET `5`='1' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 2:
			$insert = "UPDATE `car` SET `5`='2' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 3:
			$insert = "UPDATE `car` SET `5`='3' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 4:
			$insert = "UPDATE `car` SET `5`='4' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 5:
			$insert = "UPDATE `car` SET `5`='5' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
		}

		//6
		switch ($_POST['pd6'])
		{
			case 0:
			$insert = "UPDATE `car` SET `6`='0' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 1:
			$insert = "UPDATE `car` SET `6`='1' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 2:
			$insert = "UPDATE `car` SET `6`='2' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 3:
			$insert = "UPDATE `car` SET `6`='3' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 4:
			$insert = "UPDATE `car` SET `6`='4' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 5:
			$insert = "UPDATE `car` SET `6`='5' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
		}

		//7
		switch ($_POST['pd7'])
		{
			case 0:
			$insert = "UPDATE `car` SET `7`='0' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 1:
			$insert = "UPDATE `car` SET `7`='1' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 2:
			$insert = "UPDATE `car` SET `7`='2' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 3:
			$insert = "UPDATE `car` SET `7`='3' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 4:
			$insert = "UPDATE `car` SET `7`='4' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 5:
			$insert = "UPDATE `car` SET `7`='5' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
		}

		//8
		switch ($_POST['pd8'])
		{
			case 0:
			$insert = "UPDATE `car` SET `8`='0' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 1:
			$insert = "UPDATE `car` SET `8`='1' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 2:
			$insert = "UPDATE `car` SET `8`='2' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 3:
			$insert = "UPDATE `car` SET `8`='3' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 4:
			$insert = "UPDATE `car` SET `8`='4' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 5:
			$insert = "UPDATE `car` SET `8`='5' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
		}

		//9
		switch ($_POST['pd9'])
		{
			case 0:
			$insert = "UPDATE `car` SET `9`='0' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 1:
			$insert = "UPDATE `car` SET `9`='1' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 2:
			$insert = "UPDATE `car` SET `9`='2' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 3:
			$insert = "UPDATE `car` SET `9`='3' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 4:
			$insert = "UPDATE `car` SET `9`='4' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
			
			case 5:
			$insert = "UPDATE `car` SET `9`='5' WHERE `user`='$a'";
			$result = mysqli_query($conn, $insert);
			break;
		}
	}
	else echo  '<script> alert("請先登入");window.location="sin.php";</script>';

}





			//顯示目前訂單
			echo "<form method='POST' action='buy.php'>";
			echo "<table border='1' rules=rows width='50%' >";
			//echo "< align='left'>";
			$query="SELECT * from `car` WHERE `user`='$a' ";
			//echo $query;
			$result=mysqli_query($conn,$query);
			$rows= $result->num_rows;
			echo "<tr align='center'><td>產品</td><td>單價</td><td>數量</td><td>小計</td><td></td><td></td></tr>";
			for($j=0;$j<$rows;$j++)
			{
				//1
				$result->data_seek($j);
				$pp1=$result->fetch_assoc()['1'];
				if($pp1==0)
				{
					$app1=0;
				}
				
				else {$app1=$pp1*720;
				echo "<tr align='center'><td><P Align=center><img src='https://i.ibb.co/CbnX1dz/p1.jpg' width='30%'></P>經典原味乳酪</td><td>720</td><td>".$pp1."</td><td>".$app1."</td><td><input type='submit' name='u1' value='+' onclick=location.href='buy.php'></td><td><input type='submit' name='d1' value='-' onclick=location.href='buy.php'></td></tr>";
				//onclick="location.href='buy.php'"
				//<a href="https://imgbb.com/"><img src="https://i.ibb.co/CbnX1dz/p1.jpg" alt="p1" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'>best ebay photos</a><br />
				}
				
				//2
				$result->data_seek($j);
				$pp2=$result->fetch_assoc()['2'];
				if($pp2==0)
				{
					$app2=0;
				}
				else {$app2=$pp2*780;
				echo '<tr align="center"><td><P Align=center><img src="https://i.ibb.co/273dnZq/p2.jpg" width="30%"></P>花生生巧乳酪蛋糕</td><td>780</td><td>'.$pp2.'</td><td>'.$app2.'</td><td><input type="submit" name="u2" value="+" onclick=location.href="buy.php"></td><td><input type="submit" name="d2" value="-" onclick=location.href="buy.php"></td></tr>';
				//<a href="https://imgbb.com/"><img src="https://i.ibb.co/273dnZq/p2.jpg" alt="p2" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'>best ebay photos</a><br />
				}
				
				//3
				$result->data_seek($j);
				$pp3=$result->fetch_assoc()['3'];
				if($pp3==0)
				{
					$app3=0;
				}
				else {$app3=$pp3*780;
				echo '<tr align="center"><td><P Align=center><img src="https://i.ibb.co/f9HwwMF/p3.jpg" width="30%"></P>仲夏莓果</td><td>780</td><td>'.$pp3.'</td><td>'.$app3.'</td><td><input type="submit" name="u3" value="+" onclick=location.href="buy.php"></td><td><input type="submit" name="d3" value="-" onclick=location.href="buy.php"></td></tr>';
				//<a href="https://imgbb.com/"><img src="https://i.ibb.co/f9HwwMF/p3.jpg" alt="p3" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'>best ebay photos</a><br />
				}
				
				//4
				$result->data_seek($j);
				$pp4=$result->fetch_assoc()['4'];
				if($pp4==0)
				{
					$app4=0;
				}
				else{ $app4=$pp4*800;
				echo '<tr align="center"><td><P Align=center><img src="https://i.ibb.co/vxd4jfz/p4.jpg" width="30%"></P>可可亞生巧乳酪</td><td>800</td><td>'.$pp4.'</td><td>'.$app4.'</td><td><input type="submit" name="u4" value="+" onclick=location.href="buy.php"></td><td><input type="submit" name="d4" value="-" onclick=location.href="buy.php"></td></tr>';
				//<a href="https://imgbb.com/"><img src="https://i.ibb.co/vxd4jfz/p4.jpg" alt="p4" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'>best ebay photos</a><br />
				}
				
				//5
				$result->data_seek($j);
				$pp5=$result->fetch_assoc()['5'];
				if($pp5==0)
				{
					$app5=0;
				}
				else {$app5=$pp5*800;
				echo '<tr align="center"><td><P Align=center><img src="https://i.ibb.co/tMLPft9/p5.jpg" width="30%"></P>抹茶生巧乳酪</td><td>800</td><td>'.$pp5.'</td><td>'.$app5.'</td><td><input type="submit" name="u5" value="+" onclick=location.href="buy.php"></td><td><input type="submit" name="d5" value="-" onclick=location.href="buy.php"></td></tr>';
				//<a href="https://imgbb.com/"><img src="https://i.ibb.co/tMLPft9/p5.jpg" alt="p5" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'>best ebay photos</a><br />
				}
				
				//6
				$result->data_seek($j);
				$pp6=$result->fetch_assoc()['6'];
				if($pp6==0)
				{
					$app6=0;
				}
				else {$app6=$pp6*880;
				echo '<tr align="center"><td><P Align=center><img src="https://i.ibb.co/7pPJfyR/p6.jpg" width="30%"></P>抹茶草莓生巧乳酪</td><td>880</td><td>'.$pp6.'</td><td>'.$app6.'</td><td><input type="submit" name="u6" value="+" onclick=location.href="buy.php"></td><td><input type="submit" name="d6" value="-" onclick=location.href="buy.php"></td></tr>';
				//<a href="https://imgbb.com/"><img src="https://i.ibb.co/7pPJfyR/p6.jpg" alt="p6" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'>best ebay photos</a><br />
				}
				
				//7
				$result->data_seek($j);
				$pp7=$result->fetch_assoc()['7'];
				if($pp7==0)
				{
					$app7=0;
				}
				else {$app7=$pp7*800;
				echo '<tr align="center"><td><P Align=center><img src="https://i.ibb.co/FDjDh29/p7.jpg" width="30%"></P>摩卡生巧乳酪</td><td>800</td><td>'.$pp7.'</td><td>'.$app7.'</td><td><input type="submit" name="u7" value="+" onclick=location.href="buy.php"></td><td><input type="submit" name="d7" value="-" onclick=location.href="buy.php"></td></tr>';
				//<a href="https://imgbb.com/"><img src="https://i.ibb.co/FDjDh29/p7.jpg" alt="p7" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'>best ebay photos</a><br />
				}
				
				//8
				$result->data_seek($j);
				$pp8=$result->fetch_assoc()['8'];
				if($pp8==0)
				{
					$app8=0;
				}
				else {$app8=$pp8*760;
				echo '<tr align="center"><td><P Align=center><img src="https://i.ibb.co/L6WXhjM/p8.jpg" width="30%"></P>花生生巧乳酪蛋糕</td><td>760</td><td>'.$pp8.'</td><td>'.$app8.'</td><td><input type="submit" name="u8" value="+" onclick=location.href="buy.php"></td><td><input type="submit" name="d8" value="-" onclick=location.href="buy.php"></td></tr>';
				//<a href="https://imgbb.com/"><img src="https://i.ibb.co/L6WXhjM/p8.jpg" alt="p8" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'>best ebay photos</a><br />
				}
				
				//9
				$result->data_seek($j);
				$pp9=$result->fetch_assoc()['9'];
				if($pp9==0)
				{
					$app9=0;
				}
				else {$app9=$pp9*780;
				echo '<tr align="center"><td><P Align=center><img src="https://i.ibb.co/V2wBXmX/p9.jpg" width="30%"></P>太妃糖生巧乳酪</td><td>780</td><td>'.$pp9.'</td><td>'.$app9.'</td><td><input type="submit" name="u9" value="+" onclick=location.href="buy.php"></td><td><input type="submit" name="d9" value="-" onclick=location.href="buy.php"></td></tr>';
				//<a href="https://imgbb.com/"><img src="https://i.ibb.co/V2wBXmX/p9.jpg" alt="p9" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'>best ebay photos</a><br />
				}
			}
			$total1=$pp1+$pp2+$pp3+$pp4+$pp5+$pp6+$pp7+$pp8+$pp9;
			$totala=$app1+$app2+$app3+$app4+$app5+$app6+$app7+$app8+$app9;
			echo "<tr align='center'><td>總計</td><td></td><td>".$total1."</td><td>".$totala."</td><td></td><td></td></tr>";
			echo "</table>";
			echo "</form>";

///增加		
if(isset($_POST['u1']))
{
	$pp1=$pp1+1;
	$update = "UPDATE `car` SET `1`='$pp1' WHERE `user`='$a'";
	$result=mysqli_query($conn,$update);
	echo '<script> window.location="buy.php"; </script>';
}
else if(isset($_POST['u2']))
{
	$pp2=$pp2+1;
	$update = "UPDATE `car` SET `2`='$pp2' WHERE `user`='$a'";
	$result=mysqli_query($conn,$update);
	echo '<script> window.location="buy.php"; </script>';
}
else if(isset($_POST['u3']))
{
	$pp3=$pp3+1;
	$update = "UPDATE `car` SET `3`='$pp3' WHERE `user`='$a'";
	$result=mysqli_query($conn,$update);
	echo '<script> window.location="buy.php"; </script>';
}
else if(isset($_POST['u4']))
{
	$pp4=$pp4+1;
	$update = "UPDATE `car` SET `4`='$pp4' WHERE `user`='$a'";
	$result=mysqli_query($conn,$update);
	echo '<script> window.location="buy.php"; </script>';
}
else if(isset($_POST['u5']))
{
	$pp5=$pp5+1;
	$update = "UPDATE `car` SET `5`='$pp5' WHERE `user`='$a'";
	$result=mysqli_query($conn,$update);
	echo '<script> window.location="buy.php"; </script>';
}
else if(isset($_POST['u6']))
{
	$pp6=$pp6+1;
	$update = "UPDATE `car` SET `6`='$pp6' WHERE `user`='$a'";
	$result=mysqli_query($conn,$update);
	echo '<script> window.location="buy.php"; </script>';
}
else if(isset($_POST['u7']))
{
	$pp7=$pp7+1;
	$update = "UPDATE `car` SET `7`='$pp7' WHERE `user`='$a'";
	$result=mysqli_query($conn,$update);
	echo '<script> window.location="buy.php"; </script>';
}
else if(isset($_POST['u8']))
{
	$pp8=$pp8+1;
	$update = "UPDATE `car` SET `8`='$pp8' WHERE `user`='$a'";
	$result=mysqli_query($conn,$update);
	echo '<script> window.location="buy.php"; </script>';
}
else if(isset($_POST['u9']))
{
	$pp9=$pp9+1;
	$update = "UPDATE `car` SET `9`='$pp9' WHERE `user`='$a'";
	$result=mysqli_query($conn,$update);
	echo '<script> window.location="buy.php"; </script>';
}
			
			
///減少
if(isset($_POST['d1']))
{
	$pp1=$pp1-1;
	$update = "UPDATE `car` SET `1`='$pp1' WHERE `user`='$a'";
	$result=mysqli_query($conn,$update);
	echo '<script> window.location="buy.php"; </script>';
}
else if(isset($_POST['d2']))
{
	$pp2=$pp2-1;
	$update = "UPDATE `car` SET `2`='$pp2' WHERE `user`='$a'";
	$result=mysqli_query($conn,$update);
	echo '<script> window.location="buy.php"; </script>';
}
else if(isset($_POST['d3']))
{
	$pp3=$pp3-1;
	$update = "UPDATE `car` SET `3`='$pp3' WHERE `user`='$a'";
	$result=mysqli_query($conn,$update);
	echo '<script> window.location="buy.php"; </script>';
}
else if(isset($_POST['d4']))
{
	$pp4=$pp4-1;
	$update = "UPDATE `car` SET `4`='$pp4' WHERE `user`='$a'";
	$result=mysqli_query($conn,$update);
	echo '<script> window.location="buy.php"; </script>';
}
else if(isset($_POST['d5']))
{
	$pp5=$pp5-1;
	$update = "UPDATE `car` SET `5`='$pp5' WHERE `user`='$a'";
	$result=mysqli_query($conn,$update);
	echo '<script> window.location="buy.php"; </script>';
}
else if(isset($_POST['d6']))
{
	$pp6=$pp6-1;
	$update = "UPDATE `car` SET `6`='$pp6' WHERE `user`='$a'";
	$result=mysqli_query($conn,$update);
	echo '<script> window.location="buy.php"; </script>';
}
else if(isset($_POST['d7']))
{
	$pp7=$pp7-1;
	$update = "UPDATE `car` SET `7`='$pp7' WHERE `user`='$a'";
	$result=mysqli_query($conn,$update);
	echo '<script> window.location="buy.php"; </script>';
}
else if(isset($_POST['d8']))
{
	$pp8=$pp8-1;
	$update = "UPDATE `car` SET `8`='$pp8' WHERE `user`='$a'";
	$result=mysqli_query($conn,$update);
	echo '<script> window.location="buy.php"; </script>';
}
else if(isset($_POST['d9']))
{
	$pp9=$pp9-1;
	$update = "UPDATE `car` SET `9`='$pp9' WHERE `user`='$a'";
	$result=mysqli_query($conn,$update);
	echo '<script> window.location="buy.php"; </script>';
}






//onclick="location.href='checkout.php'"
?>

</p>
<form method="POST" action="buy.php">
<input type="submit" value="結帳" name="checkout">
<input type="button" value="返回" onclick="location.href='sin.php'"></td>

</form>



</table>

<?php
//建立訂單
if(isset($_POST['checkout']))
{	
	$update = "UPDATE `oder` SET `1`='$pp1',`2`='$pp2',`3`='$pp3',`4`='$pp4',`5`='$pp5',`6`='$pp6',`7`='$pp7',`8`='$pp8',`9`='$pp9',`status`='1',`money`='$totala' WHERE `user`='$a'";
	$result = mysqli_query($conn,$update);
	//重設購物車	
	$delete = "DELETE FROM `car` WHERE `user`='$a'";
	$result=mysqli_query($conn,$delete);
	$insert = "INSERT INTO `car`(`user`) VALUES('$a')";
    $result = mysqli_query($conn, $insert);
	echo '<script> window.location="checkout.php"; </script>';
}
?>


<div style="background-color:#FFFFAB;">
<table bgcolor=#FFFFAB border="0">
<tr><td>關於我們</td>
<tr><td>電話06-2455694<br>電子信箱：pinhow@gmail.com<br>每周一公休<br>週二至週日 13:00-20:00</td></tr>

</div>
</center>
