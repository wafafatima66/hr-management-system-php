<?php

if(isset($_POST['submit'])){

    require '../includes/conn.php';

    $title_of_training=$_POST['title_of_training'];
    $emp_id=$_POST['emp_id'];
    
   $type_of_training=$_POST['type_of_training'];
    $from_date=$_POST['from_date'];
    $to_date=$_POST['to_date'];
    $no_of_hrs=$_POST['no_of_hrs'];
    $venue=$_POST['venue'];
    $province=$_POST['province'];
   
    $agency=$_POST['agency'];
    $title=$_POST['title'];
    

$query = "UPDATE training SET type_of_training= '$type_of_training',  from_date= '$from_date' , to_date= '$to_date' , no_of_hrs= '$no_of_hrs' , venue= '$venue' , province= '$province'  , agency= '$agency' , title= '$title'   where title_of_training = '$title_of_training' and emp_id =$emp_id";
$runquery = $conn -> query($query);
    if($runquery == true){
        header("Location:training.php?submit=update");
        exit();
    } else {
         header("Location:training.php?submit=notupdate");
    exit();
}
    

    //echo $emp_id ,$title_of_training; 

}
?>