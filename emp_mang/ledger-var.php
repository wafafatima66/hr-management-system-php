<?php
     

   


  // to get the month 
 /*
$query = "select type_of_leave from emp_leaves where emp_id = '$emp_id' "; 



if($runquery = $conn -> query($query)){


    $rowcount=mysqli_num_rows($runquery);

    while($mydata = $runquery -> fetch_assoc()) {

    $type_of_leave =   $mydata["type_of_leave"];
        


            

if($type_of_leave = "vacation leave")
{

    */

    $vac_date_diff =   "";
    $sick_date_diff =   "";
    $spl_date_diff =   "";
    $lwp_date_diff =   "";

    $vac_leave_dates="";
    $sick_leave_dates="";
    $spl_leave_dates="";
    $lwp_leave_dates="";

    $year = date("Y");
    $j = $i+1;

$query = "select * from emp_leaves where emp_id = '$emp_id' and MONTH(leave_from_date) = $j and year(leave_from_date)= $year and type_of_leave = 'vacation leave'"; 



if($runquery = $conn -> query($query))

{
while($mydata = $runquery -> fetch_assoc())
    {
        $leave_from_date =   date("m/d/Y", strtotime($mydata["leave_from_date"]));
        $leave_to_date =   date("m/d/Y", strtotime($mydata["leave_to_date"]));
        $vac_date_diff =   $mydata["date_diff"];
        

        $vac_leave_dates = $leave_from_date . ' '.'-'.' ' . $leave_to_date ; 
    }

    
}


//else if($type_of_leave = "sick leave"){

$query = "select * from emp_leaves where emp_id = '$emp_id' and MONTH(leave_from_date) = $j and year(leave_from_date)= $year and type_of_leave = 'sick leave'"; 



if($runquery = $conn -> query($query))

{
while($mydata = $runquery -> fetch_assoc())
    {
        $leave_from_date =   date("m/d/Y", strtotime($mydata["leave_from_date"]));
        $leave_to_date =   date("m/d/Y", strtotime($mydata["leave_to_date"]));
        $sick_date_diff =   $mydata["date_diff"];


        $sick_leave_dates = $leave_from_date . ' '.'-'.' ' . $leave_to_date ; 
    }

    
}


//else  if($type_of_leave = "special priviledge leave"){

$query = "select * from emp_leaves where emp_id = '$emp_id' and MONTH(leave_from_date) = $j and year(leave_from_date)= $year and type_of_leave = 'special priviledge leave'"; 



if($runquery = $conn -> query($query))

{
while($mydata = $runquery -> fetch_assoc())
    {
        $leave_from_date =   date("m/d/Y", strtotime($mydata["leave_from_date"]));
        $leave_to_date =   date("m/d/Y", strtotime($mydata["leave_to_date"]));
        $spl_date_diff =   $mydata["date_diff"];


        $spl_leave_dates = $leave_from_date . ' '.'-'.' ' . $leave_to_date ; 
    }

    
}



 //else if($type_of_leave = "leave without pay"){

    $query = "select * from emp_leaves where emp_id = '$emp_id' and MONTH(leave_from_date) = $j and year(leave_from_date)= $year and type_of_leave = 'leave without pay'"; 
    
    
    
    if($runquery = $conn -> query($query))
    
    {
    while($mydata = $runquery -> fetch_assoc())
        {
            $leave_from_date =   date("m/d/Y", strtotime($mydata["leave_from_date"]));
            $leave_to_date =   date("m/d/Y", strtotime($mydata["leave_to_date"]));
            $lwp_date_diff =   $mydata["date_diff"];
    
    
            $lwp_leave_dates = $leave_from_date . ' '.'-'.' ' . $leave_to_date ; 
        }
    
        
    }
   
?>