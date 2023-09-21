<?php
//連線
$hn='127.0.0.1';
$db='member';
$ur='root';
$pw='3A832090';

$conn= new mysqli($hn,$ur,$pw,$db);
if($conn->connect_error)
	die("無法連上資料庫(".$conn->connect_error .")".$connect_error);
else
	echo "";
echo "<br>";

//確認登入帳號login=1者
	$sql = "SELECT * FROM `member` WHERE `login`='1'";
	//echo $sql."搜尋+修改成功<br>";
	$result = mysqli_query($conn,$sql);
	//1為登入0為沒登入
	$rows= mysqli_num_rows($result);
	//echo $rows."重點<br>";
	//確認
	// echo $result."??<br>";
	// if($result) echo  "成功<br>";
	// else echo"失敗<br>";
	
	if($rows==1)
	{
		//顯示會員會員累積金額
			$query="SELECT * from `member` WHERE `login`='1'";
			$result=mysqli_query($conn,$query);
			$rows= $result->num_rows;
			for($j=0;$j<$rows;$j++)
			{
				$money = $result->data_seek($j);
				echo '累積消費金額：'.$result->fetch_assoc()['money'].'<br>';			
			}
		if($money>=10000)
		{echo '白金會員';}
	    if($money>5000 and $money<=9999)
		{echo '黃金會員';}
	    if($money<=4999)
		{echo '一般會員';}
	}
?>