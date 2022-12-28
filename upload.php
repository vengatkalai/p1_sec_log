<?php

session_start();
ob_start();

if(!isset($_SESSION['id'])){
    header("location:index.php");
    
}

$id = $_SESSION['id'];

include 'db.php';

if(isset($_POST)){

    extract($_POST);

    $fileTmp=$_FILES['file']['tmp_name'];
     $fileName = "documents/".time().$_FILES['file']['name'];
 
     //file format check
     $fileExt = explode('.', $fileName);
 
     $fileActualExt = strtolower(end($fileExt));
 
     $allowed = array('jpg', 'jpeg', 'png', 'pdf','tmp','gif');
 
     if(in_array($fileActualExt, $allowed)){
         if(move_uploaded_file($fileTmp,$fileName)){
 
         $sql="UPDATE `table` SET `$datatype`='$fileName' WHERE id=$id";
 
             if( $db->query($sql)){
                $result['msg']="update success";
                $result['status']=true;
               }
               else{
                $result['emsg']="update Error"; 
                $result['status']=false;

               }
       
         }
         else{
            $result['emsg']= "There was an error uploading your file";
         }
     }
     else{
        $result['emsg']= "You cannot upload files of this type";
     }        
    
 }

echo json_encode($result);

?>