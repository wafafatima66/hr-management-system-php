<?php




$query = "SELECT vac_date_diff from date_diff_leaves group by emp_id";

  $runquery = $conn -> query($query);
  if($runquery == true){
   
     
  while($data = $runquery -> fetch_assoc()){

  }}
?>