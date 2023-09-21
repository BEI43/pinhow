<form method="POST" action="insertto.php">
會員編號：<input type="text" name="id"><br>
姓名：<input type="text" name="name"><br>
帳號：<input type="text" name="ur"><br>
密碼：<input type="text" name="pw"><br>
<input type="button" value="新增" name="insert">
<input type="button" value="修改" name="update" onclick="location.href='insertto.php'">
<input type="button" value="刪除" name="delete" onclick="location.href='insertto.php'"><br><br>
<?php
$hn='127.0.0.1';
$db='使用者';
$ur='root';
$pw='ncutm514';

$conn = new mysqli($hn,$ur,$pw,$db);
if($conn->connect_error) die ("無法連上資料庫(".$conn->connect_errno .")".$conn->connect_error);
	else
		echo"連線成功";
echo"<br>";

if(isset($_POST['insert']))
{
	if($_POST['id'] != null)
	{
	$insert = "insert into `user`(`會員編號`,`姓名`,`帳號`,`密碼`) VALUES ('".$_POST['id']."','".$_POST['name']."','".$_POST['ur']."','".$_POST['pw']."')";
	$result = mysqli_query($conn, $insert);
	} 
}

if(isset($_POST['delete']))
{
	if($_POST['id'] != null)
	{
	$delete = "delete from `user` where `會員編號` = '".$_POST['id']."'";
	$result = mysqli_query($conn, $delete);
	} 
}

if(isset($_POST['update']))
{
	if($_POST['id'] != null)
	{
	$update = "update `user` SET `姓名` = '".$_POST['name']."',`帳號`= '".$_POST['ur']."',`密碼`= '".$_POST['pw']."'";
	$result = mysqli_query($conn, $update);
	} 
}
    
$query="SELECT * FROM `user`";
$result = mysqli_query($conn, $query);                                                            
$rows = $result->num_rows;
for($j=0; $j < $rows ; $j++)
{
	$result->data_seek($j);
	echo"m_id：" .$result->fetch_assoc()['會員編號']."<br>";
	$result->data_seek($j);
	echo"m_name：" .$result->fetch_assoc()['姓名']."<br>";
	$result->data_seek($j);
	echo"m_user：" .$result->fetch_assoc()['帳號']."<br>";
	$result->data_seek($j);
	echo"m_pwd：" .$result->fetch_assoc()['密碼']."<br>";
	echo "<hr>";
} 
mysql_close();
?>
