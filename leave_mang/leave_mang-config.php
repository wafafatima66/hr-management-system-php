<?php

require '../includes/conn.php';

if(isset($_POST['emp_id'])){
    $emp_id = $_POST['emp_id'];

    
    $query = "SELECT * FROM add_emp WHERE  emp_id = '$emp_id'" ;
      

   

    $runquery = $conn -> query($query);
    if($runquery == true){
     
       
    while($mydata = $runquery -> fetch_assoc()){

        $emp_first_name = $mydata["emp_first_name"];
        $emp_middle_name = $mydata["emp_middle_name"];
        $emp_last_name = $mydata["emp_last_name"];
        $emp_ext = $mydata["emp_ext"];

        echo json_encode( array('emp_first_name'=>$emp_first_name,'emp_middle_name'=>$emp_middle_name,'emp_last_name'=>$emp_last_name,'emp_ext'=>$emp_ext));

}
    }
}

?>

