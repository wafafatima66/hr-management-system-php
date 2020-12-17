

<div class="modal fade training_modal" id="addtraining" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">ADD TRAINING</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>


       

              <?php
              /*

              if(empty('#viewspace')){
                $emp_id = "" ; 

              }
*/
              ?>

        <form method="post" action="training-config.php"> 



        <div class="modal-body ">



           <h6>TRAINEES/ATTENDESS</h6>

<div id="space"></div>

   
           
             <div class="form-inline add_emp_id_wrapper">

                <div class="form-group mx-sm-3 mb-2" style="width:100%;">
                      <label for="">Employee ID</label>
                  <input type="text" class="form-control"  placeholder="Employee Id" style="width:250px" name="emp_id[]"  >

                  <a href="javascript:void(0);" class="add_emp_id ml-3" title="Add field"><i class="fa fa-plus"></i></a>

                  <div id="space"></div>
                  
                  </div>

             </div>
          


<h6 class="pt-2">TRAINING INFORMATION</h6>

<div class="form-inline">

    <div class="form-group mx-sm-3 mb-2">
        <label  style="width:100px">Title of training</label>
      <input type="text" class="form-control" style="width:300px;" name="title_of_training" >
    </div>


    <div class="form-group mx-sm-3 mb-2">
        <label >Type</label>
      <select class="form-control" style="width:180px" name="type_of_training" >
        <option value ="">SELECT</option>
        <option value ="technical">Technical</option>
        <option value ="managerial">Managerial</option>
        <option value ="supervisory">Supervisory</option>
    </select>
    </div>


    <div class="form-group mx-sm-3 mb-2">
    <label style="width:100px">Inclusive Dates</label>
      <input type="date" class="form-control" name="from_date"  >
    </div>

    <div class="form-group mx-sm-3 mb-2">
      <input type="date" class="form-control" name="to_date"  >
    </div>


    <div class="form-group mx-sm-3 mb-2">
    <label style="width:100px">No. of Hours</label>
      <input type="text" class="form-control"  style="width:80px" name="no_of_hrs" >
    </div>

    <div class="form-group mx-sm-3 mb-2">
    <label style="width:100px">Venue</label>
      <input type="text" class="form-control" style="width:450px" name="venue" >
    </div>
   
    <div class="form-group mx-sm-3 mb-2">
        <label style="width:100px">Address</label>
      <input class="form-control" style="width:160px" name="province" > 
    </div>

    <div class="form-group mx-sm-3 mb-2">
      <input class="form-control" style="width:160px" name="city" >
       
    </div>

    <div class="form-group mx-sm-3 mb-2">
      <input class="form-control" style="width:160px" name="barangay" >
      
    </div>

   <div class="add_speaker_wrapper">
   
      <div class="form-inline">
      
      <div class="form-group mx-sm-3 mb-2">
        <label style="width:100px">Speaker/s</label>
          <input type="text" class="form-control"  placeholder="LastName" style="width:140px" name="speaker_last_name[]">
        </div>

        <div class="form-group mx-sm-1 mb-2">
          <input type="text" class="form-control"  placeholder="FirstName" style="width:140px" name="speaker_first_name[]">
        </div>

        <div class="form-group mx-sm-1 mb-2">
          <input type="text" class="form-control" placeholder="MiddleName" style="width:140px" name="speaker_middle_name[]">
        </div>

        <div class="form-group mx-sm-1 mb-2">
          <input type="text" class="form-control" placeholder="Ext" style="width:100px" name="speaker_ext[]">
        </div>


        <a href="javascript:void(0);" class="add_speaker" title="Add field"><i class="fa fa-plus"></i></a>
      
      </div>

       
   
   </div>

   

    <div class="form-group mx-sm-3 mb-2">
    <label style="width:100px">Agency</label>
      <input type="text" class="form-control"  style="width:300px" name="agency" >
    </div>

    <div class="form-group mx-sm-3 mb-2">
    <label >Title</label>
      <input type="text" class="form-control" style="width:250px" name="title" >
    </div>

    <div class="add_sponsor_wrapper form-inline">

        <div class="form-group mx-sm-3 mb-2">
        <label >Sponsor Agency/ies</label>
          <input type="text" class="form-control" style="width:350px" name="sponsor[]">
        </div>

        <a href="javascript:void(0);" class="add_sponsor" title="Add field"><i class="fa fa-plus"></i></a>
    </div>
  
</div>

</div>


        <div class="modal-footer">
            <button type="submit" class="btn " name="submit">Submit</button>
        </div>

 </form>

        </div>
    </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
var maxField = 5; //Input fields increment limitation
var addButton = $('.add_emp_id'); //Add button selector
var wrapper = $('.add_emp_id_wrapper'); //Input field wrapper
var fieldHTML = 
'<div class="form-group mx-sm-3 mb-2" style="width:100%;"> <label for="">Employee ID</label> <input type="text" class="form-control"  placeholder="Employee Id" style="width:250px" name="emp_id[]" id="emp_id"><a href="javascript:void(0);" class="remove_emp_id ml-3"><i class="fa fa-minus"></i></a> </div>'; 

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
$(wrapper).on('click', '.remove_emp_id', function(e){
e.preventDefault();
$(this).parent('div').remove(); //Remove field html
x--; //Decrement field counter
});
});
</script>



<script type="text/javascript">
$(document).ready(function(){
var maxField = 5; //Input fields increment limitation
var addButton = $('.add_speaker'); //Add button selector
var wrapper = $('.add_speaker_wrapper'); //Input field wrapper
var fieldHTML = 
' <div class="form-inline"><div class="form-group mx-sm-3 mb-2"> <label style="width:100px">Speaker/s</label> <input type="text" class="form-control"  placeholder="LastName" style="width:140px" name="speaker_last_name[]"> </div> <div class="form-group mx-sm-1 mb-2"> <input type="text" class="form-control"  placeholder="FirstName" style="width:140px" name="speaker_first_name[]"> </div> <div class="form-group mx-sm-1 mb-2"> <input type="text" class="form-control" placeholder="MiddleName" style="width:140px" name="speaker_middle_name[]"> </div> <div class="form-group mx-sm-1 mb-2"> <input type="text" class="form-control" placeholder="Ext" style="width:100px" name="speaker_ext[]"> </div><a href="javascript:void(0);" class="remove_speaker "><i class="fa fa-minus"></i></a></div> '; 

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
$(wrapper).on('click', '.remove_speaker', function(e){
e.preventDefault();
$(this).parent('div').remove(); //Remove field html
x--; //Decrement field counter
});
});
</script>



<script type="text/javascript">
$(document).ready(function(){
var maxField = 5; //Input fields increment limitation
var addButton = $('.add_sponsor'); //Add button selector
var wrapper = $('.add_sponsor_wrapper'); //Input field wrapper
var fieldHTML = 
' <div class="form-group mx-sm-3 mb-2"> <label >Sponsor Agency/ies</label> <input type="text" class="form-control" style="width:350px" name="sponsor[]"> <a href="javascript:void(0);" class="remove_sponsor ml-3 "><i class="fa fa-minus"></i></a></div> '; 

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
$(wrapper).on('click', '.remove_sponsor', function(e){
e.preventDefault();
$(this).parent('div').remove(); //Remove field html
x--; //Decrement field counter
});
});
</script>




