<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="/Diamond.png" />

<head>
	<title>Shami Shad Cricket Live - Area of Manik Hosen</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="StyleSheet.css" rel="stylesheet" type="text/css">
	<script src="scores.js"></script>
	<style>
		* {
			box-sizing: border-box;
		}

		header {
			background-color: #009999;
			padding: 15px;
			text-align: center;
			font-size: 35px;
		}
		
		article {
			float: left;
			padding: 20px;
			width: 100%;
			background-color: #d9e6f2;
			height: 600px;
		}

		footer {
			background-color: #009999;
			padding: 1px;
			text-align: center;
			color: white;
		}
	</style>
</head>

<body onload="changeScore()">
	<header style="background-image:url('bg.jpg');">
		<a href="https://rahathossenmanik.github.io/" style="text-decoration:none; color:#003333;">
			<strong>Shami Shad Cricket Live</strong>
		</a>
	</header>
	<div class="topnav">
		<a href="">Home</a>
		<a href="teams">Teams</a>
		<a href="contact">Contact</a>
		<a href="about">About</a>
	</div>
	<section>
		<article>
			<h2>Match Scoreboard</h2>
			<hr/>
			<p>Run: </p><input id="run" value="0"></input>
			<p>Over: </p><input id="over" value="0.0"></input>
			<p>Wicket: </p><input id="wicket" value="0"></input>
			<p>Bat: </p><input id="bat" value="None"></input>
			<p>Opposite: </p><input id="opposite" value="None"></input>
			<p>Ball: </p><input id="ball" value="None"></input>
		</article>
	</section>

	<footer>
		<hr />
		<p>&copy Manik Hosen Github 2017-2019</p>
	</footer>

</body>

</html>