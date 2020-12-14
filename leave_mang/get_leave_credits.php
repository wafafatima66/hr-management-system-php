<?php
session_start();
require '../includes/conn.php';

   
if(isset($_POST['leave_to_date'])){

   
     $leave_from_date = $_POST['leave_from_date'];
     $leave_to_date = $_POST['leave_to_date'];
     $type_of_leave = $_POST['type_of_leave'];

     $emp_id = $_SESSION['emp_id'];  

     $from_date = strtotime($leave_from_date); // or your date as well
     $to_date = strtotime($leave_to_date);
     $date_diff = round(($to_date - $from_date )/ (60 * 60 * 24));

     $vl_now_pts = 0;
     $sl_now_pts = 0;

     if($type_of_leave == "vacation leave"){
        $vl_now_pts = $date_diff * 1.25 ; 
    } else if($type_of_leave == "sick leave"){
       $sl_now_pts = $date_diff * 1.25 ; 
   } else {
       $vl_now_pts = 0;
       $sl_now_pts = 0;
   }

   $total_pts_now =  $vl_now_pts + $sl_now_pts ; 
     

     $query = "SELECT vl_pts , sl_pts FROM leave_credits_result WHERE  emp_id = $emp_id and mon =  MONTH('$leave_to_date')" ;
       
     $runquery = $conn -> query($query);
     if($runquery == true){
      
        
     while($mydata = $runquery -> fetch_assoc()){
 
         $vl_pts = $mydata["vl_pts"];
         $sl_pts = $mydata["sl_pts"];

         $pts_total = $vl_pts + $sl_pts;

         $vl_bal = $vl_pts -  $vl_now_pts ; 
         $sl_bal =  $sl_pts - $sl_now_pts ; 
         $total_bal = $vl_bal - $sl_bal ; 
       
 
         echo json_encode( array('vl_pts'=>$vl_pts,'sl_pts'=>$sl_pts,'vl_now_pts'=>$vl_now_pts,'sl_now_pts'=>$sl_now_pts,'pts_total'=>$pts_total, 'total_pts_now'=>$total_pts_now,'vl_bal'=>$vl_bal,'sl_bal'=>$sl_bal,'total_bal'=>$total_bal));
         //echo          $vl_pts;   
 
 }
     } else
     
 
     echo $emp_id;
 
 }
 

?>