<!DOCTYPE html>
<html>

<head>
	<title></title>
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="screen, projection" />
	<link href="css/tablet.css" rel="stylesheet" type="text/css" media="all and (min-width: 481px) and (max-width: 1030px)" />
	<link href="css/mobile.css" rel="stylesheet" type="text/css" media="all and (min-width: 0px) and (max-width: 480px)" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />
	<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>

	<link rel="stylesheet" href="css/jquery.fancybox-buttons.css" type="text/css" media="screen" />
	<script type="text/javascript" src="js/jquery.fancybox-buttons.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox-media.js"></script>

	<link rel="stylesheet" href="css/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
	<script type="text/javascript" src="js/jquery.fancybox-thumbs.js"></script>

	<script type="text/javascript">
						$(function() {
			var button = $('#loginButton');
			var box = $('#loginBox');
			var form = $('#loginForm');
			button.removeAttr('href');
			button.mouseup(function(login) {
				box.toggle();
				button.addClass('active');
			});
			form.mouseup(function() { 
				return false;
			});
			$(this).mouseup(function(login) {
				if(!($(login.target).parent('#loginButton').length > 0)) {
					button.removeClass('active');
					box.hide();
				}
			});
		});
	</script>
	<script type="text/javascript">
						$(function() {
			var button = $('#loginButton2');
			var box = $('#loginBox2');
			var form = $('#loginForm2');
			button.removeAttr('href');
			button.mouseup(function(login) {
				box.toggle();
				button.addClass('active');
			});
			form.mouseup(function() { 
				return false;
			});
			$(this).mouseup(function(login) {
				if(!($(login.target).parent('#loginButton2').length > 0)) {
					button.removeClass('active');
					box.hide();
				}
			});
		});
	</script>
		<script type="text/javascript">
						$(function() {
			var button = $('#loginButton3');
			var box = $('#loginBox3');
			var form = $('#loginForm3');
			button.removeAttr('href');
			button.mouseup(function(login) {
				box.toggle();
				button.addClass('active');
			});
			form.mouseup(function() { 
				return false;
			});
			$(this).mouseup(function(login) {
				if(!($(login.target).parent('#loginButton3').length > 0)) {
					button.removeClass('active');
					box.hide();
				}
			});
		});
	</script>
		<script type="text/javascript">
						$(function() {
			var button = $('#loginButton4');
			var box = $('#loginBox4');
			var form = $('#loginForm4');
			button.removeAttr('href');
			button.mouseup(function(login) {
				box.toggle();
				button.addClass('active');
			});
			form.mouseup(function() { 
				return false;
			});
			$(this).mouseup(function(login) {
				if(!($(login.target).parent('#loginButton4').length > 0)) {
					button.removeClass('active');
					box.hide();
				}
			});
		});
	</script>
	
</head>

<body>
	<div class="macro"> <!-- Wrapper -->
	
	<header class="crown"> <!-- Header -->
	
		<div id="identity"><img src="images/logo.png"/></div>
		<nav id="h_nav">
			<dl id="paths">
			<dt><span id="mini">my</span>City</dt>
			<dt><span id="mini">my</span>Travels</dt>
			<dt><span id="mini">the</span>World</dt>
			<dt>Discover</dt>
			</dl>
		</nav>
		<div id="help"><img src="images/y.png" /></div>
		<div id="notifications"><img src="images/x.png" /></div>
		<div id="nav_right">
			<div class="sb-search" id="sb-search" ><!-- Search Bar -->
			<form>
				<input  class="sb-search-input" id="search" value="" type="search" placeholder="Search" name="search" />
				<input class="sb-search-submit" type="submit" value="" />
				<span class="sb-icon-search"></span>
			</form>
			</div>
		</div>
		
	</header> <!-- End Header -->
	
	<div class="macrosub1"> <!-- Grid -->
	
		<div class="sub_a">
			<div id="left">
				<section id="profile">
					<div id="profile_image"><a href=""><img src="images/profile.png"></a></div>
					<span id="name"><p>Konstantinos</p><p>Tsilkos</p></span>
				</section>
				<nav id="v_nav">
					<dl id="panels">
					<a href="index.php"><dt id="panel_1">
						<div id="news">
							<div id="icon"></div>
							<span id="icon_title">news</span>
						</div>
					</dt></a>
					<a href="photos.php"><dt id="panel_2">
						<div id="photos">
							<div id="icon"></div>
							<span id="icon_title">photos</span>
						</div>
					</dt></a>
					<a href=""><dt id="panel_3">
						<div id="friends">
							<div id="icon"></div>
							<span id="icon_title">friends</span>
						</div>
					</dt></a>
					<a href=""><dt id="panel_4" style="width: 65px; top: -1px; position: relative;">
						<div id="coolplaces" style="text-align: center;">
							<div id="icon"></div>
							<span id="icon_title2">coolplaces</span>
						</div>
					</dt></a>
					<a href=""><dt id="panel_5" style="width: 65px; top: -1px; position: relative;">
						<div id="hangouts" style="text-align: center;">
							<div id="icon"></div>
							<span id="icon_title2">hangouts</span>
						</div>
					</dt></a>
					<a href=""><dt id="panel_6">
						<div id="wishes">
							<div id="icon"></div>
							<span id="icon_title">wishes</span>
						</div>
					</dt></a>
					<a href=""><dt id="panel_7">
						<div id="events">
							<div id="icon"></div>
							<span id="icon_title">events</span>
						</div>
					</dt></a>
					<a href=""><dt id="panel_8">
						<div id="reputation">
							<div id="icon"></div>
							<span id="icon_title">reputation</span>
						</div>
					</dt></a>
					</dl>
				</nav>
			</div>			
		</div>