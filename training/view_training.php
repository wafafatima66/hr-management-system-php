



<?php



if(isset($_POST['emp_id'])){

  require '../includes/conn.php';

  $emp_id =   $_POST['emp_id'];
  $title_of_training =   $_POST['title_of_training'];
  //$title_of_training =   $_POST['title_of_training'];

  
  

  $query = "SELECT * FROM training WHERE  emp_id = '$emp_id' and title_of_training = '$title_of_training' " ;
       
  $runquery = $conn -> query($query);
  if($runquery == true){
   

   
  while($mydata = $runquery -> fetch_assoc()){

   
    $type_of_training=$mydata["type_of_training"];
    $from_date=$mydata['from_date'];
    $to_date=$mydata['to_date'];
    $no_of_hrs=$mydata['no_of_hrs'];
    $venue=$mydata['venue'];
    $province=$mydata['province'];
    $city=$mydata['city'];
    $barangay=$mydata['barangay'];
    $agency=$mydata['agency'];
    $title=$mydata['title'];

    $sponsor=$mydata['sponsor'];
    $sponsor_arr = explode(",",$sponsor);

    $speaker_name=$mydata['speaker_name'];
    $speaker_name_arr = explode(",",$speaker_name);

    

    //$spe = $speaker_name_arr[0];

    //$count=count($speaker_name_arr);

  //$i = 0 ;

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

      
      </div>';

      
    
    }

    $sponsors = "";

    for ($i= 0 ;$i< count($sponsor_arr) ; $i++){

    $sponsors .= ' <div class="form-group mx-sm-3 mb-2">
    <label >Sponsor Agency/ies</label>
      <input type="text" class="form-control" style="width:350px" value="'.$sponsor_arr [$i].'" readonly>
    </div>';

    }
  
  echo json_encode( array('emp_id'=>$emp_id,'title_of_training'=>$title_of_training,'type_of_training'=>$type_of_training,'from_date'=>$from_date,'to_date'=>$to_date,'no_of_hrs'=>$no_of_hrs,'venue'=>$venue,'province'=>$province,'city'=>$city,'barangay'=>$barangay,'agency'=>$agency,'title'=>$title,'speakers'=>$speakers,'sponsors'=>$sponsors));


}}
  
  }
  
    
  


?>