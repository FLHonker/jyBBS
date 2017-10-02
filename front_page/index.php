<?php   
include('../function/hpBirthday.php');
include('../function/connsql.php');
include('../function/search.php');
//生日提醒弹图片
function isHappy(){
	@session_start();
	@$UName = $_SESSION['loginUName'];
	$sql = "select UBirthday from bbsuser where 	UName='$UName'";
	@$query = mysqli_query($conn,$sql);
	@$row = mysqli_fetch_object($query);
	@$UBirthday = $row->UBirthday;
	return hpBirthday($UBirthday);
}
$isHappy = isHappy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>酱油BBS——IT卓越工程师的论坛</title>
    <link rel="stylesheet" href="../jQuery_BootStrap/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="front_css.css">
    <script src="../jQuery_BootStrap/jquery-1.11.1.min.js"></script>
    <script src="../jQuery_BootStrap/jquery-2.1.4.min.js"></script>
    <script src="front_js.js"></script>
    <script src="../jQuery_BootStrap/bootstrap.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
        var bodyBgs = [];    //创建一个数组变量来存储背景图片的路径
        bodyBgs[0] = "../images/hpBirthday/1.jpg";
        bodyBgs[1] = "../images/hpBirthday/2.jpg";
        bodyBgs[2] = "../images/hpBirthday/3.jpg";
        bodyBgs[3] = "../images/hpBirthday/4.jpg";
        bodyBgs[4] = "../images/hpBirthday/5.jpg";
        bodyBgs[5] = "../images/hpBirthday/6.jpg";
        bodyBgs[6] = "../images/hpBirthday/7.jpg";
        bodyBgs[7] = "../images/hpBirthday/8.jpg";
        bodyBgs[8] = "../images/hpBirthday/9.jpg";
        bodyBgs[9] = "../images/hpBirthday/10.jpg";
        var randomBgIndex = Math.round( Math.random() * 10 );		//产生随机数
        $("#example2-2").attr("href", bodyBgs[randomBgIndex] );
			$("#example2-2").imgbox({
				'speedIn'		: 0,
				'speedOut'		: 0,
				'alignment'		: 'center',
				'overlayShow'	: true,
				'allowMultiple'	: false
			});
		});
       
	</script>

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation"style="position:fixed">
    <div class="container-fluid">
        <img src="../images/logo.png" class="img-responsive" alt="Responsive image" style="height: 55px;display: inline-block;">
        <p style="display: inline-block;font-size: 32px;font-family:STXingkai;margin-bottom: 0;margin-top: 5px;margin-left: 5px">酱油BBS</p>
        <ul class="nav nav-tabs">
            <li><a href="../front_page/index.php">论坛主页</a></li>
            <li><a href="../message/">消息通知</a></li>
            <li><a href="../user_info/myInfo.php">个人信息</a></li>
        </ul>
    </div>
</nav>
<div class="content">
<div id="carousel-example-generic" class="carousel slide" style="margin-top: 20px;margin-left: 0px;margin-right:0px;display: inline-block;"data-ride="carouel"data-interval="3000">
    <div class="carouseltitle">
       公告栏
    </div>
    <ol class="carousel-indicators">
       <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
       <li data-target="#carousel-example-generic" data-slide-to="1" class></li>
       <li data-target="#carousel-example-generic" data-slide-to="2" class></li>
    </ol>
    <!-- 设置轮播图片 -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="./CarouselFigure/p1.jpg" alt="">
            <div class="carousel-caption">
                <h3>大数据时代</h3>
            </div>
        </div>
        <div class="item">
            <img src="./CarouselFigure/p2.jpg" alt="">
            <div class="carousel-caption">
                 <h3>Linux运维</h3>
            </div>
        </div>
        <div class="item">
            <img src="./CarouselFigure/p3.jpg" alt="">
            <div class="carousel-caption">

                 <h3>互联网+</h3>
            </div>
        </div>
    </div>
    <!-- 设置轮播图片控制器 -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control"id="right" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
    <div class="classify" style="display:inline-block;position: relative">
        <div class="searchbar">
            <input id="search" type="text" placeholder="  搜索关键字"style="width: 250px;height: 35px;display: inline-block;margin-left:180px">
            <botton id="searchbtn">
               搜    索
            </botton>
        </div>
        <div class="list-title">
            论坛分类
        </div>
        <div class="bbslist">
            <div class="mainframe">
                前端
                <ul class="bbs">
                    <li>
                        <a>html1</a>
                    </li>
                    <li>
                        <a>html2</a>
                    </li>
                    <li>
                        <a>html3</a>
                    </li>
                    <li>
                        <a>html4</a>
                    </li>
                </ul>
            </div>
            <br>
            <div class="mainframe">
                后台
                <ul class="bbs">
                    <li>
                        <a>html1</a>
                    </li>
                    <li>
                        <a>html2</a>
                    </li>
                    <li>
                        <a>html3</a>
                    </li>
                    <li>
                        <a>html4</a>
                    </li>
                </ul>
            </div>
            <br>
            <div class="mainframe">
                    APP
                <ul class="bbs">
                    <li>
                        <a>html1</a>
                    </li>
                    <li>
                        <a>html2</a>
                    </li>
                    <li>
                        <a>html3</a>
                    </li>
                    <li>
                        <a>html4</a>
                    </li>
                </ul>
            </div>
            <br>
            <div class="mainframe">
                学习
                <ul class="bbs">
                    <li>
                        <a>html1</a>
                    </li>
                    <li>
                        <a>html2</a>
                    </li>
                    <li>
                        <a>html3</a>
                    </li>
                    <li>
                        <a>html4</a>
                    </li>
                    <li>
                        <a>html5</a>
                    </li>
                    <li>
                        <a>html6</a>
                    </li>
                </ul>
            </div>
            <br>
        </div>
    </div>
    <div class="new-text">
        <div class="articletitle" href="#">
            最新文章
        </div>
        <div class="article">
            <p class="article-title">简单的javascript应用</p>
            <div class="main">
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发大师傅奥德赛覅带哦的说法都是附近，撒旦覅哦阿福阿是对啊规划，啊圣诞节覅说的话佛欸说法都是附近，撒旦覅哦阿福阿是对啊规划，啊圣说法都是附近，撒旦覅哦阿福阿是对啊规划，啊圣
                    <br>
                    sdiafusdoifaidfdsioeyr8ewyruqiew
                    <br>
                </p>
            </div>
            <div class="more">
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/0.png"></i>
                    <span  style="display: inline-block;">Ashes</span>
                </li>
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/2.png"></i>
                    <span  style="display: inline-block;">2016-11-10</span>
                </li>
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/1.png"></i>
                    <span  style="display: inline-block;">99</span>
                </li>
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/3.png"></i>
                    <span  style="display: inline-block;">99</span>
                </li>
            </div>
        </div>
        <div class="article">
            <p class="article-title">简单的javascript应用</p>
            <div class="main">
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发大师傅奥德赛覅带哦的说法都是附近，撒旦覅哦阿福阿是对啊规划，啊圣诞节覅说的话佛欸说法都是附近，撒旦覅哦阿福阿是对啊规划，啊圣说法都是附近，撒旦覅哦阿福阿是对啊规划，啊圣
                    <br>
                    sdiafusdoifaidfdsioeyr8ewyruqiew
                    <br>
                </p>
            </div>
            <div class="more">
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/0.png"></i>
                    <span  style="display: inline-block;">Ashes</span>
                </li>
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/2.png"></i>
                    <span  style="display: inline-block;">2016-11-10</span>
                </li>
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/1.png"></i>
                    <span  style="display: inline-block;">99</span>
                </li>
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/3.png"></i>
                    <span  style="display: inline-block;">99</span>
                </li>
            </div>
        </div>
        <div class="article">
            <p class="article-title">简单的javascript应用</p>
            <div class="main">
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发大师傅奥德赛覅带哦的说法都是附近，撒旦覅哦阿福阿是对啊规划，啊圣诞节覅说的话佛欸说法都是附近，撒旦覅哦阿福阿是对啊规划，啊圣说法都是附近，撒旦覅哦阿福阿是对啊规划，啊圣
                    <br>
                    sdiafusdoifaidfdsioeyr8ewyruqiew
                    <br>
                </p>
            </div>
            <div class="more">
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/0.png"></i>
                    <span  style="display: inline-block;">Ashes</span>
                </li>
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/2.png"></i>
                    <span  style="display: inline-block;">2016-11-10</span>
                </li>
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/1.png"></i>
                    <span  style="display: inline-block;">99</span>
                </li>
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/3.png"></i>
                    <span  style="display: inline-block;">99</span>
                </li>
            </div>
        </div>
        <div class="article">
            <p class="article-title">简单的javascript应用</p>
            <div class="main">
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发大师傅奥德赛覅带哦的说法都是附近，撒旦覅哦阿福阿是对啊规划，啊圣诞节覅说的话佛欸说法都是附近，撒旦覅哦阿福阿是对啊规划，啊圣说法都是附近，撒旦覅哦阿福阿是对啊规划，啊圣
                    <br>
                    sdiafusdoifaidfdsioeyr8ewyruqiew
                    <br>
                </p>
            </div>
            <div class="more">
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/0.png"></i>
                    <span  style="display: inline-block;">Ashes</span>
                </li>
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/2.png"></i>
                    <span  style="display: inline-block;">2016-11-10</span>
                </li>
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/1.png"></i>
                    <span  style="display: inline-block;">99</span>
                </li>
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/3.png"></i>
                    <span  style="display: inline-block;">99</span>
                </li>
            </div>
        </div>
        <div class="article">
            <p class="article-title">简单的javascript应用</p>
            <div class="main">
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发大师傅奥德赛覅带哦的说法都是附近，撒旦覅哦阿福阿是对啊规划，啊圣诞节覅说的话佛欸说法都是附近，撒旦覅哦阿福阿是对啊规划，啊圣说法都是附近，撒旦覅哦阿福阿是对啊规划，啊圣
                    <br>
                    sdiafusdoifaidfdsioeyr8ewyruqiew
                    <br>
                </p>
            </div>
            <div class="more">
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/0.png"></i>
                    <span  style="display: inline-block;">Ashes</span>
                </li>
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/2.png"></i>
                    <span  style="display: inline-block;">2016-11-10</span>
                </li>
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/1.png"></i>
                    <span  style="display: inline-block;">99</span>
                </li>
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/3.png"></i>
                    <span  style="display: inline-block;">99</span>
                </li>
            </div>
        </div>

    </div>

    <div class="hot-text">
        <div class="hot-title">
            热帖推荐
        </div>
        <div class="wrap">
        <div class="hot-content">
            <p class="article-title" style="font-size: 17px;font-weight: 500;">简单的javascript应用</p>
            <div class="main">
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发大师傅奥德赛覅带哦的说法都是附近，撒
                    sdiafusdoifaidfdsioeyr8ewyruqiew
                    <br>
                </p>
            </div>
            <div class="more">
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/0.png"></i>
                    <span  style="display: inline-block;">Ashes</span>
                </li>
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/2.png"></i>
                    <span  style="display: inline-block;">2016-11-10</span>
                </li>
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/1.png"></i>
                    <span  style="display: inline-block;">99</span>
                </li>
                <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/3.png"></i>
                    <span  style="display: inline-block;">99</span>
                </li>
            </div>
        </div>

            <div class="hot-content">
                <p class="article-title" style="font-size: 17px;font-weight: 500;">简单的javascript应用</p>
                <div class="main">
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发大师傅奥德赛覅带哦的说法都是附近，撒
                        sdiafusdoifaidfdsioeyr8ewyruqiew
                        <br>
                    </p>
                </div>
                <div class="more">
                    <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/0.png"></i>
                        <span  style="display: inline-block;">Ashes</span>
                    </li>
                    <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/2.png"></i>
                        <span  style="display: inline-block;">2016-11-10</span>
                    </li>
                    <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/1.png"></i>
                        <span  style="display: inline-block;">99</span>
                    </li>
                    <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/3.png"></i>
                        <span  style="display: inline-block;">99</span>
                    </li>
                </div>
            </div>
            <div class="hot-content">
                <p class="article-title" style="font-size: 17px;font-weight: 500;">简单的javascript应用</p>
                <div class="main">
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发大师傅奥德赛覅带哦的说法都是附近，撒
                        sdiafusdoifaidfdsioeyr8ewyruqiew
                        <br>
                    </p>
                </div>
                <div class="more">
                    <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/0.png"></i>
                        <span  style="display: inline-block;">Ashes</span>
                    </li>
                    <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/2.png"></i>
                        <span  style="display: inline-block;">2016-11-10</span>
                    </li>
                    <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/1.png"></i>
                        <span  style="display: inline-block;">99</span>
                    </li>
                    <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/3.png"></i>
                        <span  style="display: inline-block;">99</span>
                    </li>
                </div>
            </div>
            <div class="hot-content">
                <p class="article-title" style="font-size: 17px;font-weight: 500;">简单的javascript应用</p>
                <div class="main">
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发大师傅奥德赛覅带哦的说法都是附近，撒
                        sdiafusdoifaidfdsioeyr8ewyruqiew
                        <br>
                    </p>
                </div>
                <div class="more">
                    <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/0.png"></i>
                        <span  style="display: inline-block;">Ashes</span>
                    </li>
                    <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/2.png"></i>
                        <span  style="display: inline-block;">2016-11-10</span>
                    </li>
                    <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/1.png"></i>
                        <span  style="display: inline-block;">99</span>
                    </li>
                    <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/3.png"></i>
                        <span  style="display: inline-block;">99</span>
                    </li>
                </div>
            </div>
            <div class="hot-content">
                <p class="article-title" style="font-size: 17px;font-weight: 500;">简单的javascript应用</p>
                <div class="main">
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发大师傅奥德赛覅带哦的说法都是附近，撒
                        sdiafusdoifaidfdsioeyr8ewyruqiew
                        <br>
                    </p>
                </div>
                <div class="more">
                    <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/0.png"></i>
                        <span  style="display: inline-block;">Ashes</span>
                    </li>
                    <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/2.png"></i>
                        <span  style="display: inline-block;">2016-11-10</span>
                    </li>
                    <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/1.png"></i>
                        <span  style="display: inline-block;">99</span>
                    </li>
                    <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/3.png"></i>
                        <span  style="display: inline-block;">99</span>
                    </li>
                </div>
            </div>
            <div class="hot-content">
                <p class="article-title" style="font-size: 17px;font-weight: 500;">简单的javascript应用</p>
                <div class="main">
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发大师傅奥德赛覅带哦的说法都是附近，撒
                        sdiafusdoifaidfdsioeyr8ewyruqiew
                        <br>
                    </p>
                </div>
                <div class="more">
                    <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/0.png"></i>
                        <span  style="display: inline-block;">Ashes</span>
                    </li>
                    <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/2.png"></i>
                        <span  style="display: inline-block;">2016-11-10</span>
                    </li>
                    <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/1.png"></i>
                        <span  style="display: inline-block;">99</span>
                    </li>
                    <li class="info-item"  style="display: inline-block;"><i class="info-icon"  style="display: inline-block;"><img src="../images/3.png"></i>
                        <span  style="display: inline-block;">99</span>
                    </li>
                </div>
				<a id="example2-2" href=""></a>
            </div>
        </div>
        <div class="back-top sticky" id="totop"></div>
    </div>
</div>
</body>
<script src="../jQuery_BootStrap/jquery.min.js"></script>
<script src="jquery.imgbox.pack.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
		if(1)
			$("#example2-2").trigger("click");
	 });
</script>
</html>