<?php
session_start();

//to get information after getting id in leave management first box 

require '../includes/conn.php';

if(isset($_POST['emp_id'])){

    
    $emp_id = $_POST['emp_id'];
    $_SESSION['emp_id']= $emp_id;
    
    $query = "SELECT * FROM add_emp WHERE  emp_id = '$emp_id'" ;
      
    $runquery = $conn -> query($query);
    if($runquery == true){
     
       
    while($mydata = $runquery -> fetch_assoc()){

        $emp_first_name = $mydata["emp_first_name"];
        $emp_middle_name = $mydata["emp_middle_name"];
        $emp_last_name = $mydata["emp_last_name"];
        $emp_ext = $mydata["emp_ext"];
        $emp_status = $mydata["emp_status"];
        $emp_salary = $mydata["emp_salary"];

        echo json_encode( array('emp_first_name'=>$emp_first_name,'emp_middle_name'=>$emp_middle_name,'emp_last_name'=>$emp_last_name,'emp_ext'=>$emp_ext,'emp_status'=>$emp_status,'emp_salary'=>$emp_salary));

}
    }


 

 // to save information from leave management first box

if(isset($_POST['submit'])){


    $emp_id=$_POST['emp_id'];

    $emp_salary=$_POST['emp_salary'];
    $type_of_leave=$_POST['type_of_leave'];
    $leave_from_date=$_POST['leave_from_date'];
    $leave_to_date=$_POST['leave_to_date'];
    $communication=$_POST['communication'];
    

    $from_date = strtotime($leave_from_date); // or your date as well
    $to_date = strtotime($leave_to_date);


    $date_diff = round(($to_date - $from_date )/ (60 * 60 * 24))+1;

    
    // if getting particular data through sno -- then update

    if(isset($_POST['sno']) && (!empty($_POST['sno']))){
        $sno=$_POST['sno'];

        $query = "UPDATE emp_leaves SET type_of_leave='$type_of_leave',leave_from_date='$leave_from_date',leave_to_date='$leave_to_date',communication='$communication',date_diff='$date_diff' WHERE sno= '$sno' " ;


        $runquery = $conn -> query($query);

        } else 
        
           {    //inseting into leave records 
               $sql="INSERT INTO emp_leaves (emp_id, type_of_leave,leave_from_date,leave_to_date,communication,date_diff) VALUE (?,?,?,?,?,?)
           
            ";

            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:leave_mang.php?leave=error");
                exit();
            }
                else{ 
                
                    mysqli_stmt_bind_param($stmt,"issssi", $emp_id,  $type_of_leave,$leave_from_date,$leave_to_date,$communication,$date_diff);
                    mysqli_stmt_execute($stmt); 
                }

            }


                // inserting emp id to table to identify employee applied for leave
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

                    //inserting emp salary to add employees
                    $query = "UPDATE add_emp SET emp_salary='$emp_salary' WHERE emp_id= '$emp_id' " ;


                    $runquery = $conn -> query($query);
                 

                            //getting month year and difference to store to leave credits 
                    $mon = date("m", strtotime($leave_from_date));
                    $year = date("Y", strtotime($leave_from_date));


                    if($type_of_leave == "vacation leave"){

                        $vacation_leave = $date_diff;
                        //$sick_leave = 1.25 ; 
                    }else  if($type_of_leave == "sick leave"){
                        $sick_leave = $date_diff;
                        //$vacation_leave = 1.25 ; 
                    }else  if($type_of_leave == "special priviledge leave"){
                        $spl = $date_diff;
                    }else  if($type_of_leave == "force leave"){
                        $force_leave = $date_diff;
                    }else  if($type_of_leave == "leave without pay"){
                        $lwp = $date_diff;
                    }

                    $sql_3="INSERT INTO leave_credits (emp_id,vacation_leave,sick_leave,spl,force_leave,lwp,mon,year) VALUE (?,?,?,?,?,?,?,?)
                  
                        ";
            
               
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$sql_3)){
                        header("Location:leave_mang.php?leave=error");
                        exit();
                    }
                        else{ 
                        
                            mysqli_stmt_bind_param($stmt,"iiiiiiii", $emp_id,$vacation_leave,$sick_leave,$spl,$force_leave,$lwp,$mon,$year);
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
    

    