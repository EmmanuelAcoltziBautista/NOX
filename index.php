<?php
require_once "./database/database.php";



$c1 = mysqli_connect(server, user, password, database, port);
$q1 = "SELECT * FROM `License`;";
$r1 = mysqli_query($c1, $q1);
$licencia="";		
if ($re1 = mysqli_fetch_assoc($r1)) {
	$licencia= $re1["License"];
}
?>
<html>

<head>
	<title>Nox</title>
	<link rel="stylesheet" href="./styles/styles.css">
	<link rel="icon" href="./images/ico.png">
	<link rel="stylesheet" href="./styles/window.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./styles/alert.css">
	<script src="./js/window.js"></script>
	<script src="./js/alert.js"></script>
	<style type="text/css">
		.U::placeholder {
			background-image: url("images/user.png");
			background-size: 20%;
			background-repeat: no-repeat;
			background-position: left center;
		}

		.P::placeholder {
			background-image: url("images/contra.png");
			background-size: 20%;
			background-repeat: no-repeat;
			background-position: left center;
		}
		
	</style>
</head>

<body>
	<center>
		<h1>Nox</h1>
		<img src="images/ico.png" class="icon">
		<form method="post" action="./validation.php">
			<label for="ID">Number phone</label>
			<br />
			<br />
			<input type="number" id="ID" name="ID" class="U" placeholder="     Write here" required>
			<br />
			<br />
			<label for="password">Password</label>
			<br />
			<br />
			<input type="password" name="password" class="P" id="password" placeholder="     Write here" required>
			<br /><br/>
			<input type="submit" value="Log In" id="Entry" name="Entry" class="btn">
			<br/><br/>
		</form>
		<br/>
		<a href="./NewCount/index.php" class="btn">Create new account</a>
		<br />
		<br />

		<footer>
			<a onclick="openWindow()">License</a>

			All rights reserved ©
			<a href="https://github.com//EmmanuelAcoltziBautista" target="_blank"><img src="./images/git.png" class="git"></a>

		</footer>



		<div id="Window" class="Window">
			<div class="content">
				<span class="closed" onclick="closeWindow()">&times;</span>
				<h2>License</h2>
				<p>
					<?php

			echo $licencia;
					?>
				</p>
			</div>
		</div>



</body>
</html>