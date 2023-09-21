<?php
echo <<<_END
<html>
<head>
<title>FUCK</title>
</head>
</body>
<form method="POST" action="12.php">
請輸入階層: 
<input type="text" name="a" >
<input type ="submit" value="確定"></br>
</from>
</body>
</html>
_END;
$c=1;
$a=$_POST['a'];
for($i=1;$i<=$a;$i++)

{
	$c=$c*$i;
}
echo "結果:".$c;
?>