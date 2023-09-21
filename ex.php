<form id="myform" method="" action="" enctype="multipart/form-data">
請上傳圖片:<input type="file" id="profile_pic" name="profile_pic" accept=".jpg, .jpeg, .png"><br>
<input type="submit"  name="in">
</form>
<?php
//新增圖片
if(isset($_POST['in']))
{
	
	$update = "UPDATE `oder` SET `1`='$pp1',`2`='$pp2',`3`='$pp3',`4`='$pp4',`5`='$pp5',`6`='$pp6',`7`='$pp7',`8`='$pp8',`9`='$pp9',`status`='1',`money`='$totala' WHERE `user`='$a'";
	$result = mysqli_query($conn,$update);
}
?>