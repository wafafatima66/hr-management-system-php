        
 <!--button to add event-->
            <!-- Modal -->

           
            <div class="modal fade addevent eventmodal" id="addevent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">

                     <div class="modal-header">
                        <h3 class="modal-title">ADD EVENT</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                    </div>

                <div class="modal-body">
                   <div class="pt-3">
                   <h6>EVENT INFORMATION</h6>

<div id="space"></div>
                    <form class="form-inline" method="post" action="add_event.php">
                    
            <div class="form-group mx-sm-2 mb-2">
                <label for="">Title of Event</label>
              <input type="text" class="form-control"  style="width:500px" name="title" >
            </div>

            <div class="form-group mx-sm-2 mb-2">
                <label for="">Inclusive dates</label>
              <input type="datetime-local" class="form-control" name="start"  >
            </div>
            <div class="form-group mx-sm-2 mb-2">
              <input type="datetime-local" class="form-control" name="end" >
            </div>

            <div class="form-group mx-sm-2 mb-2">
                <label for="">Venue</label>
              <input type="text" class="form-control" style="width:500px" name="venue" >
            </div>

            <div class="form-group mx-sm-3 mb-2">
                <label for="">Address</label>
              <input class="form-control" style="width:200px" name="address" >
                
            </div>

            <div class="form-group mx-sm-3 mb-2">
              <input class="form-control" style="width:200px" placeholder="City/Municility" name="city" >
                
            </div>

            <div class="form-group mx-sm-3 mb-2">
              <input class="form-control" style="width:200px" placeholder="Barangay" name="barangay" >
                
            </div>

            <div class="form-group mx-sm-2 mb-2">
            <label for="">Speaker/s</label>
              <input type="text" class="form-control"  placeholder="LastName" style="width:100px" name="sp_last_name" >
            </div>

            <div class="form-group mx-sm-2 mb-2">
              <input type="text" class="form-control"  placeholder="FirstName" style="width:100px" name="sp_first_name" >
            </div>

            <div class="form-group mx-sm-2 mb-2">
              <input type="text" class="form-control"  placeholder="MiddleName" style="width:100px" name="sp_middle_name" >
            </div>

            <div class="form-group mx-sm-2 mb-2">
              <input type="text" class="form-control"  placeholder="Ext" style="width:60px" name="sp_ext" >
            </div>
           
          
      
                </div>
  
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn " name="submit">Submit</button>
                </div>
                </div>
            </div>

            </form>
        </div>
       