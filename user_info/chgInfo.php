
<?php 	//修改个人信息
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

function chgInfo(){
	@$UName = $_POST['UName'];
	@$UPassword = $_POST['UPassword'];
	@$UPhonenumber = $_POST['UPhonenumber'];
	@$UEmail = $_POST['UEmail'];
	@$UHead = "../images/header_images/".$UName.".jpg";
	@$USex = $_POST['USex'];
	@$UFeature = $_POST['UFeature'];
	@$UBirthday = $_POST['UBirthday'];
	if(@$_POST['submit']){
		$ulp = new upLoadPhoto($UName);
		$ulp->upLoad();
		$sqlupdate = "update bbsuser set 			UPassword='$UPassword',UPhonenumber='$UPhonenumber',USex='$USex',UEmail='$UEmail',UFeature='$UFeature',UBirthday='$UBirthday',UHead='$UHead' where UName='$UName'";
		$query = mysqli_query($conn,$sqlupdate);
		mysqli_close($conn);
		if($query!=false)
			echo "<script>confirm('修改成功！');history.go(-1)</script>";
		else 
			echo "<script>alert('修改失败!');history.go(-1)</script>";
	}
	chgInfo();
}
?>