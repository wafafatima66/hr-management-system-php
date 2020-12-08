
<?php include '../includes/link.php'; ?>
<?php include '../includes/header.php'; ?>
<?php include 'script.php'; ?>

        <div class="container pt-5">
        <form class="form-inline">

            <button type="button" class="btn mb-2" data-toggle="modal" data-target="#addevent" ><i class="fas fa-plus pr-2"></i>Add Event</button> 
            
            </form>
        </div>

        <div class="calendar_section1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                            <div class="d-flex flex-column">
                                <div class="text-center">
                                    <h4>OCT</h4>
                                    <h3>7</h3>
                                    <h3>7</h3>
                                    <h3>15-16</h3>
                                </div>
                            </div>
                    </div>

                    <div class="col-lg-7">
                    <div class="d-flex flex-column">
                                <div class="text-center">
                                    <h4>EVENT</h4>
                                    <p>Event One Title</p>
                                    <p>Event One Title</p>
                                    <p>Event One Title</p>
                                </div>
                            </div>
                    </div>

                    <div class="col-lg-3">
                    <div class="d-flex flex-column">
                                <div class="text-center">
                                    <h4>VENUE</h4>
                                    <p>Event One Title</p>
                                    <p>Event One Title</p>
                                    <p>Event One Title</p>
                                </div>
                            </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="calendar_section2">
            <div class="calendar_section2_header ">
                <h4>OCTOBER 2020</h4>
            </div>

            <div class="calendar_section2_body">
                
  <div class="container">
   <div id="calendar"></div>
  </div>
            </div>
        </div>



        
 <!--button to add event-->
            <!-- Modal -->

           
        <div class="modal fade addevent" id="addevent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
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
                    <form class="form-inline">
                    
            <div class="form-group mx-sm-2 mb-2">
                <label for="">Title of Event</label>
              <input type="text" class="form-control" id="" placeholder="" style="width:500px">
            </div>

            <div class="form-group mx-sm-2 mb-2">
                <label for="">Inclusive dates</label>
              <input type="text" class="form-control" id="" placeholder="16/05/20">
            </div>
            <div class="form-group mx-sm-2 mb-2">
              <input type="text" class="form-control" id="" placeholder="16/05/20">
            </div>

            <div class="form-group mx-sm-2 mb-2">
                <label for="">Venue</label>
              <input type="text" class="form-control" id="" placeholder="" style="width:200px">
            </div>

            <div class="form-group mx-sm-3 mb-2">
                <label for="">Address</label>
              <select class="form-control" style="width:200px">
                <option selected>Province</option>
                <option>...</option>
            </select>
            </div>

            <div class="form-group mx-sm-3 mb-2">
              <select class="form-control" style="width:200px">
                <option selected>City/Municility</option>
                <option>...</option>
            </select>
            </div>

            <div class="form-group mx-sm-3 mb-2">
              <select class="form-control" style="width:200px">
                <option selected>Barangay</option>
                <option>...</option>
            </select>
            </div>

            <div class="form-group mx-sm-2 mb-2">
            <label for="">Speaker/s</label>
              <input type="text" class="form-control" id="" placeholder="LastName" style="width:100px">
            </div>

            <div class="form-group mx-sm-2 mb-2">
              <input type="text" class="form-control" id="" placeholder="FirstName" style="width:100px">
            </div>

            <div class="form-group mx-sm-2 mb-2">
              <input type="text" class="form-control" id="" placeholder="MiddleName" style="width:100px">
            </div>

            <div class="form-group mx-sm-2 mb-2">
              <input type="text" class="form-control" id="" placeholder="Ext" style="width:60px">
            </div>
           
            <div class="form-group mx-sm-2 mb-2">
                <label for="">Title of Event</label>
              <input type="text" class="form-control" id="" placeholder="" style="width:200px">
            </div>
          
            </form>
                </div>
  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn ">Submit</button>
                </div>
                </div>
            </div>
        </div>
    
     