<?php
session_start();
if($_POST["user"]==null&&$_POST["pw"]==null)
{
	echo '<script>alert("尚未登入");location.href="1126.php";</script>';
}

if($_POST["user"]==$_COOKIE["user2"]&&$_POST["pw"]==$_COOKIE["pw2"]&&$_SESSION["aaa"]==$_POST["aaa"])
{
	
	echo '<script>alert("登入成功");</script>';
	$b=$_POST["user"];
	echo "登入成功歡迎".$b."<br>";
    echo <<<_END
    <form method="POST" action="1126.php">
    <input type="submit" name="submitout" value="登出">
    </form>
_END;
}
if($_SESSION["aaa"]!=$_POST["aaa"]) 
{
	echo '<script>alert("驗證碼錯誤");location.href="1126.php";</script>';
}
if($_POST["user"]==$_COOKIE["user2"]&&$_POST["pw"]!=$_COOKIE["pw2"]) 
{
	echo '<script>alert("登入失敗密碼錯誤");location.href="1126.php";</script>';
}
if($_POST["user"]!=$_COOKIE["user2"]) 
{
	echo '<script>alert("登入失敗!帳號或密碼錯誤");location.href="1126.php";</script>';
}

	
?>