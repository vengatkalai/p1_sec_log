<?php

session_start();
ob_start();

$_SESSION['msg']='';

include 'db.php';

if(isset($_POST['submit'])){

   extract($_POST);
   if($password===$cpassword){

    $fileTmp=$_FILES['file']['tmp_name'];
    $fileName = "upload/".time().$_FILES['file']['name'];

    //file format check
    $fileExt = explode('.', $fileName);

    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf','gif');

    if(in_array($fileActualExt, $allowed)){
        if(move_uploaded_file($fileTmp,$fileName)){

            $sql="INSERT INTO `table`(`name`, `email`, `password`, `image`) VALUES ('$name','$email','$password','$fileName')";

            if($db->query($sql)){
            
                header("location:login.php");
            }else{
                $_SESSION['msg']= "insert error";
            }

        }
        else{
            $_SESSION['msg']= "There was an error uploading your file";
        }
    }
    else{
        $_SESSION['msg']= "You cannot upload files of this type";
    }        

}
else{
    $_SESSION['msg']= "password dosn't match";
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
    <form action="" method="post" class="form form1" autocomplete="off" enctype="multipart/form-data">
        <center>
        <h1>REGISTRATION</h1>
        <div class="input input1">
            <label >Enter your Name</label>
            <input type="text" name="name">
            <label >Enter your Email Address</label>
            <input type="email" name="email">
            <label >Enter your Password</label>
            <input type="password" name="password">
            <label >Confirm your Password</label>
            <input type="password" name="cpassword">
            <label >Upload your Photo</label>
            <input type="file" name="file">
            <input type="submit" name="submit" value="Submit" class="submit ">
            <p class="error"><?php echo $_SESSION['msg'];?></p> 
            <a href="login.php">Already have an account?</a>
        </div>
        </center>
    </form>
    </section>
</body>
</html>