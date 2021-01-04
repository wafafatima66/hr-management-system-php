

<script>

// to edit training 

                        $('.edit_training').click(function(){
                          
                         
                          //$('.modal-body .view_emp_id').val(emp_id);
                          $.ajax({
                              url:'sec_box-config/edit_training.php?',
                              type : 'post',
                              data: {
                                title_of_training : $(this).data("id") 
                              },
                              dataType: 'json',
                              success : function(result){

                                $('#edit_title_of_training').val(result.title_of_training);
                                  
                                $('#edit_type_of_training').val(result.type_of_training);
                                
                                $('#edit_from_date').val(result.from_date);
                                $('#edit_to_date').val(result.to_date);
                                $('#edit_no_of_hrs').val(result.no_of_hrs);
                                $('#edit_venue').val(result.venue);
                                $('#edit_province').val(result.province);
                                
                                $('#edit_agency').val(result.agency);
                                

                                $('#edit_add_speaker_wrapper').html(result.speakers);
                                $('#edit_add_sponsor_wrapper').html(result.sponsors);

                                $('#edit_emp_id_wrapper').html(result.ids);
                                  // $('#space').html(result);

                                 

                              }
                          });
                          
                        });
                    </script>

                

                
<!--modal to add training-->

<div class="modal fade training_modal" id="edit_training" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">ADD TRAINING</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>



        <form method="post" action="update.php"> 

          <div class="modal-body ">

              <div id="space"></div>

           <h6>TRAINEES/ATTENDESS</h6>
          
             <div class="form-inline add_emp_id_wrapper" id="edit_emp_id_wrapper"> </div>
          


<h6 class="pt-2">TRAINING INFORMATION</h6>

<div class="form-inline">

    <div class="form-group mx-sm-3 mb-2">
        <label  style="width:100px">Title of training</label>
      <input type="text" class="form-control" style="width:300px;" name="title_of_training" id="edit_title_of_training" >
    </div>


    <div class="form-group mx-sm-3 mb-2">
        <label >Type</label>
      <select class="form-control" style="width:180px" name="type_of_training" id="edit_type_of_training">
        <option value ="">SELECT</option>
        <option value ="technical">Technical</option>
        <option value ="managerial">Managerial</option>
        <option value ="supervisory">Supervisory</option>
    </select>
    </div>


    <div class="form-group mx-sm-3 mb-2">
    <label style="width:100px">Inclusive Dates</label>
      <input type="date" class="form-control" name="from_date" id="edit_from_date" >
    </div>

    <div class="form-group mx-sm-3 mb-2">
      <input type="date" class="form-control" name="to_date" id="edit_to_date" >
    </div>


    <div class="form-group mx-sm-3 mb-2">
    <label style="width:100px">No. of Hours</label>
      <input type="text" class="form-control"  style="width:80px" name="no_of_hrs" id="edit_no_of_hrs" >
    </div>

    <div class="form-group mx-sm-3 mb-2">
    <label style="width:100px">Venue</label>
      <input type="text" class="form-control" style="width:450px" name="venue" id="edit_venue" >
    </div>
   
    <div class="form-group mx-sm-3 mb-2">
        <label style="width:100px">Address</label>
      <input class="form-control" style="width:450px" name="province" id="edit_province" > 
    </div>

  

   
   
   <div class="add_speaker_wrapper mt-3 mb-3 " id="edit_add_speaker_wrapper">
   </div>

       
 

   

    <div class="form-group mx-sm-3 mb-2">
    <label style="width:100px">Agency</label>
      <input type="text" class="form-control"  style="width:300px" name="agency" id="edit_agency" >
    </div>

    
    

    <div class="add_sponsor_wrapper form-inline" id="edit_add_sponsor_wrapper"></div>
   
  
</div>

</div>


        <div class="modal-footer">
            <button type="submit" class="btn " name="submit">Submit</button>
        </div>

 </form>

        </div>
    </div>
    </div>






