
<?php 
   

if(isset($_POST['submit'])){

  require '../includes/conn.php';


  $emp_id_arr=$_POST['emp_id'];
  

  foreach ($emp_id_arr as $emp_id)
{
   

    $title_of_training=$_POST['title_of_training'];
    $type_of_training=$_POST['type_of_training'];
    $from_date=$_POST['from_date'];
    $to_date=$_POST['to_date'];
    $no_of_hrs=$_POST['no_of_hrs'];
    $venue=$_POST['venue'];
    $province=$_POST['province'];
    $city=$_POST['city'];
    $barangay=$_POST['barangay'];
    $agency=$_POST['agency'];
    $title=$_POST['title'];


    $count = count(($_POST['speaker_last_name']));

    for ($i = 0 ; $i < $count  ; $i++){

    $speaker_last_name_arr=$_POST['speaker_last_name'][$i];
    $speaker_first_name_arr=$_POST['speaker_first_name'][$i];
    $speaker_middle_name_arr=$_POST['speaker_middle_name'][$i];
    $speaker_ext_arr=$_POST['speaker_ext'][$i];

    $speaker_name_arr[$i]= $speaker_first_name_arr . ' ' . $speaker_middle_name_arr . ' '. $speaker_last_name_arr . ' ' .$speaker_ext_arr;

    }

  

   // $sponsor=$_POST['sponsor'];


    //$speaker_name_arr=$_POST['speaker_name'];
    $speaker_name= implode(',',$speaker_name_arr);

    $sponsor_arr=$_POST['sponsor'];
    $sponsor= implode(',',$sponsor_arr);
 

    
            $sql="INSERT INTO training (emp_id, title_of_training, type_of_training,from_date,to_date,no_of_hrs,venue,province,city,barangay,speaker_name,agency,title,sponsor) VALUE (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location:training.php?submit=error");
                exit();
            }
                else{
                
                    mysqli_stmt_bind_param($stmt,"issssissssssss", $emp_id, $title_of_training , $type_of_training, $from_date,$to_date, $no_of_hrs, $venue, $province, $city, $barangay, $speaker_name,  $agency, $title, $sponsor);

                    mysqli_stmt_execute($stmt);
                }
              }
                   header("Location:training.php?submit=success");
                            exit();

                         
                
   mysqli_stmt_close($stmt);
  mysqli_close($conn);
                
       
              
      
      }
    else
    {
        header("Location:training.php");
        exit();
    }
    
  
  ?>