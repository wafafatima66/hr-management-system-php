

<script>

// to edit training 
//to get data for the modal
                        $('.edit_training').click(function(){
                         
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



        <form method="post" action="sec_box-config/update.php"> 

          <div class="modal-body ">

              <div id="space"></div>
              <div id="sp"></div>

           <h6>TRAINEES/ATTENDESS</h6>
          
             <div class="form-inline edit_emp_id_wrapper" id="edit_emp_id_wrapper">
            
              </div>
          
              <a href="javascript:void(0);" class="edit_add_employee ml-3" title="Add field"><i class="fa fa-plus" ></i></a>


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
            <button type="submit" class="btn " name="submit">UPDATE</button>
        </div>

 </form>

        </div>
    </div>
    </div>





    <script type="text/javascript">
$(document).ready(function(){

 
  
var maxField = 5; //Input fields increment limitation
var addButton = $('.edit_add_employee'); //Add button selector
var wrapper = $('.edit_emp_id_wrapper'); //Input field wrapper
var fieldHTML = 
' <div class="form-group mx-sm-3 mb-2" style="width:100%;"> <label for="">Employee</label> <input type="text" class="form-control edit_emp_id"  placeholder="Employee Id" style="width:250px" name="emp_id[]" > <a href="javascript:void(0);" class="edit_remove_employee ml-3 "><i class="fa fa-minus"></i></a></div>'; 

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
$(wrapper).on('click', '.edit_remove_employee', function(e){
e.preventDefault();
$(this).parent('div').remove(); //Remove field html
x--; //Decrement field counter

$.ajax({
      url:'sec_box-config/delete_training.php',
      type : 'post',
      data: {
        emp_id : $(this).data("id") ,
        title_of_training : $('#edit_title_of_training').val()
      },
      
      success : function(result){

        
          $('#space').html(result);

         

      }
  });

});





});



 

</script>


 



<script>
/*

$('.edit_remove_employee').click(function(){
    
  $.ajax({
      url:'sec_box-config/delete_training.php',
      type : 'post',
      data: {
        emp_id : $(this).data("id") 
      },
      
      success : function(result){

        
          $('#space').html(result);

         

      }
  });
  
});


$.ajax({
      url:'sec_box-config/add_training.php',
      type : 'post',
      data: {
        emp_id :  $(this).val()
      },
      
      success : function(result){

        
          $('#sp').html(result);

         

      }
  });
*/


/*
$('.edit_emp_id').keyup(function(){
        $.ajax({
            url:'sec_box-config/add_training.php',
            type : 'post',
            data: {
              emp_id : $('.edit_emp_id').val(),


              title_of_training : $('#edit_title_of_training').val(),
              type_of_training : $('#edit_type_of_training').val(),
              from_date : $('#edit_from_date').val(),
              to_date : $('#edit_to_date').val(),
              no_of_hrs : $('#edit_no_of_hrs').val(),
              venue : $('#edit_venue').val(),
              province : $('#edit_province').val(),
              agency : $('#edit_agency').val(),
              speaker_last_name : $('#speaker_last_name').val(),
              speaker_first_name : $('#speaker_first_name').val(),
              speaker_middle_name : $('#speaker_middle_name').val(),
              speaker_ext : $('#speaker_ext').val(),
              title : $('#title').val(),
              sponsor : $('#sponsor').val()
              },
            success : function(result){
                $('#sp').html(result);
            }
        });
    });
*/
</script>