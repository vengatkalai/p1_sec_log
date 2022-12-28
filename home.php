<?php
session_start();
ob_start();

if(!isset($_SESSION['id'])){
    header("location:login.php");
}
$id=$_SESSION['id'];
// print_r($id);
include 'db.php';

if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>
    <div class="container-fluid profile d-flex align-items-center justify-content-around text-white">
        <div class="image rounded-circle overflow-hidden ">
            <img src="<?php echo $_SESSION['image']?>">
        </div>
        <h1>WELCOME &nbsp;
            <?php echo $_SESSION['name'];?>
        </h1>
        <h4>Email : &nbsp;
            <?php echo $_SESSION['email'];?>
        </h4>
        <a href="logout.php" class="text-white text-decoration-none btn btn-outline-light btn1">LOGOUT</a>
    </div>
    <div class="container"><br><br>
        

        <table class="table align-middle mb-0 bg-white table-bordered table-hover">

            <tbody>
                <!-- ==================== Aadhar Card ================  -->
                <tr id="a<?php echo $id;?>">
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Aadhar Card</p>
                            </div>
                        </div>
                    </td>


                    <td>
                        <div class="d-flex justify-content-center">
                            <button type="button" data-id="<?php echo $id;?>" data-type="aadhar" class="btn  btn-sm fw-bold btn2 uploadDoc">Upload</button>
                        </div>
                    </td>

                    <td>
                        <div class="d-flex justify-content-center">
                            <a href='<?php echo $_SESSION['aadhar'];?>' target='_blank'>VIEW</a>
                        </div>
                    </td>
                </tr>
                <!-- ==================== 100_Days job card ================  -->
                <tr id="j<?php echo $id;?>">
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <p class="fw-bold mb-1">100_Days job card</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                        <button type="button" data-id="<?php echo $id;?>" data-type="hundred_days" class="btn  btn-sm fw-bold btn2 uploadDoc">Upload</button>
                        </div>
                    </td>

                    <td>
                        <div class="d-flex justify-content-center">
                        <a href='<?php echo $_SESSION['hundred_days'];?>' target='_blank'>VIEW</a>
                        </div>
                    </td>
                </tr>
                <!-- ==================== PIP Number_or_BPL card ================  -->

                <tr id="pip<?php echo $id;?>">
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <p class="fw-bold mb-1">PIP Number/BPL card</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                        <button type="button" data-id="<?php echo $id;?>" data-type="pip_num_or_bpl_card"  class="btn  btn-sm fw-bold btn2 uploadDoc">Upload</button>
                        </div>
                    </td>

                    <td>
                        <div class="d-flex justify-content-center">      
                         <a href='<?php echo $_SESSION['pip_num_or_bpl_card'];?>' target='_blank'>VIEW</a>

                        </div>
                    </td>
                </tr>
                <!-- ==================== Communitiy certificate ================  -->

                <tr id="c<?php echo $id;?>">
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Communitiy certificate</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                        <button type="button" data-id="<?php echo $id;?>" data-type="community"  class="btn  btn-sm fw-bold btn2 uploadDoc">Upload</button>
                        </div>
                    </td>

                    <td>
                        <div class="d-flex justify-content-center">
                        <a href='<?php echo $_SESSION['community'];?>' target='_blank'>VIEW</a>
                        </div>
                    </td>
                </tr>
                <!-- ==================== Smart Card ================  -->

                <tr id="c<?php echo $id;?>">
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Smart Card</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                        <button type="button" data-id="<?php echo $id;?>" data-type="smartcard"  class="btn  btn-sm fw-bold btn2 uploadDoc">Upload</button>
                        </div>
                    </td>

                    <td>
                        <div class="d-flex justify-content-center">
                        <a href='<?php echo $_SESSION['smartcard'];?>' target='_blank'>VIEW</a>
                        </div>
                    </td>
                </tr>
                <!-- ==================== Degree Marksheet/TC ================  -->

                <tr id="tc<?php echo $id;?>">
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <p class="fw-bold mb-1">Degree Marksheet/TC</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                        <button type="button" data-id="<?php echo $id;?>" data-type="marksheet" class="btn  btn-sm fw-bold btn2 uploadDoc">Upload</button>
                        </div>
                    </td>

                    <td>
                        <div class="d-flex justify-content-center">
                        <a href='<?php echo $_SESSION['marksheet'];?>' target='_blank'>VIEW</a>
                        </div>
                    </td>
                </tr>
                <!-- ==================== PassBook ================  -->

                <tr id="pass<?php echo $id;?>">
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <p class="fw-bold mb-1">PassBook</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                        <button type="button" data-id="<?php echo $id;?>" data-type="passbook"  class="btn  btn-sm fw-bold btn2 uploadDoc">Upload</button>
                        </div>
                    </td>

                    <td>
                        <div class="d-flex justify-content-center">
                        <a href='<?php echo $_SESSION['passbook'];?>' target='_blank'>VIEW</a>
                        </div>
                    </td>
                </tr>

                <!-- ==================== end of PassBook ================  -->
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="uploadPop" tabindex="-1" aria-labelledby="popLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 " id="popLabel"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close"></button>
                </div>
                <div class="modal-body ">
                    <form action="" method="post" enctype="multipart/form-data" id="sortpicture">
                    <h4 class="text-center text-success" id="result" style="display:none"> </h4>
                       <h4 class="text-center text-danger" id="error" style="display:none"> </h4>
                        <input type="hidden" name="datatype" id="datatype">
                        <div class="mb-3">
                            <input type="file" name="file" class="form-control" id="file">
                        <span class="d-flex justify-content-end mt-4">
                            <input type="submit" name="upload" value="Upload" class="btn btn-success" id="upload"></input></span> 
                        </div>
                  </form>
                      
                </div>
            </div>
        </div>
    </div>
    <!-- <a href="view.php" target="_self">view</a> -->
    

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $(document).ready(function () {

        $(".uploadDoc").click(function () {

            var DataType = $(this).data("type");
            var DataId = $(this).data("id");
        
            $("#popLabel").html(DataType + " Upload");
            $("#datatype").val(DataType);
            $("#uploadPop").modal("show");
        });

        $(".btn2").click(function (){
            var DataType = $(this).data("type");
            var DataId = $(this).data("id");
      

        });
   
   
        $("#sortpicture").on('submit',(function(e) {
            e.preventDefault();
           
            $.ajax({
                url: 'upload.php',
                type: 'post',
                dataType: 'text',
                data:  new FormData(this),
                contentType: false,
                cache: false,
                processData:false,
           
                    
                success: function (result) {
                    result = JSON.parse(result);
                    console.log['msg'];
                    $('#error').html(result.emsg);
                    if (result.status) {
                        $("#uploadPop").modal("hide");
                        $("#sortpicture").trigger("reset");
                       alert(result.msg);
                    } else {
                        alert(result.emsg);
                        $("#sortpicture").trigger("reset");
                        
                    }
                }
            });
         
        }));

    });

</script>

</body>

</html>
