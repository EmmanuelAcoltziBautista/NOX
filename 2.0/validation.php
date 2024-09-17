<link rel="stylesheet" href="./styles/styles.css">
<script src="./js/alert.js"></script>
<link rel="stylesheet" href="./styles/alert.css">
<script>
    function al() {
        swal.fire({
            position: 'center',
            title: 'Error',
            icon: 'warning',
        }).then(function() {
            window.location = "index.php";
        });

    }
</script>
<?php
require_once "./database/database.php";
if (!empty($_POST["ID"]) && !empty($_POST["password"])) {
    $user = $_POST["ID"];
    $password = $_POST["password"];
    $connect = mysqli_connect(server, user, password, database, port);
    $query = "SELECT * FROM `USERS` WHERE PHONE='$user' AND PASSWORD='$password';";
    $result = mysqli_query($connect, $query);
    $out = mysqli_num_rows($result);
    if ($out > 0) {
        session_start();
        $_SESSION["user"] = $user;
        $_SESSION["password"] = $password;
        //header('Location: ./content/index.php');
        echo "<script>document.location.href='./content/index.php';</script>";
    } else {
        echo "no";
        echo "<script>
        al();
</script>";
    }
} else {
    
    header('Location:index.php');
}

?>