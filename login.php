<?php
include 'db.php';

session_start();
ob_start();
$msg='';

if(isset($_POST['submit'])){

extract($_POST);

$sql="SELECT * FROM `table` WHERE `email`='$email' and `password`='$password'";

$result=$db->query($sql);

if($result->num_rows>0){

    $row=$result->fetch_assoc();
    $un=strtoupper($row['name']);
    $_SESSION['id']=$row['id'];
    $_SESSION['name']=$un;
    $_SESSION['image']=$row['image'];
    $_SESSION['email']=$row['email'];
    $_SESSION['aadhar']=$row['aadhar'];
    $_SESSION['hundred_days']=$row['hundred_days'];
    $_SESSION['pip_num_or_bpl_card']=$row['pip_num_or_bpl_card'];
    $_SESSION['community']=$row['community'];
    $_SESSION['smartcard']=$row['smartcard'];
    $_SESSION['marksheet']=$row['marksheet'];
    $_SESSION['passbook']=$row['passbook'];

     header("location:home.php");
}else{

    $msg="email or password Error";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <title>DDU-GKY</title>
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
        <h1>LOGIN</h1>
        <div class="input">
            <label >Enter your Email Address</label>
            <input type="email" name="email">
            <label >Enter your Password</label>
            <input type="password" name="password">
            <input type="submit" name="submit" class="submit" value="LogIn">
            <p class="error"><?php echo $msg;?></p> 
            <a href="reg.php">New User? Register Here</a>
      
        </div>

        </center>
    </form>
    </section>
</body>
</html>