<?php
echo<<<_END
<form method="POST" action="1128.php">
請輸入要排列的數字，並以空格隔開：<input type="textbox" name="a">
<input type="submit" value="確認"> 
_END;
$a1=$_POST["a"];
$a2= explode(" ",$a1);
echo "</br>"."未排序：";
foreach($a2 as $h)
	echo "$h"." ";
$count=count($a2);    
for($i=0;$i<$count;$i++)
{
    for($k=$count-1;$k>$i;$k--)
    {
        if($a2[$k]<$a2[$k-1])
        {
            $tmp=$a2[$k];//交換
            $a2[$k]=$a2[$k-1];
            $a2[$k-1]=$tmp;
        }
    }
}
echo "</br>"."排序後：";
foreach($a2 as $j)
	echo "$j"." ";
?>