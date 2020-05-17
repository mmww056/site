<!doctype html5>
<html>
<head>
<meta charset="utf-8">

<meta content="width=device-width, initial-scale=1" name="viewport" />

	<link rel="shortcut icon" type="image/x-icon" href="/site/alibi/assets/img/favicon.ico" />
	<title>Welcome to Rabbitdearr</title>

	<link rel="stylesheet" type="text/css" href="assets/css/theme.css">

	<link rel="stylesheet" type="text/css" href="assets/css/menu.css">

	<link rel="stylesheet" type="text/css" href="assets/css/slider.css">

	<script src="/site/alibi/assets/js/ism-2.2.min.js"></script>
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
	<script type='text/javascript' src='/site/alibi/assets/js/jquery.ba-hashchange.min.js'></script>
	<script type='text/javascript' src='/site/alibi/assets/js/dynamicpage.js'></script>
	<script type='text/javascript' src='/site/alibi/assets/js/music.js'></script>
	<script src="https://www.youtube.com/player_api"></script>

	<style>
		body { background-color: #transparent; color: #000; padding: 0; margin: 0;}
		.container { position:relative;;width: 100%;height:100%; margin: 0px auto 0px; padding-top: 0px; }
		.container .ism-slider { width: 100%;height:100%;margin-left: auto; margin-right: auto; }
	</style>

</head>


<body>
<div class="all">

<header>
	<menu>
		<div id="menuToggle">
			<input type="checkbox" />
			<span></span>
			<span></span>
			<span></span>

		<ul id="menu">
			<a href="index.php"> index </a>
			<a href="about.php"> biography </a>
			<a href="friends.php"> friends </a>
			<a href="love.php"> love </a>
			<a href="support.php"> support </a>
			<a href="extra.php"> link </a>
		</ul>
		</div>
	</menu>

	<div id="name"> username </div>
</header>

<nav>
		<ul>
		<h1>Navigation.</h1>
    		<a href="index.php"> index <span> homepage </span> </a>
        <a href="about.php"> biography <span> about me </span> </a>
				<a href="friends.php"> friends <span> people that matter </span> </a>
        <a href="love.php"> love <span> special someone </span> </a>
        <a href="support.php"> support <span> affiliates </span> </a>
        <a href="extra.php"> link <span> extra content </span> </a>
    </ul>

<h1>Music.</h1>
<div id="music">
	<div class="youtubebox">
		<iframe allow="autoplay" width="250" height="250" src="https://www.youtube.com/embed/xcbhnE_7lrw?enablejsapi=1&amp;fs=0&amp;rel=0&amp;showinfo=0&amp;modestbranding=1&amp;iv_load_policy=3&amp;controls=0&amp;autoplay=0&amp;loop=0" onload="codes_9Id5q=new YT.Player(this,{events:{'onStateChange':function(event){if(event.data==1){toggleButtonPlayer_9Id5q(document.getElementById('playbutton'))}}}})"></iframe>
	</div>

	<button type="button" class="playerbutton" id="playbutton" onclick="codes_9Id5q.playVideo();toggleButtonPlayer_9Id5q(this)">
		<img src="/site/alibi/assets/img/play.png">
	</button>
	<button type="button" class="playerbutton" id="pausebutton" onclick="codes_9Id5q.pauseVideo();toggleButtonPlayer_9Id5q(this)" style="display:none">
		<img src="/site/alibi/assets/img/pause.png">
	</button>
	<div class="preload_box"><img src="/site/alibi/assets/img/play.png"><img src="/site/alibi/assets/img/pause.png"></div>
</div>
</nav>

	<section id="main-content">
	<div id="guts">

	<div id="home">
		<hr>
