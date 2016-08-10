<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/dataTables.jqueryui.min.css">
	<link rel="stylesheet" href="/css/font-awesome-4.3.0/css/font-awesome.min.css">
	<title>PirateBox - Share Freely!</title>
	<link rel="stylesheet" href="/css/jquery-ui.min.css">
	<link type="text/css" href="/css/skin/blue.monday/jplayer.blue.monday.css" rel="stylesheet" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width">
</head>
<body id="main-index">

	<header id="header">
		<div class="container">
			<div id="logo">
				<h1>
					<a href="/">
						<img src="/img/piratebox-logo-horizontal-white.png" alt="PirateBox" title="PirateBox - Share Freely">
					</a>
				</h1>
			</div>
			<div id="menu-icon"><img src="/img/menu.png" alt="Menu"></div>
			<nav id="top-nav">
				<ul>
					<li><a href="/" class="current">Home</a></li>
					<li><a href="#upload">Upload</a></li>
					<li><a href="#about">About</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section id="content">
		<div class="container">



<!-- <h2 id="track-title">Choose a track to begin listening</h2>
<div id="currently-playing">
<audio id="audio" controls="controls">
<source id="mp3Source" type="audio/mp3"></source>
</audio>
</div> -->

<div  id="welcome">
	<div id="greeting" class="card">
		<div id="jquery_jplayer_1" class="jp-jplayer"></div>
		<div style="width:100%; border:none;" id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
			<div class="jp-details">
				<div class="jp-title" aria-label="title">&nbsp;</div>
			</div>
			<div class="jp-type-single">
				<div class="jp-gui jp-interface">
					<div class="jp-volume-controls">
						<button class="jp-mute" role="button" tabindex="0">mute</button>
						<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
						<div class="jp-volume-bar">
							<div class="jp-volume-bar-value"></div>
						</div>
					</div>
					<div class="jp-controls-holder">
						<div class="jp-controls">
							<button class="jp-play" role="button" tabindex="0">play</button>
							<button class="jp-stop" role="button" tabindex="0">stop</button>
						</div>
						<div class="jp-progress">
							<div  class="jp-seek-bar">
								<div class="jp-play-bar"></div>
							</div>
						</div>
						<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
						<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
						<div class="jp-toggles">
							<button class="jp-repeat" role="button" tabindex="0">repeat</button>
						</div>
					</div>
				</div>

				<div class="jp-no-solution">
					<span>Update Required</span>
					To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
				</div>
			</div>
		</div>
		<table id="playlist" class="stripe hover row-border">
			<thead>
				<tr><th>Artist</th><th>Song</th><th>Album</th><td></td></tr>
			</thead>
			<tbody>
				<?php include 'files.php';?>
			</tbody>
		</table>
	</div>
</div>
<div id="upload" class="card">
<h2>Upload</h2>
<iframe width="100%" height="80" src='http://piratebox.lan:8080' style='border:0px'>
Your browser does not support iframes.. If you want to upload something, follow this <a href='http://piratebox.lan:8080'>Link</a>.
</iframe>
</div>
<!-- <div id="sidebar">

<div id="diskusagecard" class="card">
<h2>Disk Usage</h2>
<div id="diskusage"></div>
<div id="refresh-diskusage">
<form method="POST" name="diskusage" id="du_form" >
<input class="button" type="submit" name="refresh" value="Refresh" id="du_form_button" title="Disk usage can only be refreshed every 5 minutes">
</form>
</div>
</div>

</div>
-->
<!-- 		<div id="main">
<div id="chat" class="card">
<h2>Chat</h2>
<div id="shoutbox" class="shoutbox_content"></div>
<form method="POST" name="psowrte" id="sb_form" >
<div id="shoutbox-input">
<input class="nickname" type="text" 	name="name" 	value="Anonymous" placeholder="Nickname">
<input class="message" 	type="text" 	name="data" 	placeholder="Message...">
<input class="button" 	type="submit" 	name="submit" 	value="Send"  id="send-button">
</div>
<div id="shoutbox-options">
<h3>Text Color:</h3>
<label for="def" 	class="bg-black">	<input name="color" type="radio" value="def" 	id="def" checked>Default</label>
<label for="blue" 	class="bg-blue">	<input name="color" type="radio" value="blue" 	id="blue"		>Blue</label>
<label for="green" 	class="bg-green">	<input name="color" type="radio" value="green" 	id="green"		>Green</label>
<label for="orange" class="bg-orange">	<input name="color" type="radio" value="orange" id="orange"		>Orange</label>
<label for="red" 	class="bg-red">		<input name="color" type="radio" value="red" 	id="red"		>Red</label>
</div>
</form>
</div>
</div>
</div>
</section> -->
<footer id="about">
	<div class="container">
		<div id="details">
			<p class="to-top"><a href="#header">Back to top</a></p>
			<h2>About PirateBox Player</h2>
			<p>Inspired by and based on Pirate Box, Pirateify is an offline music sharing and listening device designed to encourage the free sharing and enjoyment of music.</p>
			<h2>About PirateBox</h2>
			<p>PirateBox is a self-contained mobile collaboration and file sharing device. PirateBox utilizes Free, Libre and Open Source software (FLOSS) to create mobile wireless file sharing networks where users can anonymously share images, video, audio, documents, and other digital content.</p>
			<small>PirateBox is licensed under GPLv3.</small>
		</div>
	</div>
</footer>
</body>
<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<script src="/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/js/jquery.jplayer.js"></script>
<script src="/js/html5juke.js"></script>
</html>