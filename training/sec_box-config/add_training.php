
<?php 
   
   //to add training

if(isset($_POST['emp_id'])){

  require '../../includes/conn.php';


  $emp_id=$_POST['emp_id'];
  



    $title_of_training=$_POST['title_of_training'];
    $type_of_training=$_POST['type_of_training'];
    $from_date=$_POST['from_date'];
    $to_date=$_POST['to_date'];
    $no_of_hrs=$_POST['no_of_hrs'];
    $venue=$_POST['venue'];
    $province=$_POST['province'];
    
    $agency=$_POST['agency'];
    //$title=$_POST['title'];


    $count = count(($_POST['speaker_last_name']));

    for ($i = 0 ; $i < $count  ; $i++){

    $speaker_last_name_arr=$_POST['speaker_last_name'][$i];
    $speaker_first_name_arr=$_POST['speaker_first_name'][$i];
    $speaker_middle_name_arr=$_POST['speaker_middle_name'][$i];
    $speaker_ext_arr=$_POST['speaker_ext'][$i];
    $title=$_POST['title'][$i];

    $speaker_name_arr[$i]= $speaker_first_name_arr . ' ' . $speaker_middle_name_arr . ' '. $speaker_last_name_arr . ' ' .$speaker_ext_arr. ' ' .$title;

    }

  
    $speaker_name= implode(',',$speaker_name_arr);

    $sponsor_arr=$_POST['sponsor'];
    $sponsor= implode(',',$sponsor_arr);
 

    
            $sql="INSERT INTO training (emp_id, title_of_training, type_of_training,from_date,to_date,no_of_hrs,venue,province,speaker_name,agency,sponsor) VALUE (?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:training.php?submit=error");
                exit();
            }
                else{
                
                    mysqli_stmt_bind_param($stmt,"issssisssss", $emp_id, $title_of_training , $type_of_training, $from_date,$to_date, $no_of_hrs, $venue, $province,  $speaker_name,  $agency, $sponsor);

                    mysqli_stmt_execute($stmt);
                }

                
                $sql="INSERT INTO emp_learning (title_of_training,type_of_position,no_of_hrs,learn_from_date,learn_to_date,conducted_by,emp_id) VALUE (?,?,?,?,?,?,?) ";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    header("Location:.training.php?submit=error");
                    exit();
                }
                    else{
    
    
                        mysqli_stmt_bind_param($stmt,"ssisssi",$title_of_training, $type_of_training, $no_of_hrs,$from_date,$to_date,$sponsor,$emp_id);
                        mysqli_stmt_execute($stmt);
                    }
              
                   header("Location:training.php?submit=success");
                            exit();

                         
                
   mysqli_stmt_close($stmt);
  mysqli_close($conn);
                
       
      echo "saved";        
      
      }
    else
    {
        echo "nt saved";
        header("Location:training.php");
        exit();
    }
    
  
  ?>