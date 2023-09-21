<title>品好乳酪-首頁</title>
<P Align=center><img src="https://i.ibb.co/mN6XxxP/logo2.png" width="30%"></P>

<html>
<center>

<div style="background-color:#FFFFAB;" >
<table bgcolor=#FFFFAB border="0" height="50">
<form method="POST" action="pagehome.php">
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

///確認登入者
///login
	$update= "UPDATE `member` SET `login`='1' WHERE `user`='".$_POST['user']."' and `pw`='".$_POST['pw']."'";
	//echo $update."搜尋+修改成功 沒抓到<br>";
	$result = mysqli_query($conn,$update);
	// echo $result."???<br>";
	// if($result) echo  "成功<>br";
	// else echo"失敗<br>";


?>



<a href="product.php" _fcksavedurl="https://i.ibb.co/6BFx9mQ/product6.jpg" target="_blank" > <script Language="JavaScript1.1">
var slidespeed=1800 // 圖片播放速度
var slideimages=new Array("https://i.ibb.co/42crZCJ/main-slider-item-3-lg.jpg","https://i.ibb.co/SR7yvnR/home1.jpg","https://i.ibb.co/8BHjgN1/main-slider-item-2-lg.jpg")
var imageholder=new Array()
var ie55=window.createPopup
for (i=0;i<slideimages .length;i++){ imageholder[i]=new Image()
imageholder[i].src=slideimages[i] } function gotoshow(){
window.location=slidelinks[whichlink] }
</script><img _fcksavedurl="" name="slide" style="filter: progid:DXImageTransform.Microsoft.Pixelate(MaxSquare=15,Duration=1);" align="middle" border="0" /><script language="JavaScript1.1">
var whichlink=0
var whichimage=0
var pixeldelay=(ie55)? document.images.slide.filters[0].duration*1000 : 0
function slideit(){ if (!document.images) return
if (ie55) document.images.slide.filters[0].apply()
document.images.slide.src=imageholder[whichimage].src
if (ie55) document.images.slide.filters[0].play()
whichlink=whichimage
whichimage=(whichimage<slideimages .length-1)? whichimage+1 : 0
setTimeout("slideit()",slidespeed+pixeldelay) }
slideit() </script></a>

<P Align=center><img src="https://i.ibb.co/TwNWrgb/banner-item-1.jpg" width="70%"></P>

<P Align=center><img src="https://i.ibb.co/rdx2fzs/banner-item-2.jpg" width="70%"></P>



<div style="background-color:#FFFFAB;">
<table bgcolor=#FFFFAB border="0">
<tr><td>關於我們</td>
<tr><td>電話06-2455694<br>電子信箱：pinhow@gmail.com<br>每周一公休<br>週二至週日 13:00-20:00</td></tr>

</div>

</center>
</html>

