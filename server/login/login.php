<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to jyBBS</title>
</head>

<body>
<?php   
$UName = $_POST['UName'];  
$UPassword = $_POST['UPassword'];  
$link = mysqli_connect('localhost','root','5216','jybbs');  
$query = mysqli_query($link,"SELECT UName FROM bbsuser WHERE UName = '$UName' and UPassword = '$UPassword'");	//匹配用户名和密码  
#$row = mysqli_fetch_array($query);  
if($_POST['login']){      
    if($query){  
        setcookie('uname',$UName,time()+7200);  
        echo "<script>alert('Login successfuly!');window.location= '../front_page/front_page.php';</script>";  
    }  
    else echo "<script>alert('用户名或密码错误！');history.go(-1)</script>";		//返回之前的页面  
}  
include('../login/login.html');
?>  
</body>
</html>