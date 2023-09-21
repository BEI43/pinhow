<h3>登入</h3>
<?php 
session_start();
if($_POST["pw2"]!=$_POST["npw2"])
{
	echo '<script>alert("輸入錯誤");location.href="11262.php";</script>';
}
setcookie("user2",$_POST["user2"],time()+259000);
setcookie("pw2",$_POST["pw2"],time()+259000);
if(isset($_POST["submitout"]))
{
	echo '<script>alert("清除成功");</script>';
	setcookie("user2","",time()-259000);
    setcookie("pw2","",time()-259000);
}
$a=rand(1000,9999);
$_SESSION["aaa"]=$a;
echo <<<_END
<form method="POST" action=11263.php>
帳號:<input type="text" name="user"><br>
密碼:<input type="text" name="pw" ><br>
驗證碼:$a
<input type="text" name="aaa" ><br>
<input type="submit"  value="登入">
<input type="button" onclick="location.href='11262.php'" value="註冊">
</form>
_END;

?>

