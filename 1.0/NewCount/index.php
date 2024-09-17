<html>

<head>
	<title>Nox</title>
	<link rel="stylesheet" href="../styles/styles.css">
	<link rel="stylesheet" href="../styles/window.css">
	<script src="../js/window.js"></script>
	<link rel="stylesheet" href="../styles/alert.css">
	<link rel="icon" href="../images/ico.png">
	<script src="../js/alert.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
	</style>
</head>

<body>
	<a class="btn" href="../index.php">Go back</a>
	<center>
		<h1>Create new account</h1>
		<br />
		<form method="post" action="">
		
			<label for="Name">Name:</label>
			<br />
			<br />
			<input type="text" id="Name" name="Name" placeholder="Write here" required>
			<br />
			<br />
			<label for="Email">Email:</label>
			<BR />
			<BR>
			<input type="email" id="Email" name="Email" placeholder="Write here" required>
			<br />
			<br />
			<label for="Phone">Phone number:</label>
			<br />
			<br />
			<input type="number" id="Phone" name="Phone" placeholder="Write here" required>
			<br /><br />
			<label for="password">Password:</label>
			<br />
			<br />
			<input type="password" id="Password" name="Password" placeholder="Write here" required>
			<br />
			<br />
			<input type="submit" value="Create account" id="Create" name="Create" class="btn">
		</form>
		<br /><br />

	
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

		<?php
		if(ISSET($_POST["Create"])){
			$pass=$_POST["Password"];
			$email=$_POST["Email"];
			$name=$_POST["Name"];
			$phone=$_POST["Phone"];
			$connect=mysqli_connect(server,user,password,database,port);
			$query="INSERT INTO `USERS`(`id`, `NAME`, `EMAIL`, `PHONE`, `PASSWORD`) 
			VALUES ('0','$name','$email','$phone','$pass')";
			$result=mysqli_query($connect,$query);
			echo"
			<script>
			swal.fire({
				position:'center',
				title:'Created account',
				icon:'success',
			});</script>";



		}

		?>
</body>

</html>