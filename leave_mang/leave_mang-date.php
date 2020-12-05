<?php

if(isset($_POST['from_date'])){

    echo"hi";
$from_date = $_POST['from_date'];
$to_date = $_POST['to_date'];


$query = "SELECT * FROM emp_leaves WHERE  leave_from_date = '$from_date' AND leave_to_date = '$to_date'" ;

$runquery = $conn -> query($query);
if($runquery == true){

   

    $query = "SELECT type_of_leave FROM emp_leaves WHERE type_of_leave = 'vacation leave'" ;

$runquery = $conn -> query($query);
$vac_rowcount=mysqli_num_rows($runquery);

$query = "SELECT type_of_leave FROM emp_leaves WHERE type_of_leave = 'sick leave'" ;

$runquery = $conn -> query($query);
$sick_rowcount=mysqli_num_rows($runquery);

$query = "SELECT type_of_leave FROM emp_leaves WHERE type_of_leave = 'special priviledge leave'" ;

$runquery = $conn -> query($query);
$spl_rowcount=mysqli_num_rows($runquery);

  

    echo json_encode( array('vac_rowcount'=>$vac_rowcount,'sick_rowcount'=>$sick_rowcount,'spl_rowcount'=>$spl_rowcount));

}

echo "hi";
}



?>
