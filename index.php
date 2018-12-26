<?php
$data=$_POST;
var_dump($data);
//二维数组转化为字符串，中间用,隔开
function arr_to_str($data) {
	foreach ($data as $v) 
	{   if(is_array($v)){
	
        	$v = join(",",$v); // 可以用implode将一维数组转换为用逗号连接的字符串，join是别名
            	$temp[] = $v;
	}else{
	}			
            	$temp[] = $v;
        }
            foreach ($temp as $v) 
	    {
            	$t.=$v.",";
            }
	$t = substr($t, 0, -1); // 利用字符串截取函数消除最后一个逗号
	    echo ($t);
	    var_dump($t); 
	$fp = fopen("./data.txt",'a+');
	fwrite($fp,$t."\r\n"); 
	fclose($fp);
	return 1;

}

arr_to_str($data);
?>
