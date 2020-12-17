<?php

if(isset($_POST['title'])){

   $title = $_POST['title'] ; 
    
   require '../includes/conn.php';
    
  $query = "SELECT * FROM table_events WHERE  title = '$title'  " ;
       
  $runquery = $conn -> query($query);
  if($runquery == true){
   


  while($mydata = $runquery -> fetch_assoc()){

    $start=$mydata["start"];
    $end=$mydata['end'];
    $venue=$mydata['venue'];
    $address=$mydata['address'];
    $city=$mydata['city'];
    $barangay=$mydata['barangay'];
    $sp_last_name=$mydata['sp_last_name'];
    $sp_first_name=$mydata['sp_first_name'];
    $sp_middle_name=$mydata['sp_middle_name'];
    $sp_ext=$mydata['sp_ext'];

    $start=  str_replace(" ", "T", $start) ;
    $end=  str_replace(" ", "T", $end) ;

  }
  
 
}


echo json_encode( array('title'=>$title,'start'=>$start,'end'=>$end,'venue'=>$venue,'address'=>$address,'city'=>$city,'barangay'=>$barangay,'sp_last_name'=>$sp_last_name,'sp_first_name'=>$sp_first_name,'sp_middle_name'=>$sp_middle_name,'sp_ext'=>$sp_ext));


}

?>