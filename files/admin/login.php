<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/logo1.png">
    <title>Reel Reviews | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<body>

<?php
include '../../inc/dbConnection.php';
session_start();

if(isset($_POST['username'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM adminloginform WHERE username='".$username."'AND password='".$password."' limit 1;";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1){
        echo '<div class="alert alert-success" role="alert">
                Loged In Successfully
            </div>';

        $_SESSION['username']=$username;
        header("Location:files/admin_dashboard.php?login=success");
        exit;
    }
    else{
    header("Location:login.php");
      exit;
    }
}
?>
    <div class="admin-login-main">
        <div>
            <img src="../../img/logo1.png" alt="">
            <form action="#" method="POST">
                <div>
                    <label for="">Username</label>
                    <input type="text" name="username" placeholder="Enter username">
                </div>
                <div>
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Enter password">
                </div>
                <div>
                    <button type="submit" name="submit" onmouseout="hoverOff(this)">LOGIN</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="../../js/main.js"></script>
</body>
</html>