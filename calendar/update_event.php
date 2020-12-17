<?php

require '../includes/conn.php';


if(isset($_POST['submit'])){

    

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

$query = "UPDATE table_events SET start='$start',end='$end',venue='$venue',address='$address',city='$city',barangay='$barangay',sp_last_name='$sp_last_name',sp_first_name='$sp_first_name',sp_middle_name='$sp_middle_name',sp_ext='$sp_ext' WHERE title= '$title' " ;


$runquery = $conn -> query($query);
    if($runquery == true){
        header("Location:calendar.php?submit=update");
        exit();
    } else {
         header("Location:calendar.php?submit=notupdate");
    exit();
    }


echo "hi";
}
?>