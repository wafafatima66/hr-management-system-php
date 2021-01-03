<?php

$vl_last_year_pts = 8.0 ;
$sl_last_year_pts = 7.5 ;

$total_last_year_pts = $vl_last_year_pts + $sl_last_year_pts ;

require '../includes/conn.php';

 

//vl_day --to calculate days 
//vl_pts --- to calculate points 

$vl_pts = $vl_last_year_pts + 1.25 ; 


for($i = 0 ; $i < 12 ; $i++){

    $j = $i+1;

   

$query = "select sum(vacation_leave) as vl_days from leave_credits where emp_id = 39 and mon = $j  "; 



if($runquery = $conn -> query($query)){

while($mydata = $runquery -> fetch_assoc())
    {
       
        
      if($mydata["vl_days"]){

        $vl_days = $mydata["vl_days"] ;
        echo $vl_days . "->" ;       
        $vl_pts =  $vl_pts - $vl_days;
        
      }
      
      else {
        $vl_days = 1.25 ; 
        echo $vl_days . "->" ;
        
        $vl_pts =  $vl_pts + $vl_days;
          
    }

    echo nl2br( "vl points ---".$vl_pts."\n");  




   
    }
    
   

  
   
} 
        
}


echo $total_last_year_pts ;



?>