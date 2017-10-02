<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>酱油BBS——个人信息</title>
    <link rel="stylesheet" href="../jQuery_BootStrap/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="myInfo.css">
    <script src="../jQuery_BootStrap/jquery-1.11.1.min.js"></script>
    <script src="../jQuery_BootStrap/jquery-2.1.4.min.js"></script>
    <script src="../jQuery_BootStrap/bootstrap.min.js"></script>
    
</head>
<body>
<?php
	
?>
<div class="wrapper">
    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation"style="position:fixed">
            <div class="container-fluid">
                <img src="../images/logo.png" class="img-responsive" alt="Responsive image" style="height: 55px;display: inline-block;">
                <p style="display: inline-block;font-size: 32px;font-family:STXingkai;margin-bottom: 0;margin-top: 5px;margin-left: 5px">酱油BBS</p>
                <ul class="nav nav-tabs">
                    <li><a href="../front_page/front_page.php">论坛主页</a></li>
                    <li><a href="../message/">消息通知</a></li>
                    <li><a href="myInfo.php">个人信息</a></li>
                </ul>
            </div>
        </nav>
 <?php
	include('../function/connsql.php');
    include('./chgInfo.php');
	@$UName = $_SESSION['loginUName'];  //获取用户名
	$sqlfind = "select * from bbsuser where UName='$UName'";
	$query = mysqli_query($conn,$sqlfind);
	$userInfo = mysqli_fetch_array($query);
	//取出用户各条信息
	$USex = $userInfo['USex'];
	$UIsSectioner = $userInfo['UIsSectiner'];
	$UFCount = $userInfo['UFCount'];
	$UHeadPath = $userInfo['UHead'];
	$UPassword = $userInfo['UPassword'];
	$UPhonenubmer = $userInfo['UPhonenumber'];
	$UEmail = $userInfo['UEmail'];
	$UBirthday = $userInfo['UBirthday'];
	$UFeature = $userInfo['UFeature'];
?>
        <div class="content">
         <form name='myInfo' action='./myInfo.php' method='post' enctype='multipart/form-data' >
            <div class="username">
                用户名：
                <input type="text" name="UName" value="Frank" style="margin-left: 18px"readonly>
            </div>
			<div class="sex">
                性别：
				<input type="radio" name="USex" value="1" style="margin-left: 36px;position:relative;top:10px;" disabled>&nbsp;&nbsp;男
				<input type="radio" name="USex" value="0" style="margin-left: 20px;position:relative;top:10px;" disabled> &nbsp;&nbsp;女
            </div>
            <div class="header">
                个人头衔：&nbsp;<span class="data"  name="UIsSeationer"><?php if($UIsSectioner==1) echo "版主"; else echo "普通会员"; ?></span>
            </div>
            <div class="count" >
                发帖数：<span class="data" name="UFCount"><?php echo "$UFCount"; ?></span>
            </div>
            <div class="icon" >
                <span style="display: inline-block"> 用户头像：</span>
                <input type="file" id="UHead" name="UHead" accept="image/jpeg,image/jpg,image/png,image/gif,image/bmp" style="display: inline-block;" disabled>
            </div>

            <div class="password" >
                密码：
                <input type="password" value="<?php echo "$UPassword"; ?> name="$UPassword"  style="margin-left: 36px" readonly>
            </div>
            <div class="tel" >
                手机号：

                <input type="text" value="<?php echo "$UPhonenumber"; ?>" name="UPhonenumber" style="margin-left: 18px" readonly>
            </div>
            <div class="mail" >
                邮箱：
                <input type="text" value="<?php echo "$UEmail"; ?>" name="UEmail" style="margin-left: 36px" readonly>
            </div>
            <div class="birth" >
                生日：
                <input type="date" name="UBirthday" value="<?php echo "$UBirthday"; ?>"  style="margin-left: 36px" readonly>
            </div>
            <div class="motto" >
                个性签名：
                <input type="text" name="UFeature" value="<?php echo "$UFeature"; ?>"  readonly="readonly">
            </div>
            <button type="submit" value='submit' name='submit'>
                提交
            </button>
            <button type="button" style="margin-left: 200px" value="edit" id="edit">
                编辑
            </button>
            <div class="view" >
                <img id="graph" name="UHeadView" src="../images/header_images/github7.jpg" >
<script>
 	function uploadphoto(){
  		document.getElementById("graph").src = "../header_images/<?php echo "$UName";?>.jpg"
 	}
 	window.onload = function(){
 		uploadphoto(); 
	}
</script>
            </div>
            </form>
        </div>
    </div>
    
    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

<script type="text/javascript">
    $("#edit").on("click", function () {
        $(".icon input").removeAttr("disabled");
		$(".sex input").removeAttr("disabled");
        $(".password input").removeAttr("readonly");
        $(".tel input").removeAttr("readonly");
        $(".mail input").removeAttr("readonly");
        $(".birth input").removeAttr("readonly");
        $(".motto input").removeAttr("readonly");
        $(".summary input").removeAttr("readonly");
        $(".summary textarea").removeAttr("readonly");
    })
    $(function() {
        $("#UHead").change(function() {
            var $file = $(this);
            var fileObj = $file[0];
            var windowURL = window.URL || window.webkitURL;
            var dataURL;
            var $img = $("#graph");

            if(fileObj && fileObj.files && fileObj.files[0]){
                dataURL = windowURL.createObjectURL(fileObj.files[0]);
                $img.attr('src',dataURL);
            }else{
                dataURL = $file.val();
                var imgObj = document.getElementById("graph");
                imgObj.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
                imgObj.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = dataURL;
            }
        });
    });
</script>

</body>
</html>
