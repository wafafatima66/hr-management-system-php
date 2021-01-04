<!-- the infrmatin flow comes from training_tr_script.php-->

<div class="modal fade training_modal" id="viewtraining" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">ADD TRAINING</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>



        <form method="post" action="training_update.php"> 



        <div class="modal-body ">



           <h6>TRAINEES/ATTENDESS</h6>

              <div id="what"></div>

              
             <div class="form-inline add_emp_id_wrapper">

                <div class="form-group mx-sm-3 mb-2" style="width:100%;">
                      <label for="">Employee</label>
                  <input type="text" class="form-control"  placeholder="Employee Id" style="width:250px" name="emp_id" id="emp_id" >

                
                  
                  </div>

             </div>
          


<h6 class="pt-2">TRAINING INFORMATION</h6>

<div class="form-inline">

    <div class="form-group mx-sm-3 mb-2">
        <label  style="width:100px">Title of training</label>
      <input type="text" class="form-control" style="width:300px;" name="title_of_training" id="title_of_training" readonly>
    </div>


    <div class="form-group mx-sm-3 mb-2">
        <label >Type</label>
      <select class="form-control" style="width:180px" name="type_of_training" id="type_of_training">
        <option value ="">SELECT</option>
        <option value ="technical">Technical</option>
        <option value ="managerial">Managerial</option>
        <option value ="supervisory">Supervisory</option>
    </select>
    </div>


    <div class="form-group mx-sm-3 mb-2">
    <label style="width:100px">Inclusive Dates</label>
      <input type="date" class="form-control" name="from_date" id="from_date" >
    </div>

    <div class="form-group mx-sm-3 mb-2">
      <input type="date" class="form-control" name="to_date" id="to_date" >
    </div>


    <div class="form-group mx-sm-3 mb-2">
    <label style="width:100px">No. of Hours</label>
      <input type="text" class="form-control"  style="width:80px" name="no_of_hrs" id="no_of_hrs">
    </div>

    <div class="form-group mx-sm-3 mb-2">
    <label style="width:100px">Venue</label>
      <input type="text" class="form-control" style="width:450px" name="venue" id="venue">
    </div>
   
    <div class="form-group mx-sm-3 mb-2">
        <label style="width:100px">Address</label>
      <input class="form-control" style="width:450px" name="province" id="province"> 
    </div>

   

   <div class="add_speaker_wrapper" id="add_speaker_wrapper">
   </div>

   

    <div class="form-group mx-sm-3 mb-2">
    <label style="width:100px">Agency</label>
      <input type="text" class="form-control"  style="width:300px" name="agency" id="agency">
    </div>

   

    <div class="add_sponsor_wrapper form-inline" id="add_sponsor_wrapper">

       
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


 