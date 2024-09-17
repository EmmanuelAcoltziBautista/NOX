<?php
session_start();
$user = $_SESSION["user"];
$password = $_SESSION["password"];
if ($user == null and $password == null) {
    echo"<script>document.location.href='../close/index.php';</script>";
}
?>
<link rel="stylesheet" href="../styles/styles.css">
<link rel="icon" href="../images/ico.png">
<link rel="stylesheet" href="../styles/alert.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    textarea {
        width: 300px;
        height: 300px;
    }
</style>
<title>Nox</title>
<center>

    <h1>Send Message</h1>


</center>
<a href="Receive.php" class="a1"><img src="../images/Re.png" class="img">Message received</a>
<a href="../close/index.php" class="a1"><img src="../images/cerrar.png" class="img">Sing of</a>
<br />
<center>
    <br />
    <form method="post">
        <label for="For">For:</label>
        <input type="number" id="For" name="For" placeholder="Recipient number" required>
        <br />
        <label for="Message">Message:</label>
        <br />
        <textarea id="Message" name="Message" placeholder="Write here:" required></textarea>
        <br />
        <br />
        <input type="submit" id="Send" name="Send" value="Send" class="btn">
    </form>
    
    <?php
 
    require_once "../database/database.php";
    $connect = mysqli_connect(server, user, password, database, port);
    if (ISSET($_POST["Send"])) {
        echo "<script>
        swal.fire({
            position:'center',
            title:'Menssage sent',
            icon:'success',
    });
    </script>";
        
        
        $for = $_POST["For"];
        $Message = $_POST["Message"];
        $query = "INSERT INTO `MESSAGE` (`id`,`ID_OUT`,`ID_PUT`,`MESSAGE`)
         VALUES ('0','$for','$user','$Message');";
       // echo $query;
        
        $exi = mysqli_query($connect, $query);
        $out = mysqli_num_rows($exi);
        if ($out>0) {
            echo "<script>
            swal.fire({
                position:'center',
                title:'Menssage sent',
                icon:'success',
        });
        </script>";
        }
    }


    ?>