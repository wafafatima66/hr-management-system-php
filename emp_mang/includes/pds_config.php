
<?php 


if(isset($_POST['submit'])){

    
    //$emp_id = $_SESSION['emp_id'];      
    
    require '../../includes/conn.php';


    //pds
   // $office_assign = $_SESSION['office_assign'];
    //$emp_first_name = $_SESSION['emp_first_name'];
    //$emp_last_name = $_SESSION['emp_last_name'];
    //$emp_status = $_SESSION['emp_status'];

    $emp_id=$_POST['emp_id'];
    $office_assign=$_POST['office_assign'];
    $emp_first_name=$_POST['emp_first_name'];
    $emp_last_name=$_POST['emp_last_name'];
    $emp_status=$_POST['emp_status'];
    $emp_middle_name=$_POST['emp_middle_name'];
    $emp_ext=$_POST['emp_ext'];
  

    $emp_sex=$_POST['emp_sex'];
    $emp_gender=$_POST['emp_gender'];
    $emp_civil_status=$_POST['emp_civil_status'];
    $emp_dob=$_POST['emp_dob'];
    $emp_height=$_POST['emp_height'];
    $emp_weight=$_POST['emp_weight'];
    $emp_blood=$_POST['emp_blood'];
    $emp_email = $_POST['emp_email']; 

    $emp_tel_no = $_POST['emp_tel_no'];
    $emp_mb_no = $_POST['emp_mb_no'];

    $emp_citizen=$_POST['emp_citizen']; 
    $emp_dual_citizen=$_POST['emp_dual_citizen'];

    $emp_citizen_chk_arr=$_POST['emp_citizen_chk'];
    $emp_citizen_chk = implode(',',$emp_citizen_chk_arr);

    

    $emp_resi_add=$_POST['emp_resi_add'];
    $emp_resi_add_street=$_POST['emp_resi_add_street'];
    $emp_resi_add_subdivision=$_POST['emp_resi_add_subdivision'];
    $emp_resi_add_barangay=$_POST['emp_resi_add_barangay'];
    $emp_resi_add_municipal=$_POST['emp_resi_add_municipal'];
    $emp_resi_add_province=$_POST['emp_resi_add_province'];
    $emp_resi_add_zipcode=$_POST['emp_resi_add_zipcode'];

    $emp_per_add=$_POST['emp_per_add'];
    $emp_per_add_street=$_POST['emp_per_add_street'];
    $emp_per_add_subdivision=$_POST['emp_per_add_subdivision'];
    $emp_per_add_barangay=$_POST['emp_per_add_barangay'];
    $emp_per_add_municipal=$_POST['emp_per_add_municipal'];
    $emp_per_add_province=$_POST['emp_per_add_province'];
    $emp_per_add_zipcode=$_POST['emp_per_add_zipcode'];
    
       $emp_contact_gs = $_POST['emp_contact_gs'];
    $emp_contact_pag = $_POST['emp_contact_pag'];
    $emp_contact_ph = $_POST['emp_contact_ph'];
    $emp_contact_ss = $_POST['emp_contact_ss'];
    $emp_contact_tin = $_POST['emp_contact_tin'];
    $emp_contact_agency = $_POST['emp_contact_agency'];

    


            $sql="INSERT INTO pds (emp_id,office_assign,emp_first_name,emp_last_name,emp_gender,emp_civil_status,emp_dob,emp_height,emp_weight,emp_blood,emp_email,emp_tel_no,emp_mb_no,emp_citizen,emp_dual_citizen,emp_citizen_chk,emp_resi_add,emp_resi_add_street,emp_resi_add_subdivision,emp_resi_add_barangay,emp_resi_add_municipal,emp_resi_add_province,emp_resi_add_zipcode,emp_per_add,emp_per_add_street,emp_per_add_subdivision,emp_per_add_barangay,emp_per_add_municipal,emp_per_add_province,emp_per_add_zipcode,emp_contact_gs,emp_contact_pag,emp_contact_ph,emp_contact_ss,emp_contact_tin,emp_contact_agency,emp_status,emp_sex,emp_middle_name,emp_ext) VALUE (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) 
            ON DUPLICATE KEY UPDATE
            office_assign = '$office_assign',
            emp_first_name = '$emp_first_name',
            emp_last_name = '$emp_last_name',
            emp_middle_name = '$emp_middle_name',
            emp_ext = '$emp_ext',
            emp_gender = '$emp_gender',
            emp_civil_status = '$emp_civil_status',
            emp_dob = '$emp_dob',
            emp_height = '$emp_height',
            emp_weight = '$emp_weight',
            emp_blood = '$emp_blood',
            emp_email = '$emp_email',
            emp_tel_no = '$emp_tel_no',
            emp_mb_no = '$emp_mb_no',
            emp_citizen = '$emp_citizen',
            emp_dual_citizen = '$emp_dual_citizen',
            emp_citizen_chk = '$emp_citizen_chk',
            emp_resi_add = '$emp_resi_add',
            emp_resi_add_street = '$emp_resi_add_street',
            emp_resi_add_subdivision = '$emp_resi_add_subdivision',
            emp_resi_add_barangay = '$emp_resi_add_barangay',
            emp_resi_add_municipal = '$emp_resi_add_municipal',
            emp_resi_add_province = '$emp_resi_add_province',
            emp_resi_add_zipcode = '$emp_resi_add_zipcode',
            emp_per_add = '$emp_per_add',
            emp_per_add_street = '$emp_per_add_street',
            emp_per_add_subdivision = '$emp_per_add_subdivision',
            emp_per_add_barangay = '$emp_per_add_barangay',
            emp_per_add_municipal = '$emp_per_add_municipal',
            emp_per_add_province = '$emp_per_add_province',
            emp_per_add_zipcode = '$emp_per_add_zipcode',
            emp_contact_gs = '$emp_contact_gs',
            emp_contact_pag = '$emp_contact_pag',
            emp_contact_ph = '$emp_contact_ph',
            emp_contact_ss = '$emp_contact_ss',
            emp_contact_tin = '$emp_contact_tin',
            emp_contact_agency = '$emp_contact_agency',
            
            emp_sex = '$emp_sex'
            ";

            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:../emp_profile.php?error=sqlerror");
                exit();
            }
                else{


                    mysqli_stmt_bind_param($stmt,"issssssiisssssssssssssssssssssiiiiiissss",$emp_id, $office_assign, $emp_first_name,$emp_last_name,$emp_gender,$emp_civil_status,$emp_dob,$emp_height,$emp_weight,$emp_blood,$emp_email,$emp_tel_no,$emp_mb_no,$emp_citizen,$emp_dual_citizen,$emp_citizen_chk,$emp_resi_add,$emp_resi_add_street,$emp_resi_add_subdivision,$emp_resi_add_barangay,$emp_resi_add_municipal,$emp_resi_add_province,$emp_resi_add_zipcode,$emp_per_add,$emp_per_add_street,$emp_per_add_subdivision,$emp_per_add_barangay,$emp_per_add_municipal,$emp_per_add_province,$emp_per_add_zipcode,$emp_contact_gs,$emp_contact_pag,$emp_contact_ph,$emp_contact_ss,$emp_contact_tin,$emp_contact_agency,$emp_status,$emp_sex,$emp_middle_name,$emp_ext);
                    mysqli_stmt_execute($stmt);

                  
                     
                }



                
   //family_background
    $emp_spouse_lastname=$_POST['emp_spouse_lastname'];
    $emp_spouse_firstname=$_POST['emp_spouse_firstname'];
    $emp_spouse_middlename=$_POST['emp_spouse_middlename'];
    $emp_spouse_extname=$_POST['emp_spouse_extname'];

    $emp_sp_occupation=$_POST['emp_sp_occupation'];
    $emp_sp_employer=$_POST['emp_sp_employer'];
    $emp_sp_add=$_POST['emp_sp_add'];
    $emp_sp_tel=$_POST['emp_sp_tel'];

    $emp_child_name_arr=$_POST['emp_child_name'];
    $emp_child_dob_arr=$_POST['emp_child_dob'];

    $emp_child_name= implode(',',$emp_child_name_arr);
    $emp_child_dob= implode(',',$emp_child_dob_arr);

    $emp_father_lastname=$_POST['emp_father_lastname'];
    $emp_father_firstname=$_POST['emp_father_firstname'];
    $emp_father_middlename=$_POST['emp_father_middlename'];
    $emp_father_extname=$_POST['emp_father_extname'];


    $emp_mother_lastname=$_POST['emp_mother_lastname'];
    $emp_mother_firstname=$_POST['emp_mother_firstname'];
    $emp_mother_middlename=$_POST['emp_mother_middlename'];
    $emp_mother_extname=$_POST['emp_mother_extname'];

  
    
    

            $sql="INSERT INTO family_background (emp_spouse_lastname,emp_spouse_firstname,emp_spouse_middlename,emp_spouse_extname,emp_sp_occupation,emp_sp_employer,emp_sp_add,emp_sp_tel,emp_child_name,emp_child_dob,emp_father_lastname,emp_father_firstname,emp_father_middlename,emp_father_extname,emp_mother_lastname,emp_mother_firstname,emp_mother_middlename,emp_mother_extname,emp_id) VALUE (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
            ON DUPLICATE KEY UPDATE
            emp_spouse_lastname = '$emp_spouse_lastname',
            emp_spouse_firstname = '$emp_spouse_firstname',
            emp_spouse_middlename = '$emp_spouse_middlename',
            emp_spouse_extname = '$emp_spouse_extname',
            emp_sp_occupation = '$emp_sp_occupation',
            emp_sp_employer = '$emp_sp_employer',
            emp_sp_add = '$emp_sp_add',
            emp_sp_tel = '$emp_sp_tel',
            emp_child_name = '$emp_child_name',
            emp_child_dob = '$emp_child_dob',
            emp_father_lastname = '$emp_father_lastname',
            emp_father_firstname = '$emp_father_firstname',
            emp_father_middlename = '$emp_father_middlename',
            emp_father_extname = '$emp_father_extname',
            emp_mother_lastname = '$emp_mother_lastname',
            emp_mother_firstname = '$emp_mother_firstname',
            emp_mother_middlename = '$emp_mother_middlename',
            emp_mother_extname = '$emp_mother_extname'
            ";

            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:../emp_profile.php?error=sqlerror");
                exit();
            }
                else{


                    mysqli_stmt_bind_param($stmt,"sssssssissssssssssi",$emp_spouse_lastname, $emp_spouse_firstname, $emp_spouse_middlename,$emp_spouse_extname,$emp_sp_occupation,$emp_sp_employer,$emp_sp_add,$emp_sp_tel,$emp_child_name,$emp_child_dob,$emp_father_lastname,$emp_father_firstname,$emp_father_middlename,$emp_father_extname,$emp_mother_lastname,$emp_mother_firstname,$emp_mother_middlename,$emp_mother_extname,$emp_id);
                    mysqli_stmt_execute($stmt);
                   
                }



//education background

$ele_school_name=$_POST['ele_school_name'];
    $ele_degree=$_POST['ele_degree'];
    $ele_from_date=$_POST['ele_from_date'];
    $ele_to_date=$_POST['ele_to_date'];
    $ele_units=$_POST['ele_units'];
    $ele_award=$_POST['ele_award'];
    $ele_graduation=$_POST['ele_graduation'];

    $sec_school_name=$_POST['sec_school_name'];
    $sec_degree=$_POST['sec_degree'];
    $sec_from_date=$_POST['sec_from_date'];
    $sec_to_date=$_POST['sec_to_date'];
    $sec_units=$_POST['sec_units'];
    $sec_award=$_POST['sec_award'];
    $sec_graduation=$_POST['sec_graduation'];

    $voc_school_name=$_POST['voc_school_name'];
    $voc_degree=$_POST['voc_degree'];
    $voc_from_date=$_POST['voc_from_date'];
    $voc_to_date=$_POST['voc_to_date'];
    $voc_units=$_POST['voc_units'];
    $voc_award=$_POST['voc_award'];
    $voc_graduation=$_POST['voc_graduation'];

    $coll_school_name=$_POST['coll_school_name'];
    $coll_degree=$_POST['coll_degree'];
    $coll_from_date=$_POST['coll_from_date'];
    $coll_to_date=$_POST['coll_to_date'];
    $coll_units=$_POST['coll_units'];
    $coll_award=$_POST['coll_award'];
    $coll_graduation=$_POST['coll_graduation'];

    $gra_school_name=$_POST['gra_school_name'];
    $gra_degree=$_POST['gra_degree'];
    $gra_from_date=$_POST['gra_from_date'];
    $gra_to_date=$_POST['gra_to_date'];
    $gra_units=$_POST['gra_units'];
    $gra_award=$_POST['gra_award'];
    $gra_graduation=$_POST['gra_graduation'];

    $post_school_name=$_POST['post_school_name'];
    $post_degree=$_POST['post_degree'];
    $post_from_date=$_POST['post_from_date'];
    $post_to_date=$_POST['post_to_date'];
    $post_units=$_POST['post_units'];
    $post_award=$_POST['post_award'];
    $post_graduation=$_POST['post_graduation'];

    $sql="INSERT INTO edu_background (ele_school_name ,ele_degree,ele_from_date,ele_to_date,ele_units,ele_award,ele_graduation,sec_school_name ,sec_degree,sec_from_date,sec_to_date,sec_units,sec_award,sec_graduation,voc_school_name ,voc_degree,voc_from_date,voc_to_date,voc_units,voc_award,voc_graduation,coll_school_name ,coll_degree,coll_from_date,coll_to_date,coll_units,coll_award,coll_graduation,gra_school_name ,gra_degree,gra_from_date,gra_to_date,gra_units,gra_award,gra_graduation,post_school_name ,post_degree,post_from_date,post_to_date,post_units,post_award,post_graduation,emp_id) VALUE (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) 
      ON DUPLICATE KEY UPDATE
      ele_school_name = '$ele_school_name',
      ele_degree = '$ele_degree',
      ele_from_date = '$ele_from_date',
      ele_to_date = '$ele_to_date',
      ele_units = '$ele_units',
      ele_award = '$ele_award',
      ele_graduation = '$ele_graduation',
      sec_school_name = '$sec_school_name',
      sec_degree = '$sec_degree',
      sec_from_date = '$sec_from_date',
      sec_to_date = '$sec_to_date',
      sec_units = '$sec_units',
      sec_award = '$sec_award',
      sec_graduation = '$sec_graduation',
      voc_school_name = '$voc_school_name',
      voc_degree = '$voc_degree',
      voc_from_date = '$voc_from_date',
      voc_to_date = '$voc_to_date',
      voc_units = '$voc_units',
      voc_award = '$voc_award',
      voc_graduation = '$voc_graduation',
      coll_school_name = '$coll_school_name',
      coll_degree = '$coll_degree',
      coll_from_date = '$coll_from_date',
      coll_to_date = '$coll_to_date',
      coll_units = '$coll_units',
      coll_award = '$coll_award',
      coll_graduation = '$coll_graduation',
      gra_school_name = '$gra_school_name',
      gra_degree = '$gra_degree',
      gra_from_date = '$gra_from_date',
      gra_to_date = '$gra_to_date',
      gra_units = '$gra_units',
      gra_award = '$gra_award',
      gra_graduation = '$gra_graduation',

      post_school_name = '$post_school_name',
      post_degree = '$post_degree',
      post_from_date = '$post_from_date',
      post_to_date = '$post_to_date',
      post_units = '$post_units',
      post_award = '$post_award',
      post_graduation = '$post_graduation'
    ";

        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:../emp_profile.php?error=sqlerror");
            exit();
        }
            else{


                mysqli_stmt_bind_param($stmt,"ssssissssssissssssissssssissssssissssssissi",$ele_school_name, $ele_degree, $ele_from_date,$ele_to_date,$ele_units,$ele_award,$ele_graduation,$sec_school_name,$sec_degree,$sec_from_date,$sec_to_date,$sec_units,$sec_award,$sec_graduation,$voc_school_name,$voc_degree,$voc_from_date,$voc_to_date,$voc_units,$voc_award,$voc_graduation,$coll_school_name,$coll_degree,$coll_from_date,$coll_to_date,$coll_units,$coll_award,$coll_graduation,$gra_school_name,$gra_degree,$gra_from_date,$gra_to_date,$gra_units,$gra_award,$gra_graduation,$post_school_name,$post_degree,$post_from_date,$post_to_date,$post_units,$post_award,$post_graduation,$emp_id);
                mysqli_stmt_execute($stmt);

               
            } 


            //civil service 
          

            if(isset($_POST['name_of_exam'])  ){

              

            $query = "SELECT * FROM civil_service WHERE emp_id = '$emp_id'";

            $runquery = $conn -> query($query);
                $rowcount=mysqli_num_rows($runquery);

                if($rowcount != 0 ){
                    $count = count(($_POST['name_of_exam']))-1;
                }
                else {
                    $count = count(($_POST['name_of_exam']));
                }

                
            for ($i = 0 ; $i < $count  ; $i++){

            $type_of=$_POST['type_of'][$i];
            $name_of_exam=$_POST['name_of_exam'][$i];
            $rating=$_POST['rating'][$i];
            $exam_date=$_POST['exam_date'][$i];
            $exam_place=$_POST['exam_place'][$i];
            $licence_no=$_POST['licence_no'][$i];
            $licence_val=$_POST['licence_val'][$i];
            
        
        
            if(!empty( $name_of_exam)) {
            
        
        
                    $sql="INSERT INTO civil_service (type_of,name_of_exam,rating,exam_date,exam_place,licence_no,licence_val,emp_id) VALUE (?,?,?,?,?,?,?,?) 
                    ";
        
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt,$sql)){
                        header("Location:../emp_profile.php?error=sqlerror");
                        exit();
                    }
                        else{
        
        
                            mysqli_stmt_bind_param($stmt,"ssissisi",$type_of, $name_of_exam, $rating,$exam_date,$exam_place,$licence_no,$licence_val,$emp_id);
                            mysqli_stmt_execute($stmt);

                        }

                         

                    }
        } 
    }
        //work experience

if(isset($_POST['work_position'])){

    $query = "SELECT * FROM emp_work WHERE emp_id = '$emp_id'";
                           
    $runquery = $conn -> query($query);
    $rowcount=mysqli_num_rows($runquery);

    if($rowcount != 0 ){
        $count = count(($_POST['work_position']))-1;
    } else {
        $count = count(($_POST['work_position']));
    }

            for ($i = 0 ; $i < $count  ; $i++){
        
    $work_from_date=$_POST['work_from_date'][$i];
    $work_to_date=$_POST['work_to_date'][$i];
    $work_position=$_POST['work_position'][$i];
    $employer=$_POST['employer'][$i];
    $govt_service=$_POST['govt_service'][$i];
    $monthly_sal=$_POST['monthly_sal'][$i];
    $increment=$_POST['increment'][$i];
    $work_status=$_POST['work_status'][$i];

    if(!empty( $work_position)) {
    

            $sql="INSERT INTO emp_work (work_from_date,work_to_date,work_position,employer,govt_service,monthly_sal,increment,work_status,office_assign,emp_id) VALUE (?,?,?,?,?,?,?,?,?,?)
            
            ";

            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:../emp_profile.php?error=sqlerror");
                exit();
            }
                else{


                    mysqli_stmt_bind_param($stmt,"sssssiissi",$work_from_date, $work_to_date, $work_position,$employer,$govt_service,$monthly_sal,$increment,$work_status,$office_assign,$emp_id);
                    mysqli_stmt_execute($stmt);

                }
    }
            } 
    }

            

    //voluntary works

    
if(isset($_POST['name_org'])){

    $query = "SELECT * FROM voluntary_works WHERE emp_id = '$emp_id'";
                           
    $runquery = $conn -> query($query);
    $rowcount=mysqli_num_rows($runquery);

    if($rowcount != 0 ){
        $count = count(($_POST['name_org']))-1;
    } else {
        $count = count(($_POST['name_org']));
    }

            for ($i = 0 ; $i < $count  ; $i++){

    $name_org=$_POST['name_org'][$i];
    $org_add=$_POST['org_add'][$i];
    $vol_from_date=$_POST['vol_from_date'][$i];
    $vol_to_date=$_POST['vol_to_date'][$i];
    $vol_no_of_hrs=$_POST['vol_no_of_hrs'][$i];
    $position=$_POST['position'][$i];
   
    
    if(!empty( $name_org)) {

            $sql="INSERT INTO voluntary_works (name_org,org_add,vol_from_date,vol_to_date,vol_no_of_hrs,position,emp_id) VALUE (?,?,?,?,?,?,?) ";

            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:../emp_profile.php?error=sqlerror");
                exit();
            }
                else{


                    mysqli_stmt_bind_param($stmt,"ssssisi",$name_org, $org_add, $vol_from_date,$vol_to_date,$vol_no_of_hrs,$position,$emp_id);
                    mysqli_stmt_execute($stmt);
                }
            }
            }
        }

        //learning 

       
if(isset($_POST['title_of_training'])){

    $query = "SELECT * FROM emp_learning WHERE emp_id = '$emp_id'";
                           
    $runquery = $conn -> query($query);
    $rowcount=mysqli_num_rows($runquery);

    if($rowcount != 0 ){
        $count = count(($_POST['title_of_training']))-1;
    } else {
        $count = count(($_POST['title_of_training']));
    }

            for ($i = 0 ; $i < $count  ; $i++){

   
        $title_of_training=$_POST['title_of_training'][$i];
        $type_of_position=$_POST['type_of_position'][$i];
        $no_of_hrs=$_POST['no_of_hrs'][$i];
        $learn_from_date=$_POST['learn_from_date'][$i];
        $learn_to_date=$_POST['learn_to_date'][$i];
        $conducted_by=$_POST['conducted_by'][$i];
        
        if(!empty( $title_of_training)) {
    
                $sql="INSERT INTO emp_learning (title_of_training,type_of_position,no_of_hrs,learn_from_date,learn_to_date,conducted_by,emp_id) VALUE (?,?,?,?,?,?,?) ON DUPLICATE KEY UPDATE
                title_of_training = '$title_of_training',
                type_of_position = '$type_of_position',
                no_of_hrs = '$no_of_hrs',
                learn_from_date = '$learn_from_date',
                learn_to_date = '$learn_to_date',
                conducted_by = '$conducted_by' ";
    
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header("Location:../emp_profile.php?error=sqlerror");
                    exit();
                }
                    else{
    
    
                        mysqli_stmt_bind_param($stmt,"ssisssi",$title_of_training, $type_of_position, $no_of_hrs,$learn_from_date,$learn_to_date,$conducted_by,$emp_id);
                        mysqli_stmt_execute($stmt);
                    }
                }
                }
            }

    //special skills

    
    $emp_special_skills_arr=$_POST['emp_special_skills'];
    $non_academic_arr=$_POST['non_academic'];
    $membership_arr=$_POST['membership'];

    $emp_special_skills= implode(',',  $emp_special_skills_arr);
    $non_academic= implode(',',  $non_academic_arr);
    $membership= implode(',',  $membership_arr);
    



            $sql="INSERT INTO skills (emp_special_skills,non_academic,membership,emp_id) VALUE (?,?,?,?) 
            
            ON DUPLICATE KEY UPDATE
            emp_special_skills = '$emp_special_skills',
            non_academic = '$non_academic',
            membership = '$membership'
            ";

            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:../emp_profile.php?error=sqlerror");
                exit();
            }
                else{


                    mysqli_stmt_bind_param($stmt,"sssi",$emp_special_skills, $non_academic, $membership,$emp_id);
                    mysqli_stmt_execute($stmt);
                }

    //others

    
    

    $condition_1=$_POST['condition_1'];
    $condition_1_des=$_POST['condition_1_des'];
    $condition_2=$_POST['condition_2'];
    $condition_2_des=$_POST['condition_2_des'];
    $condition_3=$_POST['condition_3'];
    $condition_3_des=$_POST['condition_3_des'];
    $condition_4=$_POST['condition_4'];
    $condition_4_des=$_POST['condition_4_des'];
    $condition_5=$_POST['condition_5'];
    $condition_5_des=$_POST['condition_5_des'];
    $condition_6=$_POST['condition_6'];
    $condition_6_des=$_POST['condition_6_des'];
    $condition_7=$_POST['condition_7'];
    $condition_7_des=$_POST['condition_7_des'];
    $condition_8=$_POST['condition_8'];
    $condition_8_des=$_POST['condition_8_des'];
    $condition_9=$_POST['condition_9'];
    $condition_9_des=$_POST['condition_9_des'];
    $condition_10=$_POST['condition_10'];
    $condition_10_des=$_POST['condition_10_des'];
    $condition_11=$_POST['condition_11'];
    $condition_11_des=$_POST['condition_11_des'];
    $condition_12=$_POST['condition_12'];
    $condition_12_des=$_POST['condition_12_des'];
  
   

            $sql="INSERT INTO other_inf (condition_1,condition_1_des,condition_2,condition_2_des,condition_3,condition_3_des,condition_4,condition_4_des,condition_5,condition_5_des,condition_6,condition_6_des,condition_7,condition_7_des,condition_8,condition_8_des,condition_9,condition_9_des,condition_10,condition_10_des,condition_11,condition_11_des,condition_12,condition_12_des,emp_id) VALUE (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
             ON DUPLICATE KEY UPDATE
             condition_1 = '$condition_1',
             condition_1_des = '$condition_1_des',
             condition_2 = '$condition_2',
             condition_2_des = '$condition_2_des',
             condition_3 = '$condition_3',
             condition_3_des = '$condition_3_des',
             condition_4 = '$condition_4',
             condition_4_des = '$condition_4_des',
             condition_5 = '$condition_5',
             condition_5_des = '$condition_5_des',
             condition_6 = '$condition_6',
             condition_6_des = '$condition_6_des',
             condition_7 = '$condition_7',
             condition_7_des = '$condition_7_des',
             condition_8 = '$condition_8',
             condition_8_des = '$condition_8_des',
             condition_9 = '$condition_9',
             condition_9_des = '$condition_9_des',
             condition_10 = '$condition_10',
             condition_10_des = '$condition_10_des',
             condition_11 = '$condition_11',
             condition_11_des = '$condition_11_des',
             condition_12 = '$condition_12',
             condition_12_des = '$condition_12_des'
            ";

            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:../emp_profile.php?error=sqlerror");
                exit();
            }
                else{


                    mysqli_stmt_bind_param($stmt,"ssssssssssssssssssssssssi",$condition_1, $condition_1_des, $condition_2,$condition_2_des,$condition_3,$condition_3_des,$condition_4,$condition_4_des,$condition_5,$condition_5_des,$condition_6,$condition_6_des,$condition_7,$condition_7_des,$condition_8,$condition_8_des,$condition_9,$condition_9_des,$condition_10,$condition_10_des,$condition_11,$condition_11_des,$condition_12,$condition_12_des,$emp_id);
                    mysqli_stmt_execute($stmt);
                }


    //references

    $ref_full_name_arr=$_POST['ref_full_name'];
    $ref_add_arr=$_POST['ref_add'];
    $ref_tel_arr=$_POST['ref_tel'];
    $emp_gov_id=$_POST['emp_gov_id'];
    $emp_passport_no=$_POST['emp_passport_no'];
    $emp_place_of_insurance=$_POST['emp_place_of_insurance'];
   
    
    $ref_full_name = implode(',',$ref_full_name_arr);
    $ref_add = implode(',',$ref_add_arr);
    $ref_tel = implode(',',$ref_tel_arr);
    



            $sql="INSERT INTO emp_references (ref_full_name,ref_add,ref_tel,emp_gov_id,emp_passport_no,emp_place_of_insurance,emp_id) VALUE (?,?,?,?,?,?,?)
             ON DUPLICATE KEY UPDATE
                emp_gov_id = '$emp_gov_id',
                emp_passport_no = '$emp_passport_no',
                emp_place_of_insurance = '$emp_place_of_insurance',
                ref_full_name = '$ref_full_name',
                ref_add = '$ref_add',
                ref_tel = '$ref_tel'
            ";

            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:../emp_profile.php?error=sqlerror");
                exit();
            }
                else{


                    mysqli_stmt_bind_param($stmt,"sssiisi",$ref_full_name, $ref_add, $ref_tel,$emp_gov_id,$emp_passport_no,$emp_place_of_insurance,$emp_id);
                    mysqli_stmt_execute($stmt);
                }

            header("Location:../emp_profile.php?submit=success&emp_id=$emp_id");
            exit();

            mysqli_stmt_close($stmt);
            mysqli_close($conn);
           
        }else
    {
        header("Location:../emp_mang.php");
        exit();
    }
    
  
  ?>