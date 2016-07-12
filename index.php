<?
$a =@ $_COOKIE['login'];
$b =@ $_COOKIE['shida'];
$c =@ $_COOKIE['shelian'];
$d =@ $_COOKIE['xiao'];
if (!empty($a)) {
	header('location:./xingcard2.php');
} elseif (!empty($b)) {
	header('location:./xingcard2.1.php');
} elseif (!empty($c)) {
	header('location:./xingcard2.2.php');
} elseif (!empty($d)) {
	header('location:./xingcard2.3.php');
}
?>
	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<title>
			星名片
		</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-touch-fullscreen" content="yes">
		<link rel="apple-touch-icon-precomposed" href="image/xingcard.png">
		<link rel="apple-touch-icon" href="image/xingcard.png">
		<link rel="stylesheet" href="css/index.css">
	</head>
	

	<body>
		<div class="container">
			<div class="bg"></div>
			<div class="mask"></div>
			<section>
				<div class="image">
					<img src="image/xingCardLogo.png">
				</div>
				<div class="titleCon">
					<div class="line leftLine"></div>
					<div class="line rightLine"></div>
					<span>星名片v2.0</span>
				</div>
				<div class="formCon">
					<form>
						<div>
							<div class="title">社团/组织ID</div>
							<input type="text" id="login" placeholder="输入你的社团/组织ID">
							<div class="textLine"></div>
						</div>
						<div>
							<!--<input type="submit" value="登陆" id="submit" style="background-color:#1E90FF;width:71%;color:#fff">-->
								<img src="image/loginBtn.png" id="submit"/>
						</div>
					</form>
				</div>
			</section>
		</div>
	</body>
	<script type="text/javascript">
		var login = document.getElementById('login');
		var submit = document.getElementById('submit');
		var date = new Date();
		var expireDays = 30;
		
		if (getCookieValue() != "") {
			window.location.href = "./Xingcard.php";
		} 
		 
		//将date设置为10天以后的时间
		date.setTime(date.getTime() + expireDays * 24 * 3600 * 1000);
		 //将userId和userName两个cookie设置为10天后过期
		submit.onclick = function() {
			var pw = "www.xingkong.us=" + login.value + "; expires=" + date.toGMTString();
			document.cookie = pw;
			window.location.href = "./Xingcard.php";
			return false;
		}

		function getCookieValue() {
			var strCookie = document.cookie;
			var arrCookie = strCookie.split("; ");
			for (var i = 0; i < arrCookie.length; i++) {
				var arr = arrCookie[i].split("=");
				if ("www.xingkong.us" == arr[0]) {
					return arr[1];
				}
			}
			return "";
		}
	</script>

	</html>