<?php
class upLoadPhoto {
	private $path = "../images/header_images/";
	private $serverName;
	
	function _construction($UName){
		header("Content-Type:text/html;charset=utf-8");
		$serverName = $path.$UName.".jpg";
	}
	
	function upLoad(){
		if($_FILES['UHead']['error']>0) {
 			die("<script>alert('上传头像失败！');</script>"); 
		}
		if(move_uploaded_file($_FILES['UHead']['tmp_name'],$server_name)){
 			header("refresh:3;url=./myInfo.php");
		}
	}
};

/*
 session_start();
 header("Content-Type:text/html;charset=utf-8");
// 附件的存储位置、附件的名字
$path = "./root/";
 
$username = $_SESSION['username'];
// 拼接成该文件在服务器上的名称
$server_name = $path.$username.".png";
 
 
if($_FILES['photo']['error']>0) {
 die("出错了！".$_FILES['photo']['error']); 
}
if(move_uploaded_file($_FILES['photo']['tmp_name'],$server_name)){
 //echo "<BR>"."Upload Success!";
 echo "恭喜您，上传成功！"."<br />3秒后将自动跳转到个人主页！"; 
 header("refresh:3;url=./personalpage.php");
}else{
 //echo "<BR>"."Upload Failed!".$_FILES['photo']['error']; 
 echo "对不起，上传头像失败了！";
 header("refresh:2;url=./index.php");
}
*/
?>