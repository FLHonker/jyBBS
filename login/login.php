<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to jyBBS</title>
</head>
<?php 
require('../login/login.html');
include('../function/connsql.php');
?>
<body>
<?php
@$UName = $_POST['UName'];  
@$UPassword = $_POST['UPassword'];  
$query = mysqli_query($conn,"SELECT UName FROM bbsuser WHERE UName = '$UName' and UPassword = '$UPassword'");	//匹配用户名和密码  
//$row = mysqli_fetch_array($query); 
if(@$_POST['login']){      
    if(mysqli_num_rows($query)){  
        setcookie('uname',$UName,time()+7*24*3600);
		session_start();
		$_SESSION['loginUName'] = $UName;
        echo "<script>alert('Login successfuly!');window.location= '../front_page/index.php';</script>"; 
    }  
    else echo "<script>alert('用户名或密码错误！');history.go(-1)</script>";		//返回之前的页面  
}  
mysql_close($conn);
?>  
</body>
</html>