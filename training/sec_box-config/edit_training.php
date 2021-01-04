




<?php



//to get the information

if(isset($_POST['title_of_training'])){
    

  require '../../includes/conn.php';


  $title_of_training =   $_POST['title_of_training'];

  
 
  $query = "SELECT * FROM training WHERE  title_of_training = '$title_of_training' " ;
       
  $runquery = $conn -> query($query);
  if($runquery == true){
   
  $rowcount=mysqli_num_rows($runquery);
  
  $ids = "";

  while($mydata = $runquery -> fetch_assoc()){


        $emp_id=$mydata['emp_id'];

       $ids .= ' <div class="form-group mx-sm-3 mb-2" style="width:100%;">
        <label for="">Employee</label>
        <input type="text" class="form-control edit_emp_id"  placeholder="Employee Id" style="width:250px" value="'. $emp_id .'" name="emp_id[]" > <a href="javascript:void(0);" data-id="'. $emp_id .'" class="edit_remove_employee ml-3 " ><i class="fa fa-minus"></i></a></div>';
     
  
      // $ids = "hi";


  


    $title_of_training=$mydata["title_of_training"];
    $type_of_training=$mydata["type_of_training"];
    $from_date=$mydata['from_date'];
    $to_date=$mydata['to_date'];
    $no_of_hrs=$mydata['no_of_hrs'];
    $venue=$mydata['venue'];
    $province=$mydata['province'];
    $agency=$mydata['agency'];
  

    $sponsor=$mydata['sponsor'];
    $sponsor_arr = explode(",",$sponsor);

    $speaker_name=$mydata['speaker_name'];
    $speaker_name_arr = explode(",",$speaker_name);

  

  

   
  $speakers = "";

    for ($i= 0 ;$i< count($speaker_name_arr) ; $i++){

      $speaker_name_per = $speaker_name_arr [$i];

      $speaker_name_per_arr = explode(" ",$speaker_name_per);
      

      $speakers .='<div class="form-inline">
      
      <div class="form-group mx-sm-3 mb-2">
        <label style="width:100px">Speaker/s</label>
          <input type="text" class="form-control"  placeholder="LastName" style="width:140px" name="speaker_last_name[]" value="'.$speaker_name_per_arr [2].'" readonly >
        </div>

        <div class="form-group mx-sm-1 mb-2">
          <input type="text" class="form-control"  placeholder="FirstName" style="width:140px" name="speaker_first_name[]" value="'.$speaker_name_per_arr [0].'" readonly >
        </div>

        <div class="form-group mx-sm-1 mb-2">
          <input type="text" class="form-control" placeholder="MiddleName" style="width:140px" name="speaker_middle_name[]" value="'.$speaker_name_per_arr [1].'" readonly>
        </div>

        <div class="form-group mx-sm-1 mb-2">
          <input type="text" class="form-control" placeholder="Ext" style="width:100px" name="speaker_ext[]" value="'.$speaker_name_per_arr [3].'" readonly  >
        </div>

        <div class="form-group mx-sm-3 mb-2">
        <label style="width:100px">Title</label>
          <input type="text" class="form-control" style="width:250px" name="title[]" value="'.$speaker_name_per_arr [4].'"  readonly >
        </div>
      
      </div>';

      
    
    }

    $sponsors = "";

    for ($i= 0 ;$i< count($sponsor_arr) ; $i++){

    $sponsors .= ' <div class="form-group mx-sm-3 mb-2">
    <label >Sponsor Agency/ies</label>
      <input type="text" class="form-control" style="width:350px" value="'.$sponsor_arr [$i].'" name="sponsor[]" readonly>
    </div>';

    }

   
}}


 
   
  
 


echo json_encode(array('ids'=>$ids,'title_of_training'=>$title_of_training,'type_of_training'=>$type_of_training,'from_date'=>$from_date,'to_date'=>$to_date,'no_of_hrs'=>$no_of_hrs,'venue'=>$venue,'province'=>$province,'agency'=>$agency,'speakers'=>$speakers,'sponsors'=>$sponsors));
} 
  


?>

