<?php

//when rw is clicked , the employee information is shown 

require '../includes/conn.php';

if(isset($_POST['emp_id']) && isset($_POST['sno'])){

$emp_id = $_POST['emp_id'];
$sno = $_POST['sno'];


//$_SESSION['emp_id']= $emp_id;


$query = "SELECT e.emp_first_name , e.emp_middle_name, e.emp_last_name , e.emp_ext, e.emp_status,  l.type_of_leave ,  e.emp_salary, l.leave_from_date , l.leave_to_date , l.communication from add_emp e , emp_leaves l where e.emp_id = l.emp_id and sno = $sno  " ;
  
$runquery = $conn -> query($query);
if($runquery == true){
 
   
while($mydata = $runquery -> fetch_assoc()){

    $emp_first_name = $mydata["emp_first_name"];
    $emp_middle_name = $mydata["emp_middle_name"];
    $emp_last_name = $mydata["emp_last_name"];
    $emp_ext = $mydata["emp_ext"];
    $emp_status = $mydata["emp_status"];
   

    $type_of_leave = $mydata["type_of_leave"];
    $emp_salary = $mydata["emp_salary"];
    $leave_from_date = $mydata["leave_from_date"];
    $leave_to_date = $mydata["leave_to_date"];
    $communication = $mydata["communication"];

    $from_date = strtotime($leave_from_date); // or your date as well
     $to_date = strtotime($leave_to_date);
     $date_diff = round(($to_date - $from_date )/ (60 * 60 * 24))+1;

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


}

}
$query = "SELECT vl_pts , sl_pts FROM leave_credits_result WHERE  emp_id = $emp_id and mon =  MONTH('$leave_to_date') and year = year('$leave_to_date')" ;
       
$runquery = $conn -> query($query);
if($runquery == true){
 
   
while($mydata = $runquery -> fetch_assoc()){

    $vl_pts = $mydata["vl_pts"];
    $sl_pts = $mydata["sl_pts"];

    $pts_total = $vl_pts + $sl_pts;

    $vl_bal = $vl_pts -  $vl_now_pts ; 
    $sl_bal =  $sl_pts - $sl_now_pts ; 
    $total_bal = $vl_bal - $sl_bal ; 
}


}
echo json_encode( array('emp_first_name'=>$emp_first_name,'emp_middle_name'=>$emp_middle_name,'emp_last_name'=>$emp_last_name,'emp_ext'=>$emp_ext,'emp_status'=>$emp_status,'emp_id'=>$emp_id,'type_of_leave'=>$type_of_leave,'emp_salary'=>$emp_salary,'leave_from_date'=>$leave_from_date,'leave_to_date'=>$leave_to_date,'communication'=>$communication,'vl_now_pts'=>$vl_now_pts,'sl_now_pts'=>$sl_now_pts,'vl_pts'=>$vl_pts,'sl_pts'=>$sl_pts,'pts_total'=>$pts_total, 'total_pts_now'=>$total_pts_now,'vl_bal'=>$vl_bal,'sl_bal'=>$sl_bal,'total_bal'=>$total_bal,'sno'=>$sno));
}
?>

