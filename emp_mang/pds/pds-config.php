

<?php 

if(isset($_POST['submit'])){

  // $emp_first_name=$_POST['$emp_first_name'];
    /*$emp_last_name=$_POST['emp_last_name'];
    $emp_middle_name=$_POST['emp_middle_name'];
    $emp_ext=$_POST['emp_ext'];*/

    
    $emp_gender=$_POST['emp_gender'];
    $emp_civil_status=$_POST['emp_civil_status'];
    $emp_dob=$_POST['emp_dob'];
    $emp_height=$_POST['emp_height'];
    $emp_weight=$_POST['emp_weight'];
    $emp_blood=$_POST['emp_blood'];
    $emp_citizen=$_POST['emp_citizen,emp_citizen_chk,emp_dual_citizen'];
    
    
    $emp_resi_add=$_POST['emp_resi_add, emp_resi_add_street, emp_resi_add_subdivision ,emp_resi_add_barangay,emp_resi_add_municipal ,emp_resi_add_province ,emp_resi_add_zipcode'];

    /*$emp_resi_add_street=$_POST['emp_resi_add_street'];
    $emp_resi_add_subdivision=$_POST['emp_resi_add_subdivision'];
    $emp_resi_add_barangay=$_POST['emp_resi_add_barangay'];
    $emp_resi_add_municipal=$_POST['emp_resi_add_municipal'];
    $emp_resi_add_province=$_POST['emp_resi_add_province'];
    $emp_resi_add_zipcode=$_POST['emp_resi_add_zipcode'];
    $emp_resi_add_zipcode=$_POST['emp_resi_add_zipcode'];*/

    $emp_per_add=$_POST['emp_per_add,emp_per_add_street,emp_per_add_subdivision,emp_per_add_barangay,emp_per_add_municipal,emp_per_add_province,emp_per_add_zipcode'];
    /*
    $emp_per_add_street=$_POST['emp_per_add_street'];
    $emp_per_add_subdivision=$_POST['emp_per_add_subdivision'];
    $emp_per_add_barangay=$_POST['emp_per_add_barangay'];
    $emp_per_add_municipal=$_POST['emp_per_add_municipal'];
    $emp_per_add_province=$_POST['emp_per_add_province'];
    $emp_per_add_zipcode=$_POST['emp_per_add_zipcode'];*/
    
   /* $emp_tel_no=$_POST['emp_tel_no'];
    $emp_mb_no=$_POST['emp_mb_no'];
    $emp_email=$_POST['emp_email'];*/

    $emp_contact=$_POST['emp_tel_no,emp_mb_no,emp_email,emp_contact_gs,emp_contact_pag,emp_contact_ph,emp_contact_ss,emp_contact_tin,emp_contact_agency'];

    
    require '../../includes/conn.php';

  
    


            $sql="INSERT INTO pds (emp_gender,emp_civil_status,emp_dob,emp_height,emp_weight,emp_blood,emp_citizen,emp_resi_add,emp_per_add,emp_contact,emp_id,emp_first_name,emp_last_name) VALUE (?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:../emp_profile.php?error=sqlerror");
                exit();
            }
                else{


                    mysqli_stmt_bind_param($stmt,"sssiisssssiss",$emp_gender, $emp_civil_status, $emp_dob,$emp_height,$emp_weight,$emp_blood,$emp_citizen,$emp_resi_add,$emp_per_add,$emp_contact,$emp_id,$emp_first_name,$emp_last_name);
                    mysqli_stmt_execute($stmt);
                    header("Location:../emp_profile.php?submit=success");
                            exit();
                }

                mysqli_stmt_close($stmt);
                mysqli_close($conn);
            }
    


    else
    {
        header("Location:../emp_profile.php");
        exit();
    }
    
  
  ?>