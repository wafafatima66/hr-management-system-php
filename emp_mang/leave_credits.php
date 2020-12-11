<?php

$vl_last_year_pts = 8.0 ;
$sl_last_year_pts = 7.5 ;

$total_last_year_pts = $vl_last_year_pts + $sl_last_year_pts ;

$ini_pts = 1.25;


$vl_pts = $ini_pts + $vl_last_year_pts ; 
$sl_pts = $ini_pts + $sl_last_year_pts ; 

for($i = 0 ; $i < 12 ; $i++){


$query = "select * from leave_credits where emp_id = '$emp_id' and MONTH(mon) = '$j' "; 



if($runquery = $conn -> query($query))

{
while($mydata = $runquery -> fetch_assoc())
    {
}
?>