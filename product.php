<title>品好乳酪-重乳酪蛋糕</title>
<P Align=center><img src="https://i.ibb.co/mN6XxxP/logo2.png" width="30%"></P>
<?php
session_start();
?>
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

<form method="POST" action="buy.php">
<table border="0"  >
<tr align="center"><td bgcolor="#FFFFD4"><img src="https://i.ibb.co/1bSTqrW/origin.jpg" width="50%" ><br>經典原味乳酪<br>NT$720
<br>
<select name="pd1">
<option selected value="0">0
<option value="1">1
<option value="2">2
<option value="3">3
<option value="4">4
<option value="5">5
</select><br></td>
<td bgcolor="#FFFFD4"><img src="https://i.ibb.co/rp7XJrj/product2.jpg" width="50%"><br>花生生巧乳酪蛋糕<br>NT$780
<br><select name="pd2">
<option selected value="0">0
<option value="1">1
<option value="2">2
<option value="3">3
<option value="4">4
<option value="5">5
</select><br></td>
<td bgcolor="#FFFFD4"><img src="https://i.ibb.co/0ymcYQr/product3.jpg" width="50%"><br>仲夏莓果<br>NT$780
<br><select name="pd3">
<option selected value="0">0
<option value="1">1
<option value="2">2
<option value="3">3
<option value="4">4
<option value="5">5
</select><br></td></tr>
<tr align="center"><td bgcolor="#FFFFD4"><img src="https://i.ibb.co/rH0vKgP/product4.jpg" width="50%"><br>可可亞生巧乳酪<br>NT$800
<br><select name="pd4">
<option selected value="0">0
<option value="1">1
<option value="2">2
<option value="3">3
<option value="4">4
<option value="5">5
</select><br></td>
<td bgcolor="#FFFFD4"><img src="https://i.ibb.co/PwXdkmk/product5.jpg" width="50%"><br>抹茶生巧乳酪<br>NT$800
<br><select name="pd5">
<option selected value="0">0
<option value="1">1
<option value="2">2
<option value="3">3
<option value="4">4
<option value="5">5
</select><br></td>
<td bgcolor="#FFFFD4"><img src="https://i.ibb.co/6BFx9mQ/product6.jpg" width="50%"><br>抹茶草莓生巧乳酪<br>NT$880
<br><select name="pd6">
<option selected value="0">0
<option value="1">1
<option value="2">2
<option value="3">3
<option value="4">4
<option value="5">5
</select><br></td></tr>
<tr align="center"><td bgcolor="#FFFFD4"><img src="https://i.ibb.co/kDpsqmw/product7.jpg" width="50%"><br>摩卡生巧乳酪<br>NT$800
<br><select name="pd7">
<option selected value="0">0
<option value="1">1
<option value="2">2
<option value="3">3
<option value="4">4
<option value="5">5
</select><br></td>
<td bgcolor="#FFFFD4"><img src="https://i.ibb.co/LRh2xWR/product8.jpg" width="50%"><br>黑芝麻鐵觀音雙層生巧乳酪<br>NT$760
<br><select name="pd8">
<option selected value="0">0
<option value="1">1
<option value="2">2
<option value="3">3
<option value="4">4
<option value="5">5
</select><br></td>
<td bgcolor="#FFFFD4"> <img src="https://i.ibb.co/LZd0Yfh/product9.jpg" width="50%"><br>太妃糖生巧乳酪<br>NT$780
<br><select name="pd9">
<option selected value="0">0
<option value="1">1
<option value="2">2
<option value="3">3
<option value="4">4
<option value="5">5
</select><br></td></tr>
<tr ><td></td><td><br><center>
<input type="submit"  value="加入購物車" name="ok"></center><br></td><td></td></tr>
</table>
</form>

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


?>


<div style="background-color:#FFFFAB;">
<table bgcolor=#FFFFAB border="0">
<tr><td>關於我們</td>
<tr><td>電話06-2455694<br>電子信箱：pinhow@gmail.com<br>每周一公休<br>週二至週日 13:00-20:00</td></tr>

</div>
</center>
</html>

