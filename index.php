<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="/Diamond.png" />

<head>
	<title>Shami Shad Cricket Live - Area of Manik Hosen</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="StyleSheet.css" rel="stylesheet" type="text/css">
	<script src="scores.js"></script>
</head>

<body onload="changeScore()">
	<header style="background-image:url('bg.jpg');">
		<a href="https://rahathossenmanik.github.io/" style="text-decoration:none; color:#003333;">
			<strong>Shami Shad Cricket Live</strong>
		</a>
	</header>
	<div class="topnav">
		<a class="active" href="">Home</a>
		<a href="teams">Teams</a>
		<a href="contact">Contact</a>
		<a href="about">About</a>
	</div>
	<section>
		<nav>
			<h1>Overview</h1>
			<hr />
			<h2><b id="team1">Cent OS</b> vs <b id="team2">Windows</b></h2>
			<hr/>
			<h3>Cent OS: 
				<font>
					<?php
						$myfile = fopen("run.txt", "r") or die("Unable to open file!");
						echo fgets($myfile);
						fclose($myfile);
					?>
				</font>
				/
				<font>
					<?php
						$myfile = fopen("wicket.txt", "r") or die("Unable to open file!");
						echo fgets($myfile);
						fclose($myfile);
					?>
				</font>
				(
				<font>
					<font>
					<?php
						$myfile = fopen("over.txt", "r") or die("Unable to open file!");
						echo fgets($myfile);
						fclose($myfile);
					?>
				</font>
				</font>
				)
			</h3>
			<h3>Windows: 
			<font>
					<?php
						$myfile = fopen("oprun.txt", "r") or die("Unable to open file!");
						echo fgets($myfile);
						fclose($myfile);
					?>
				</font>
				/
				<font>
					<?php
						$myfile = fopen("opwicket.txt", "r") or die("Unable to open file!");
						echo fgets($myfile);
						fclose($myfile);
					?>
				</font>
				(
				<font>
					<font>
					<?php
						$myfile = fopen("opover.txt", "r") or die("Unable to open file!");
						echo fgets($myfile);
						fclose($myfile);
					?>
				</font>
				</font>
				)
				</h3>
			<hr />
		</nav>
		<article>
			<h2>Match Scoreboard</h2>
			<hr/>
			<p>Run: </p>
			<p>Over: </p>
			<p>Wicket: </p>
			<p>Batsmen: </p>
			<p>Bowler: </p>
			<hr />
			<h2>Comment Section</h2>
			<hr/>
		</article>
	</section>

	<footer>
		<hr />
		<p>&copy Manik Hosen Github 2017-2019</p>
	</footer>

</body>

</html>