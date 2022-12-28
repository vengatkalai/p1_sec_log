<?php 
session_start();
ob_start();
$msg="";
include 'db.php';

if(isset($_POST['submit'])){
    extract($_POST);
    print_r($_POST);
    $sql="SELECT * FROM admin WHERE `name`='$aname' and `password`='$password'";
    $result=$db->query($sql);
    if($result->num_rows>0){
    $row=$result->fetch_assoc();
    $_SESSION["AID"]=$row["id"];
    $_SESSION["ANAME"]=$row["name"];
    header("location:ahome.php");
    }else{
        $msg="Login Error";
    }

}


?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DDU-GKY</title>
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <section class="head">
            <div class="header">
                <div class="logo">
                    <img src="images\coat_arms_india_PNG17.png">
                </div>
                <div class="banner">
                    <img src="images/Artboard 1.png">
                </div>
                <div class="login">
                    <a href="index.php">Home</a>

                </div>
            </div>
        </section>
        <section id="form">
            <form action="" method="post" class="form" autocomplete="off">
                <center>
                    <h1>ADMIN LOGIN</h1>
                    <div class="input">
                        <label>USER NAME</label>
                        <input type="text" name="aname">
                        <label>PASSWORD</label>
                        <input type="password" name="password">
                        <input type="submit" name="submit" value="LogIn">
                        <p class="error">
                            <?php echo $msg;?>
                        </p>
                    </div>
                </center>
            </form>
        </section>
    </body>

</html>