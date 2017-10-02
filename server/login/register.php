<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Our jyBBS Register</title>
</head>

<body>
<?php   
$UName=$_POST['UName'];  
$UPassword=$_POST['UPassword'];    
$UPhonenumber=$_POST['UPhonenumber'];  
$link = mysqli_connect('localhost','root','5216','jybbs');  
$query_cheak = mysqli_query($link,"select UName from bbsuser");
$row = mysqli_fetch_array($query_cheak);  
if($_POST['register']){  
	if($query_cheak && !check())
		echo "<script>alert('用户名已被注册!');</script>";  
    else if(mysqli_query($link,"insert into bbsuser (UName,UPassword,UPhonenumber) values('$UName','$UPassword','$UPhonenumber')")){  
        setcookie("uname",$UName,time()+7200);  
       echo "<script>alert('注册成功！');window.location= 'login.php';</script>";  
    }else {  
        echo "<script>alert('Sorry,注册失败！');history.go(-1)</script>";  
    }  
}  
include('register.html');
?> 
</body>
</html>