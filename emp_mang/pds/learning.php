   <!--body section of learning and development-->
   <div class="container">

   <div class=" emp_profile_section2 pt-4 mb-5 pb-2 form-inline" id="content-7" style="background-color:#E6F7FF">  
           
                  <div class="container learning_wrapper">

                  <?php 
                             
                             $query = "SELECT * FROM emp_learning WHERE emp_id = '$emp_id'";
                           
                             $runquery = $conn -> query($query);
                             $rowcount=mysqli_num_rows($runquery);

                             if($rowcount != 0 ){

                                

                             for($i= 0; $i <=  $rowcount ; $i++ )
                             {
                                    
                                    while($data = $runquery -> fetch_assoc()){

                                        
                                        $title_of_training[$i] = $data["title_of_training"];
                                        $type_of_position[$i] = $data["type_of_position"];
                                        $no_of_hrs[$i] = $data["no_of_hrs"];
                                        $learn_from_date[$i] = $data["learn_from_date"];
                                        $learn_to_date[$i] = $data["learn_to_date"];
                                        $conducted_by[$i] = $data["conducted_by"];
                                
                           
                           ?>


                                    <div class="form-inline">

                                    <div class="form-group mx-sm-2 mb-2">
                                        <div class="d-flex flex-column">
                                            <label for="">TITLE OF TRAINING PROGRAMS ATTENDED</label>
                                            <input type="text" class="form-control"  value="<?php echo $title_of_training[$i]?>" style="width:300px;" name="title_of_training[$i]">
                                        </div>
                                    </div>

                                    <div class="form-group mx-sm-1 mb-2">
                                        <div class="d-flex flex-column">
                                            <label for="">TYPE OF PROGRAM</label>
                                            <select class="form-control" style="width:150px;" name="type_of_position[]">
                                                <option value = "<?php echo $type_of_position[$i]?>"><?php echo $type_of_position[$i]?></option>
                                                <option value="Technical">Technical</option>
                                                <option value="Managerial">Managerial</option>
                                                <option value="Supervisory">Supervisory</option>
                                                <option value="Clerical">Clerical</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group mx-sm-1 mb-2">
                                        <div class="d-flex flex-column">
                                            <label for="">NO. OF HOURS</label>
                                            <input type="text" class="form-control"  value="<?php echo $no_of_hrs[$i]?>" style="width:50px;" name="no_of_hrs[$i]">
                                        </div>
                                    </div>


                                    <div class="form-group mx-sm-1 mb-2">
                                        <div class="d-flex flex-column">
                                            <label for="">INCLUSIVE DATES</label>
                                                <div class="d-flex justify-content-center">

                                                <input type="date" class="form-control mx-sm-1 mb-2"  style="width:140px;" value="<?php echo $learn_from_date[$i]?>" name="learn_from_date[$i]" >
                                                
                                                <input type="date" class="form-control mx-sm-1 mb-2"  style="width:140px;" value="<?php echo $learn_to_date[$i]?>" name="learn_to_date[$i]" >
                                                
                                            </div>
                                        </div>
                                    </div>



                                    <div class="container text-center">
                                    <div class="d-flex justify-content-center">
                                        <div class="form-group mx-sm-3 mb-2">
                                            <label for="">CONDUCTED/SPONSORED BY</label>
                                            <input type="text" class="form-control" id="" value="<?php echo $conducted_by[$i]?>" style="width:300px;" name="conducted_by[$i]">    
                                        </div>
                                    </div>
                                    </div>




                                    </div>

<?php  } } ?>

<a href="javascript:void(0);" class="add_learn_button" title="Add field"  ><i class="fa fa-plus"></i></a>
      
  <?php  } else { ?>

                <div class="form-inline">

                <div class="form-group mx-sm-2 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">TITLE OF TRAINING PROGRAMS ATTENDED</label>
                        <input type="text" class="form-control"  style="width:300px;" name="title_of_training[]">
                    </div>
                </div>
                
                <div class="form-group mx-sm-1 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">TYPE OF PROGRAM</label>
                        <select class="form-control" style="width:150px;" name="type_of_position[]">
                            <option value = "">SELECT</option>
                            <option value="Technical">Technical</option>
                            <option value="Managerial">Managerial</option>
                            <option value="Supervisory">Supervisory</option>
                            <option value="Clerical">Clerical</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mx-sm-1 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">NO. OF HOURS</label>
                        <input type="text" class="form-control" style="width:50px;" name="no_of_hrs[]">
                    </div>
                </div>

                
                <div class="form-group mx-sm-1 mb-2">
                    <div class="d-flex flex-column">
                        <label for="">INCLUSIVE DATES</label>
                            <div class="d-flex justify-content-center">

                            <input type="date" class="form-control mx-sm-1 mb-2"  style="width:140px;"  name="learn_from_date[]" >
                            
                            <input type="date" class="form-control mx-sm-1 mb-2"  style="width:140px;"  name="learn_to_date[]" >
                            
                        </div>
                    </div>
                </div>

                
            
          <div class="container text-center">
          <div class="d-flex justify-content-center">
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">CONDUCTED/SPONSORED BY</label>
                        <input type="text" class="form-control"  style="width:300px;" name="conducted_by[]">    
                    </div>
            </div>
          </div>

          

           
        </div>

        <a href="javascript:void(0);" class="add_learn_button" title="Add field"><i class="fa fa-plus"></i></a>

<?php

}

?>

        </div>


        <div class="container">
             <div class="text-right">
                        <button class="btn m-2" style="background: #345587;color:#fff;" type="button" onclick="openpanel('content-6','vol')" >PREV</button>
                        <button  type ="button" class="btn m-2" style="background: #345587; color:#fff" onclick="openpanel('content-8','spe')" >NEXT</button>
                </div>
             </div>

        </div>

        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
var maxField = 10; //Input fields increment limitation
var addButton = $('.add_learn_button'); //Add button selector
var wrapper = $('.learning_wrapper'); //Input field wrapper
var fieldHTML = 
' <div><div class="form-inline"> <div class="form-group mx-sm-2 mb-2"> <div class="d-flex flex-column"> <label for="">TITLE OF TRAINING PROGRAMS ATTENDED</label> <input type="text" class="form-control"   style="width:300px;" name="title_of_training[]"> </div> </div> <div class="form-group mx-sm-1 mb-2"> <div class="d-flex flex-column"> <label for="">TYPE OF PROGRAM</label>  <select class="form-control" style="width:150px;" name="type_of_position[]">  <option value="Technical">Technical</option> <option value="Managerial">Managerial</option> <option value="Supervisory">Supervisory</option> <option value="Clerical">Clerical</option> </select> </div> </div> <div class="form-group mx-sm-1 mb-2"> <div class="d-flex flex-column"> <label for="">NO. OF HOURS</label> <input type="text" class="form-control"   style="width:50px;" name="no_of_hrs[]"> </div> </div> <div class="form-group mx-sm-1 mb-2"> <div class="d-flex flex-column"> <label for="">INCLUSIVE DATES</label> <div class="d-flex justify-content-center"> <input type="date" class="form-control mx-sm-1 mb-2"  style="width:140px;"  name="learn_from_date[]" > <input type="date" class="form-control mx-sm-1 mb-2"  style="width:140px;"  name="learn_to_date[]" > </div> </div> </div> <div class="container text-center"> <div class="d-flex justify-content-center"> <div class="form-group mx-sm-3 mb-2"> <label for="">CONDUCTED/SPONSORED BY</label> <input type="text" class="form-control" id=""  style="width:300px;" name="conducted_by[]"> </div> </div> </div> </div><a href="javascript:void(0);" class="remove_learn_button"><i class="fa fa-minus"></i></a></div>'; 

//New input field html 
var x = 1; //Initial field counter is 1

//Once add button is clicked
$(addButton).click(function(){
    //Check maximum number of input fields
    if(x < maxField){ 
        x++; //Increment field counter
        $(wrapper).append(fieldHTML); //Add field html
    }
});

//Once remove button is clicked
$(wrapper).on('click', '.remove_learn_button', function(e){
    e.preventDefault();
    $(this).parent('div').remove(); //Remove field html
    x--; //Decrement field counter
});
});
</script>