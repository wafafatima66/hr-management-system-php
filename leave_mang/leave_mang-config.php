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

    $from_date = strtotime($leave_from_date); // or your date as well
    $to_date = strtotime($leave_to_date);


    $date_diff = round(($to_date - $from_date )/ (60 * 60 * 24));

    
    require '../includes/conn.php';

   
        
            $sql="INSERT INTO emp_leaves (emp_id, emp_salary, type_of_leave,leave_from_date,leave_to_date,communication,description,certificate_of_leave,date_diff) VALUE (?,?,?,?,?,?,?,?,?)";

            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:leave_mang.php?leave=error");
                exit();
            }
                else{ 
                
                    mysqli_stmt_bind_param($stmt,"iissssssi", $emp_id, $emp_salary, $type_of_leave,$leave_from_date,$leave_to_date,$communication,$description,$certificate_of_leave, $date_diff);
                    mysqli_stmt_execute($stmt); 
                }


                $sql_2="INSERT INTO per_emp_leaves (emp_id) VALUE (?)";
            
               
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql_2)){
                    header("Location:leave_mang.php?leave=error");
                    exit();
                }
                    else{ 
                    
                        mysqli_stmt_bind_param($stmt,"i", $emp_id);
                        mysqli_stmt_execute($stmt);
     
                    }

                    $mon = date(m);

                    if($type_of_leave == "vacation leave"){
                        $vacation_leave = $date_diff;
                    }else  if($type_of_leave == "sick leave"){
                        $sick_leave = $date_diff;
                    }else  if($type_of_leave == "special priviledge leave"){
                        $spl = $date_diff;
                    }else  if($type_of_leave == "force leave"){
                        $force_leave = $date_diff;
                    }else  if($type_of_leave == "leave without pay"){
                        $lwp = $date_diff;
                    }

                    $sql_3="INSERT INTO leave_credits (emp_id,vacation_leave,sick_leave,spl,force_leave,lwp,mon) VALUE (?,?,?,?,?,?,?)";
            
               
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$sql_3)){
                        header("Location:leave_mang.php?leave=error");
                        exit();
                    }
                        else{ 
                        
                            mysqli_stmt_bind_param($stmt,"iiiiiii", $emp_id,$vacation_leave,$sick_leave,$spl,$force_leave,$lwp,$mon);
                            mysqli_stmt_execute($stmt);
         
                        }



                    header("Location:leave_mang.php?leave=success");
                    exit();

                mysqli_stmt_close($stmt);
        mysqli_close($conn);
        } 
    
    

    }     

    else
    {
        header("Location:emp_mang.php");
        exit();
    }
    

    