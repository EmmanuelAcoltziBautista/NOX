<?php
session_start();
$user=$_SESSION["user"];
$password=$_SESSION["password"];
if($user==null and $password==null){

echo"<script>document.location.href='../close/index.php';</script>";

}
?>
<link rel="stylesheet" href="../styles/styles.css">
<link rel="stylesheet" href="../styles/alert.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="../images/ico.png">
<script src="../js/alert.js"></script>
<style type="text/css">
        .img {
        width: 5%;
        height: 10%;
    }

    .img:hover {
        width: 7%;
        height: 12%;
    }

th{
background:#fff;
color:rgb(0,0,0);
}
td{
font-size:20px;
color:#fff;
}
</style>
<body>

<center>
<h1>Message received</h1>
</center>
<a href="./Send.php" class="a1"><img src="../images/Recibidos.png" class="img">Send Message</a>
<a href="../close/index.php" class="a1"><img src="../images/cerrar.png" class="img">Sing of</a>
<center>
<br/>
<ul>
<table border="1" class="c">
<tr>
<th>De</th>
<th>Mensaje</th>
</tr>
<?php
include_once "../database/database.php";
$connect=mysqli_connect(server,user,password,database,port);
$query="SELECT * FROM `MESSAGE` WHERE ID_OUT='$user' ORDER BY ID DESC;";
$result=mysqli_query($connect,$query);
while($out=mysqli_fetch_assoc($result)){
    echo "<tr><td>".$out['ID_PUT']."</td><td>".$out["MESSAGE"]."</td> ";

}

?>





</body>
