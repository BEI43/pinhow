<?php
$query = "SELECT * FROM `member` WHERE `user`='".$_POST['user']."' AND `pw`='".$_POST['pw']."'";
$result = mysql_query($query,$conn);

$sql = "select * from member where user = '$username' and pw='$pass'";
	$result = mysqli_query($sql,$conn)
	$rows=mysql_num_rows($result);//返回一個數值
if($rows){//0 false 1 true
header("refresh:0;url=sinok.php");//如果成功跳轉至welcome.html頁面
exit;
}else{
echo "使用者名稱或密碼錯誤";
echo "
<script>
setTimeout(function(){window.location.href='sin.php';},1000);
</script>"
}
//else if($code2!=$code)
//	echo "驗證碼錯誤";
else if($code2!="")
	echo "請輸入帳號或密碼";



///2
$result=mysql_query("select * from member where user ='{$user}' and isdelete =0;");//查出對應使用者名稱的資訊，isdelete表示在資料庫已被刪除的內容 
while ($row=mysql_fetch_array($result)) {//while迴圈將$result中的結果找出來 
$dbusername=$row["user"]; 
$dbpassword=$row["pw"]; 
} 
if (is_null($dbusername)) {//使用者名稱在資料庫中不存在時跳回index.html介面 
?> 
<script type="text/javascript"> 
alert("使用者名稱不存在"); 
window.location.href="sin.php"; 
</script> 
<?php  
} 
else { 
if ($dbpassword!=$password){//當對應密碼不對時跳回index.html介面 
?> 
<script type="text/javascript"> 
alert("密碼錯誤"); 
window.location.href="sin.php"; 
</script> 
<?php  
} 
else { 
$_SESSION["user"]=$user; 
$_SESSION["code"]=mt_rand(0, 100000);//給session附一個隨機值，防止使用者直接通過呼叫介面訪問welcome.php 
?> 
<script type="text/javascript"> 
window.location.href="sinok.php"; 
</script> 
<?php  
} 
} 
mysql_close($con);//關閉資料庫連線，如不關閉，下次連線時會出錯 



///
if($_POST['user']!=null && $_POST['pw']=null)
{
	}
else
	

///圖片
<P Align=center><img src="https://i.ibb.co/SR7yvnR/home1.jpg" width="50%"></P>


///方形logo
<a href="https://imgbb.com/"><img src="https://i.ibb.co/LQfDkfz/logo3.png" alt="logo3" border="0"></a>

///初衷
<a href="https://imgbb.com/"><img src="https://i.ibb.co/hck8M2t/about1.jpg" alt="about1" border="0"></a>

//影片
<iframe width="560" height="315" src="https://www.youtube.com/embed/SyM3jMFjess?start=263" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

///
echo '<script> alert("註冊成功");</script>'
	$query = "select * from `member` where `user`='".$_POST['user']."'";
	$result = mysql_query($conn,$query)
	$rows = $result->num_rows;
	for($j=0;$j<$rows;$j++)
	{
		$result->data_seek($j);
	echo '帳號：'.$result->fetch_assoc()['user'].'<br>';
	$result->data_seek($j);
	}
	
////
$result = mysql_query($sql);//執行sql
$rows=mysql_num_rows($result);//返回一個數值
if($rows){//0 false 1 true
header("refresh:0;url=sinok.php");//如果成功跳轉至welcome.html頁面
exit;
}else{
echo "使用者名稱或密碼錯誤";
echo "
<script>
setTimeout(function(){window.location.href='sin.php';},1000);
</script>
";//如果錯誤使用js 1秒後跳轉到登入頁面重試;
}
}else{//如果使用者名稱或密碼有空
echo "表單填寫不完整";
echo "
<script>
setTimeout(function(){window.location.href='sin.php';},1000);
</script>";
//如果錯誤使用js 1秒後跳轉到登入頁面重試;


///
$rows = $result->num_rows;
	for($j=0;$j<$rows;$j++)
	{
		$result->data_seek($j);
	echo '帳號：'.$result->fetch_assoc()['user'].'<br>';
	$result->data_seek($j);
	}
?>