
<?php


if(isset($_POST['vl_pts']) || isset($_POST['sl_pts'])   ){

    $vl_pts = $_POST['vl_pts'];
    $sl_pts = $_POST['sl_pts'];
    $emp_id = $_POST['emp_id'];
    $year = date("Y")-1;

    
    require '../includes/conn.php';


    $sql="INSERT INTO leave_credits_year (emp_id , vl_pts, sl_pts, year) VALUE (?,?,?,?)
     ON DUPLICATE KEY UPDATE
     vl_pts = '$vl_pts',
     sl_pts = '$sl_pts'
    
    ";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        echo "not saved";
        exit();
    }
        else{
        
            mysqli_stmt_bind_param($stmt,"iddi", $emp_id, $vl_pts, $sl_pts,$year);
            mysqli_stmt_execute($stmt);
            echo "Saved";
            exit();
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

   
}
  else echo "hi";
?>