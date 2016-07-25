<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/dataTables.jqueryui.min.css">
	<link rel="stylesheet" href="/css/font-awesome-4.3.0/css/font-awesome.min.css">
	<title>PirateBox - Share Freely!</title>
	<link rel="stylesheet" href="/css/jquery-ui.min.css">
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
				<li><a href="/Shared/">Files</a></li>
				<li><a href="#about">About</a></li>
			</ul>
		</nav>
	</div>
</header>
<section id="content">
	<div class="container">
		<div style="position:fixed; top:0px; left:0px; right:0px;" id="welcome">
			<div id="greeting" class="card">
				<h2 id="track-title">Choose a track to begin listening</h2>
				<div id="currently-playing">
					<audio id="audio" controls="controls">
						<source id="mp3Source" type="audio/mp3"></source>
					</audio>
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
		<!-- <div style="position:fixed; top:0px;  right:0px; height:150px;" id="upload" class="card">
				<h2>Upload</h2>
				<iframe width="100%" height="80" src='http://piratebox.lan:8080' style='border:0px'>
					Your browser does not support iframes.. If you want to upload something, follow this <a href='http://piratebox.lan:8080'>Link</a>.
				</iframe>
			</div> -->
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
			<h2>About Pirateify</h2>
			<p>Inspired by and based on Pirate Box, Pirateify is an offline music sharing and listening device to encourage the free sharing and enjoyment of music.</p>
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
<script src="/js/piratebox.js"></script>
<script src="/js/html5juke.js"></script>
</html>