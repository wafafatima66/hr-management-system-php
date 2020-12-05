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
        $emp_status = $mydata["emp_status"];

        echo json_encode( array('emp_first_name'=>$emp_first_name,'emp_middle_name'=>$emp_middle_name,'emp_last_name'=>$emp_last_name,'emp_ext'=>$emp_ext,'emp_status'=>$emp_status));

}
    }


 

if(isset($_POST['submit'])){


    $emp_id=$_POST['emp_id'];
    $emp_salary=$_POST['emp_salary'];
    $type_of_leave=$_POST['type_of_leave'];
    $leave_from_date=$_POST['leave_from_date'];
    $leave_to_date=$_POST['leave_to_date'];
    $communication=$_POST['communication'];
    $description=$_POST['description'];
    $certificate_of_leave=$_POST['certificate_of_leave'];
   
    
    require '../includes/conn.php';

   
        
            $sql="INSERT INTO emp_leaves (emp_id, emp_salary, type_of_leave,leave_from_date,leave_to_date,communication,description,certificate_of_leave) VALUE (?,?,?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:leave_mang.php?leave=error");
                exit();
            }
                else{
                
                    mysqli_stmt_bind_param($stmt,"iissssss", $emp_id, $emp_salary, $type_of_leave,$leave_from_date,$leave_to_date,$communication,$description,$certificate_of_leave);
                    mysqli_stmt_execute($stmt);

                  

                   

                    header("Location:leave_mang.php?leave=success");
                            exit();
                }

                mysqli_stmt_close($stmt);
        mysqli_close($conn);
        } 
    
    

    }     

    else
    {
        header("Location:emp_mang.php");
        exit();
    }
    

    