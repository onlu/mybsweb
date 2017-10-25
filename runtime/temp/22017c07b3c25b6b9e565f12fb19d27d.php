<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"C:\wamp64\www\mybsweb\public/../application/index\view\index\mypage.htm";i:1508933322;s:72:"C:\wamp64\www\mybsweb\public/../application/index\view\common\common.htm";i:1508922080;}*/ ?>
<!doctype html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>用bootstrap制作一个网页</title>
    <link rel="stylesheet" type="text/css" href="__INDEX__/css/bootstrap.css">
    <link rel="shortcut icon" href="__INDEX__/favicon.ico"/>
    <link rel="bookmark" href="__INDEX__/favicon.ico"/>
    <!--引入全局样式-->
    <link rel="stylesheet" type="text/css" href="__INDEX__/css/index.css">
    <!--登录按钮引入css文件-->
    <link rel="stylesheet" type="text/css" href="__INDEX__/css/style.css">

    <script type="text/javascript" src="__INDEX__/js/jquery.min.js"></script>
    <script type="text/javascript" src="__INDEX__/js/bootstrap.js"></script>
    <!--引入全局js-->
    <script type="text/javascript" src="__INDEX__/js/index.js"></script>
    <!--附加css-->
    <!--登录按钮引入js文件-->

    <script type="text/javascript" src="__INDEX__/js/jquery.easing.min.js"></script>
    <!--登录按钮引入js文件-->
    <style type="text/css">
        .tool a{
            margin-left: 30px;
        }

        .tooltip-inner{
            background-color:#2aabd2;
        }
    </style>
    <!--登录按钮css样式-->
    <style type="text/css">
        .vad { margin: 120px 0 5px; font-family: Consolas,arial,宋体,sans-serif; text-align:center;}
        .vad a { display: inline-block; height: 36px; line-height: 36px; margin: 0 5px; padding: 0 50px; font-size: 14px; text-align:center; color:#eee; text-decoration: none; background-color: #222;}
        .vad a:hover { color: #fff; background-color: #000;}
        .thead { width: 728px; height: 90px; margin: 0 auto; border-bottom: 40px solid #fff;}
    </style>
    <!--登录按钮css样式-->
    <!--附加css-->
    <!--附加js-->

    <script type="text/javascript">
        $(document).ready(function () {
            //获取元素
            var as = document.getElementById("top").getElementsByTagName("a");
            var lis = document.getElementById("bottom").getElementsByTagName("li");

            for(var i=0;i<as.length;i++){
                //设置索引
                as[i].index =i;
                //进行清空
                as[i].onmouseover = function(){

                    for(var j =0;j<as.length;j++){
                        as[j].className = "";
                        lis[j].className = "";
                    }
                    this.className = "damao";
                    lis[this.index].className ="show";
                }

            }
            //滑动块显示链接
            var html = "<ul>\n" +
                "\t\t\t\t\t\t<li><a href='https://www.west.cn/' target=\"_blank\"><span>1</span>西部数码</a></li>\n" +
                "\t\t\t\t\t\t<li><a href='https://www.aliyun.com/' target=\"_blank\"><span>2</span>阿里云</a></li>\n" +
                "\t\t\t\t\t</ul>";
            $('.top a').mouseenter(function () {
                $('.bottom').innerHTML=html;
            });
        });
    </script>
    <!--登录按钮js-->
    <script type="text/javascript">
        $(document).ready(function(){
            var k=!0;

            $(".openlogin").click(function(){
                k&&"0px"!=$("#loginalert").css("top")&& ($("#loginalert").show(),$(".loginmask").fadeIn(500),$("#loginalert").animate({top:120},400,"easeOutQuart"))
            });
            $(".loginmask,.closealert").click(function(){
                k&&(k=!1,$("#loginalert").animate({top:-500},400,"easeOutQuart",function(){$("#loginalert").hide();k=!0}),$(".loginmask").fadeOut(500))
            });
            $(".loginmask").css("opacity",0.8);

            if($.browser.version <= 6){
                $('#reg_setp,.loginmask').height($(document).height());
            }


        });
    </script>
    <!--登录按钮js-->
    <!--附加js-->

</head>
<body>
<!--登录组件-->
<div class="loginmask" style="opacity: 0.8; display: none;"></div>

<div id="loginalert" style="display: none; top: -600px;">

	<div class="pd20 loginpd">
		<h3><i class="closealert fr"></i><div class="clear"></div></h3>
		<div class="loginwrap">
			<div class="loginh">
				<div class="fl">会员登录</div>
			</div>
			<!--<h3><span class="login_warning">用户名或密码错误</span><div class="clear"></div></h3>-->
			<form action="" method="post" id="login_form">
				<div class="logininput">
					<input type="text" name="username" class="loginusername"  placeholder="邮箱/用户名">
					<input type="password" class="loginuserpasswordt"  placeholder="密码">
					<input type="password" name="password" class="loginuserpasswordp" style="display:none">
				</div>
				<div class="loginbtn">
					<div class="loginsubmit fl"><input type="submit" value="登录" class="btnn"></div>
					<!--<div class="fl" style="margin:26px 0 0 0;"><input id="bcdl" type="checkbox" checked="true">保持登录</div>-->

					<div class="clear"></div>
				</div>
			</form>
		</div>
	</div>
</div>
<!--登录组件-->
<!--整个导航栏-->
<nav class="navbar navbar-inverse hd">
	<div class="container-fluid">
		<!-- 导航栏和下拉按钮 -->
		<div class="navbar-header">
			<a style="font-family: 'Microsoft YaHei UI';color: #2aabd2" class="navbar-brand btn btn-default" href="#" data-toggle="tooltip" data-placement="top" title="Tooltip on bottom">孙湛丰的工具箱</a>
		</div>
		<!-- 导航栏和下拉按钮-->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<!--首页-->
				<li class="active"><a href="#">首页</a></li>
				<!--首页-->
				<!-- 下拉按钮《课程列表》 -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list"></span> 课程列表<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="http://www.sobaidupan.com/index.asp" target="_blank">搜白度盘</a></li>
						<li><a href="http://www.588ku.com/" target="_blank">千库网</a></li>
						<li><a href="https://wenku.baidu.com/" target="_blank">百度文库</a></li>

						<li><a href="http://www.hao123.com" target="_blank">hao123导航</a></li>

						<li><a href="http://www.58pic.com/" target="_blank">千图网</a></li>
						<li><a href="http://www.jsdaima.com/" target="_blank">JS代码网</a></li>
						<li><a href="http://699pic.com/" target="_blank">摄图网</a></li>
						<li><a href="http://www.zcool.com.cn/" target="_blank">站酷网</a></li>
						<li><a href="http://www.bootcss.com/" target="_blank">Bootstrap中文网</a></li>
						<li><a href="https://yuedu.baidu.com/" target="_blank">百度阅读</a></li>
						<li><a href="http://d.huamivip.com" target="_blank">蓝鲸素材</a></li>
						<li><a href="./php_book.chm" target="_blank">PHP手册</a></li>
						<li><a href="http://www.css88.com/doc/zeptojs_api/" target="_blank">zepto.js</a></li>
						<li><a href="http://www.runoob.com" target="_blank">菜鸟教程</a></li>
						<li><a href="http://www.jq22.com/" target="_blank">JQuery插件网</a></li>
						<li><a href="http://www.xwcms.net/" target="_blank">素材网</a></li>
						<li><a href="http://d.huamivip.com" target="_blank">包图网（终生会员)</a></li>
					</ul>
				</li>
				<!-- 下拉按钮《课程列表》 -->
			</ul>
			<ul class="nav navbar-nav">
				<!--下拉按钮《开发文档》-->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-book"></span> 开发文档<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="http://v3.bootcss.com/css/" target="_blank">Bootstrap开发文档</a></li>
							<li><a href="https://www.kancloud.cn/manual/thinkphp5/118003" target="_blank">TP5开发手册</a></li>
						</ul>
					</li>
				<!--下拉按钮《开发文档》-->
			</ul>
			<ul class="nav navbar-nav">
				<!--按钮+下拉列表（最近下载）-->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-download-alt"></span> 最新下载<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="https://github-production-release-asset-2e65be.s3.amazonaws.com/2126244/9c5b6db6-5245-11e6-800b-b1e5008b1179?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAIWNJYAX4CSVEH53A%2F20171015%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20171015T045424Z&X-Amz-Expires=300&X-Amz-Signature=323952bd2cd2d25d20cc3e20cc86f7973f986b22f51ec1d833398863c503e7a6&X-Amz-SignedHeaders=host&actor_id=0&response-content-disposition=attachment%3B%20filename%3Dbootstrap-3.3.7-dist.zip&response-content-type=application%2Foctet-stream" target="_blank">bootstrap3-生产环境</a></li>
						<li><a href="http://down.thinkphp.cn/download.php?key=MTUwODA0MzU3Mo+xf56Yl8jWw3hrysCosKuvonSttKyTqLW2Zt2zeNnZgaGsnIS40Mq6hX/cs9yCrK+ieGi1dphnx7t3zrF1rJOZf6Gol5em0MR3apOyzHqqr4x5m8plz2HHqW/Rynq0z5qlhqib0dDYqpqpy7+6e6zEf5+fv4u1ociVa8ixZJvNnH+LY4K8spHEnojKyLWDmQ" target="_blank">Tp5.0开发完整版</a></li>
					</ul>
				</li>
				<!--按钮+下拉列表（最近下载）-->
			</ul>
			<ul class="login fr">
				<?php if($session['username'] != ''): ?>
				<li style="margin-right:20px;color: #fff;">欢迎你,<a style="color: deeppink"><?php echo $session['username']; ?></a>>!</li>
				<?php endif; ?>
				<li class="openlogin"><a href="javascript:void(0);">登录</a></li>
				<?php if($session['username'] != ''): ?>
				<li class="openlogin"><a href="<?php echo url('index/logout'); ?>">注销</a></li>
				<?php endif; ?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
<!--整个导航栏-->
<!-- 下面板块 -->
<div class="container">
	<div class="left col-sm-8 col-xs-12" style="width: 830px;border:4px solid #ccc;border-radius: 20px;margin-top: 20px;">
		<!--百度搜索-->
		<div class="baidu">
			<form onsubmit="return baiduWithHttps(this)" action="http://www.baidu.com/baidu" target="_blank">
				<input name="tn" type="hidden" value="SE_zzsearchcode_shhzc78w">
				<a href="https://www.baidu.com/" target="_blank" class="">
					<i></i>
				</a>
				<input type="text" onfocus="checkHttps" name="word" class="word" size="30">
				<input type="submit" value="百度一下" class="btn">
			</form>

		</div>

		<!--百度搜索-->
		<!--左侧表格上-->
		<table class="table table-hover table-bordered">
			<tr class="info">
				<th>服务器</th>
				<th>技术论坛</th>
				<th>拓展论坛</th>
				<th>购物</th>
				<th>技术类</th>
			</tr>
			<tr>
				<td><a href='https://www.west.cn/' target="_blank">西部数码</a></td>
				<td><a href='https://www.http://blog.csdn.net' target="_blank">CSDN</a></td>
				<td><a href='http://www.tianya.cn/' target="_blank">天涯社区</a></td>
				<td><a href="http://www.taobao.com">淘宝网</a></td>
				<td><a href="http://www.psjia.com">PS家园</a></td>


			</tr>
			<tr>
				<td><a href='https://www.aliyun.com/' target="_blank">阿里云</a></td>
				<td><a href='https://www.oschina.net' target="_blank">开源中国</a></td>
				<td><a href='http://www.jianshu.com/' target="_blank">简书</a></td>
				<td><a href="http://www.jd.com">京东</a></td>
			</tr>
			<tr>
				<td></td>
				<td><a href='https://www.github.com target="_blank"'>github</a></td>
				<td><a href='https://www.zhihu.com/' target="_blank">知乎</a></td>
				<td><a href="http://www.xianyuwang.com">咸鱼网</a></td>
			</tr>
			<tr>
				<td></td>
				<td><a href='https://www.cnblogs.com/' target="_blank">博客园</a></td>
				<td><a href='http://www.ximalaya.com/explore/' target="_blank">喜马拉雅</a></td>
			    <td><a href="http://www.vip.com">唯品会</a></td>

			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><a href='http://www.cyzone.cn/' target="_blank">创业邦</a></td>
			</tr>

		</table>
		<!--左侧表格上-->

		<!--左侧表格下-->
		<table class="table table-hover table-bordered">
			<tr class="info">
				<th>素材类</th>
				<th>优秀博客</th>
				<th>拓展论坛</th>
				<th>购物</th>
				<th>技术类</th>
			</tr>
			<tr>
				<td><a href='http://www.17sucai.com' target="_blank">17素材网</a></td>
				<td><a href='http://webjyh.com/' target="_blank">M.J</a></td>
				<td><a href='http://www.tianya.cn/' target="_blank">天涯社区</a></td>
				<td><a href="http://www.taobao.com">淘宝网</a></td>
				<td><a href="http://www.psjia.com">PS家园</a></td>


			</tr>
			<tr>
				<td><a href='http://www.xwcms.net/' target="_blank">素材网</a></td>
				<td><a href='https://azfashao.com' target="_blank">爱在发烧</a></td>
				<td><a href='http://www.jianshu.com/' target="_blank">简书</a></td>
				<td><a href="http://www.jd.com">京东</a></td>
			</tr>
			<tr>
				<td><a href='http://hao.shejidaren.com/index.html' target="_blank"'>设计导航</a></td>
				<td><a href="https://codepen.io/">CODEPEN</a></td>
				<td><a href='https://www.zhihu.com/' target="_blank">知乎</a></td>
				<td><a href="http://www.xianyuwang.com">咸鱼网</a></td>
			</tr>
			<tr>
				<td></td>
				<td><a href='http://www.wangmingjie.net/' target="_blank">王明杰</a></td>
				<td><a href='http://www.ximalaya.com/explore/' target="_blank">喜马拉雅</a></td>
			    <td><a href="http://www.vip.com">唯品会</a></td>

			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><a href='http://www.cyzone.cn/' target="_blank">创业邦</a></td>
			</tr>

		</table>
		<!--左侧表格下-->
		</div>
		<!-- 右侧 -->
		<div class="right" style="margin-right: 10px;" >
			<div class="list-group col-sm-4 hidden-xs hh" style="width: 430px;margin-left: 40px;">
				<h1 href="#" class="list-group-item">
					学习网站
				</h1>
				<a href="http://www.qinxue.com" class="list-group-item active">勤学网</a>
				<a href="http://www.w3school.com.cn/" class="list-group-item">W3Cschool</a>
				<a href="https://ke.qq.com/" class="list-group-item">腾讯课堂</a>
				<a href="https://chuanke.baidu.com/" class="list-group-item">百度传课</a>
				<a href="#" class="list-group-item">Linux</a>
				
			</div>
		</div>

		
		<!-- 右侧 -->

	</div>
<div class="middle">
<!--再下面板块--tool-->
	<div class="tool" style="float: left;border: 4px solid #ccc;border-radius:20px;width: 832px;height: 360px;margin-left: 13px;margin-top:20px;">
		<h3 style="margin-left: 300px;color: darkorchid;font-weight:500;font-size: 30px;font-family: 'Microsoft YaHei UI'">工具类</h3><hr style="border: 2px solid #ccc"/>
		<div class="design" style="">
			<span  style="margin-left: 20px;color: deeppink;font-family: 'Microsoft YaHei UI';font-size: 15px;font-weight: bold;"><span class="glyphicon glyphicon-pencil"></span> 设计工具类</span>
			<a class="btn btn-default" href="http://www.processon.com" target="_blank" role="button">ProcessOn</a>
			<a class="btn btn-default" href="#" role="button">Link</a>
			<a class="btn btn-default" href="#" role="button">Link</a>
		</div>
		<hr style="border: 2px solid #ccc" />
		<div class="design" style="">
			<span  style="margin-left: 20px;color: deeppink;font-family: 'Microsoft YaHei UI';font-size: 15px;font-weight: bold;"><span class="glyphicon glyphicon-edit"></span> 其他类</span>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a class="btn btn-default" href="http://www.processon.com" target="_blank" role="button">ProcessOn</a>
			<a class="btn btn-default" href="#" role="button">Link</a>
			<a class="btn btn-default" href="#" role="button">Link</a>
		</div>
		<hr style="border: 2px solid #ccc" />
		<div class="design" style="">
			<span  style="margin-left: 20px;color: deeppink;font-family: 'Microsoft YaHei UI';font-size: 15px;font-weight: bold;"><span class="glyphicon glyphicon-edit"></span> 插件类</span>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a class="btn btn-default" href="http://www.ichartjs.com" target="_blank" role="button">ichartjs</a>
			<a class="btn btn-default" href="#" role="button">Link</a>
			<a class="btn btn-default" href="#" role="button">Link</a>
		</div>



	</div>
	<!--再下面板块tool-->

	</div>
	<div class="plan-list" style="position:relative;width: 419px;height: 400px;border: 4px solid #ccc;border-radius: 15px;float: left;margin-left:37px;margin-top: 20px;">
		<div class="list-tit">
			<h3 style="font-weight: bold;color:#ff3464;font-family: 'Microsoft YaHei UI';text-align: center;">每日清单</h3>
			<hr style="border: 2px solid #ccc"/>
		</div>
		<div class="every-list" style="">
			<button type="button" class="btn btn-success btn-default " data-toggle="tooltip" data-placement="right" title="点击添加按钮增加每日任务" style="position: absolute;left:15px;top:72px">添加</button>
			<hr style="border: 2px solid #ccc;margin-top: 40px"/>
			<script>
                $(function () {
                    $('[data-toggle="tooltip"]').tooltip()
                })
			</script>
			<div class="list-detail" style="margin-top: 40px;">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
			</div>
		</div>
		<div class="progress" style="">
			<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
				<span class="sr-only">60% Complete (warning)</span>
			</div>
		</div>
	</div>
</div>

<!-- 底部 -->

<!-- 底部 -->
</body>
<script src="http://s1.bdstatic.com/r/www/cache/global/js/BaiduHttps_20150714_zhanzhang.js"></script>
			<script>
                function checkHttps () {
                    BaiduHttps.useHttps();
                };
                function baiduWithHttps (formname) {
                    var data = BaiduHttps.useHttps();
                    if (data.s === 0) {
                        return true;
                    }
                    else {
                        formname.action = 'https://www.baidu.com/baidu' + '?ssl_s=1&ssl_c' + data.ssl_code;
                        return true;
                    }
                };

                $(".baidu .word").focus(function(){
                    $(".baidu form a").addClass("on");
                    $(this).addClass("on");
                    $(".baidu form .btn").addClass("on")
                }).blur(function(){
                    $(".baidu form a").removeClass("on");
                    $(this).removeClass("on");
                    $(".baidu form .btn").removeClass("on")
                })




			</script>
 </html>
