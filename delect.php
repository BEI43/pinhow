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




?>