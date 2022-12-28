<?php 
session_start();
ob_start();

include 'db.php';
if(!isset($_SESSION['AID'])){
    header("location:admin.php");
}
$id=$_SESSION['AID'];
// print_r($id);
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
        <!DOCTYPE html>
        <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>DDU-GKY</title>
                <link rel="stylesheet" href="css/style.css">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
                    crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                    crossorigin="anonymous"></script>
                <link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="css/style2.css">
            </head>

            <body>
                <div class="container-fluid profile d-flex align-items-center justify-content-around text-white">
                    <div class="image rounded-circle overflow-hidden ">
                        <img src="images/logo.png">
                    </div>
                    <h1>WELCOME &nbsp;
                        <?php echo $_SESSION['ANAME'];?>
                    </h1>

                    <a href="logout.php" class="text-white text-decoration-none btn btn-outline-light btn1">LOGOUT</a>
                </div>
                <section class="container">
                    <h1 class=" m-5 text-center color1">STUDENTS DATA</h1>
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Aadhar</th>
                                <th>hundreddays</th>
                                <th>pip_num</th>
                                <th>smartcard</th>
                                <th>marksheet</th>
                                <th>passbook</th>
                            </tr>
                        </thead>

                        <?php
// name`, `email`, `password`, `image`, `aadhar`, `hundred_days`, `pip_num/bpl_card`, `community`, `smartcard`, `marksheet`, `passbook
                        $sql="select * from `table`";
                        $result=$db->query($sql);
                        if($result->num_rows>0){
                            while($row=$result->fetch_assoc()){
                            echo " <tr>
                            <td>$row[id]</td>
                            <td>$row[name]</td>
                            <td>$row[email]</td>
                            <td>$row[aadhar]</td>
                            <td>$row[hundred_days]</td>
                            <td>$row[pip_num_or_bpl_card]</td>
                            <td>$row[community]</td>
                            <td>$row[smartcard]</td>
                            <td>$row[marksheet]</td>
                            
                        </tr>
                            
                            
                            "; 
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </section>
            </body>

        </html>