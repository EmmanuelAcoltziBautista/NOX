<?php
session_start();
$user = $_SESSION["user"];
$password = $_SESSION["password"];
if ($user == null and $password == null) {


	echo "<script>document.location.href='../close/index.php';</script>";
}

require_once "../database/database.php";
$connection1 = mysqli_connect(server, user, password, database, port);
$q1 = "SELECT * FROM `USERS` WHERE PHONE='$user';";
$r1 = mysqli_query($connection1, $q1);
$name = "";
if ($re = mysqli_fetch_assoc($r1)) {
	$name = $re["NAME"];
}
?>


<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nox</title>
	<link rel="stylesheet" href="../styles/styles.css">
	<link rel="stylesheet" href="../styles/window.css">
	<script src="../js/window.js"></script>
	<link rel="icon" href="../images/ico.png">
	<style type="text/css">
		@media(max-width:767px){
			.img {
			width: 50px;
			height: 65px;
		}

		.img:hover {
			width: 15px;
			height: 30px;
		}
		.a1{
			padding-top:60px ;
			padding-bottom:20px;
			border:1px solid #fff;
			display:inline-block;
			margin:20px;
		}
	}
		@media(min-width:991px){
			.img {
			width: 20%;
			height: 35%;
		}

		.img:hover {
			width: 15%;
			height: 30%;
		}
	}
	</style>
</head>

<body>
	<a href="../close/index.php" class="btn">Sing of</a>
	<center>

		<h1 class="A">Welcome <?php echo $name; ?></h1>
		<br/>
		<br />
		<a href="Receive.php" class="a1"><img src="../images/Re.png" class="img">Received messages</a>
		
		<a href="Send.php" class="a1"><img src="../images/Recibidos.png" class="img">Send Message</a>

<br>
<br>

<br>

<br>






		<footer>
        <a onclick="openWindow()">License</a>
      
       All rights reserved ©
        <a href="https://github.com//EmmanuelAcoltziBautista" target="_blank"><img src="../images/git.png" class="git"></a>
        
    </footer>



    <div id="Window" class="Window">
        <div class="content">
          <span class="closed" onclick="closeWindow()">&times;</span>
          <h2>License</h2>
          <p>
	<?php

require_once "../database/database.php";
$c1=mysqli_connect(server,user,password,database,port);
$q1="SELECT * FROM `License`;";
$r1=mysqli_query($c1,$q1);
while($re1=mysqli_fetch_assoc($r1)){
echo $re1["License"];
}
?>
</p>
</div></div>

</body>

</html>