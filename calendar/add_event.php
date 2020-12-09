

<?php

require '../includes/conn.php';

$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];
$venue = $_POST['venue'];
$address = $_POST['address'];
$city = $_POST['city'];
$barangay = $_POST['barangay'];
$sp_last_name = $_POST['sp_last_name'];
$sp_first_name = $_POST['sp_first_name'];
$sp_middle_name = $_POST['sp_middle_name'];
$sp_ext = $_POST['sp_ext'];

$sql="INSERT INTO table_events (title, start, end,venue,address,city,barangay,sp_last_name,sp_first_name,sp_middle_name,sp_ext) VALUE (?,?,?,?,?,?,?,?,?,?,?)";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    header("Location:calendar.php?submit=error");
    exit();
}
    else{
    
        mysqli_stmt_bind_param($stmt,"sssssssssss", $title, $start, $end,$venue,$address,$city,$barangay,$sp_last_name,$sp_first_name,$sp_middle_name,$sp_ext);
        mysqli_stmt_execute($stmt);

      
        header("Location:calendar.php?submit=success");
                exit();
    }

    
mysqli_stmt_close($stmt);
mysqli_close($conn);

?>