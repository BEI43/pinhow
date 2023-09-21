<title>柏諺購物-首頁</title>
<html>
<center>



<table  border="1" height="10" width="100%">
<form method="POST" action="pagehome.php">

<tr align="center">
<td ><a href="product.php" ><a href="https://ibb.co/rFNpqZf"><img src="https://i.ibb.co/bQDvYrR/logo.png"width="800 "height="100"></a></td>
<td width="500" height="244"valign="middle"><img src="https://i.ibb.co/K6V36xj/images.png" align='center'width="100" height="100">
<input style="width:200px;height:60px;" type="text" name="search" width="90" height="90"></td>
<td><a href="member.php        "><img src="https://i.ibb.co/n0xZ32c/image.png" alt="image" border="0"></a></td>
<td><a href="cart.php         "><img src="https://i.ibb.co/MsvDBLT/image.png" alt="image" border="0"></a></td>
       
</tr>
</table>
</form>
</center>

<table border="1"width="100%"height="50">
<tr>
<td width=" 50%><a href="product.php" _fcksavedurl="https://i.ibb.co/6BFx9mQ/product6.jpg" target="_blank" > <script Language="JavaScript1.1">
var slidespeed=1800 // 圖片播放速度
var slideimages=new Array("https://i.ibb.co/1r5VMh6/2.jpg","https://i.ibb.co/HrWYL0s/3.jpg","https://i.ibb.co/8BHjgN1/main-slider-item-2-lg.jpg")
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
</td>
<td>瀏</br>覽</br>紀</br>錄
</td>
</tr>
</table>

</table border="1"height="50"width="100%">
<tr height="50"width="100%">
<td>
熱</br>銷</br>商</br>品</br>
</td>
<td>  </td>
</table>





<?php
//連線
$hn='127.0.0.1';
$db='sql';
$ur='root';
$pw='asd867790';
$conn= new mysqli($hn,$ur,$pw,$db);
if($conn->connect_error)
	die("無法連上資料庫(".$conn->connect_error .")".$connect_error);
else
	echo "";
echo "<br>";

?>


</html>
