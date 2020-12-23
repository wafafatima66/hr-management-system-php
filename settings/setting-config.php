<?php
require '../includes/conn.php';

if(isset($_POST['admin_photo'])){

    $username=$_POST['username'];
    $userid=$_POST['userid'];

 $admin_photo = "admin".$userid."-".$_FILES["admin_photo"]["name"]; 
    $tempname = $_FILES["admin_photo"]["tmp_name"];     
        $folder = "../uploads/image/".$admin_photo; 

        if (move_uploaded_file($tempname, $folder))  { 
                        $msg = "Image uploaded successfully"; 
                    

            $sql="INSERT INTO users (username,user_id,admin_photo) VALUE (?,?,?)
             ON DUPLICATE KEY UPDATE
             admin_photo = '$admin_photo'";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:../home/home.php?photo=notchanged");
                exit();
            }
    else{
    
        mysqli_stmt_bind_param($stmt,"sis", $username,$userid,$admin_photo);
        mysqli_stmt_execute($stmt);
        header("Location:../home/home.php?");
        exit();
    }
} else "no";
}



if(isset($_POST['change_pass'])){

    $username=$_POST['username'];
    $userid=$_POST['userid'];
   
    $newPass = $_POST['newPass'];
    $newPassConfirm = $_REQUEST['newPassConfirm'];

           
    $query = "UPDATE users SET password= '$newPassConfirm'  where username = '$username' and user_id =$userid";
    $runquery = $conn -> query($query);
        if($runquery == true){
            header("Location:../home/home.php?pass=changed");
            exit();
        } else {
             header("Location:../home/home.php?pass=notchanged");
            exit();
    }
   }
   
   

?>