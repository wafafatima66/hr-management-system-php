<?php include '../includes/link.php'; ?>
<?php include '../includes/header.php'; ?>

<div class="container pt-5  training_section_1">
    <form class="form-inline">
          <button type="button" class="btn mb-2" data-toggle="modal" data-target="#addtraining" ><i class="fas fa-plus pr-2"></i>Add Training</button> 
           
            <div class="ml-auto">
            <div class="form-group mx-sm-3 mb-2">
              <input type="text" class="form-control" id="" placeholder="Search Employee or Name of Training" style="width:250px">
              <button type="submit" class="btn btn-search mx-sm-3 ">SEARCH</button> 
            </div>
            </div>
            
            
        </form>

        <table class="table table-bordered table-sm" >
                        <thead class="table-head">
                            <tr>
                            <th scope="col">Department/Unit</th>
                            <th scope="col">Participant</th>
                            <th scope="col">Sex</th>
                            <th scope="col">Title of Training</th>
                            <th scope="col">Date</th>
                            <th scope="col">Venue</th>
                            <th scope="col">Sponsoring Agency</th>
                            </tr>
                        </thead>
                        <tbody >
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
</div>

<div class="training_section_2 pt-5">
        
               <div class="container">
                   <div class="row">
                         <div class="col-lg-9 training_section_2_header ">
                            <h4>SUMMARY OF TRAINING</h4>
                        </div>

                        <div class="col-lg-2 d-flex align-items-center">
                            <form  class="form-inline">
                                <div class="form-group mx-sm-1">
                                    <div class="d-flex justify-content-center">
                                        <input type="text" class="form-control" id="" placeholder="" style="width:80px">
                                        <button class="btn mx-sm-1" style="background:#345587;"></button>
                                        <input type="text" class="form-control" id="" placeholder="" style="width:80px">
                                        <button class="btn mx-sm-1" style="background:#345587;"></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        
                   </div>
               </div>

               <div class="training_section_2_body">
                    <div class="container">
                    <table class="table table-bordered table-sm" >
                        <thead class="table-head">
                            <tr>
                            <th scope="col">Name of Training</th>
                            <th scope="col">No. of Participants</th>
                            <th scope="col">No. of Hours</th>
                            <th scope="col">Venue</th>
                            <th scope="col">Sponsors/Office In-Charge</th>
                            </tr>
                        </thead>
                        <tbody >
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
               </div>
        

        
</div>


<!--button to add training-->
            <!-- Modal -->
    <div class="modal fade addtraining" id="addtraining" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">ADD TRAINING</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                <div class="modal-body">
                   <div class="pt-3">

                   <h6>TRAINEES/ATTENDESS</h6>
                    <form class="form-inline">   
                        <div class="form-group mx-sm-2 mb-2">
                            <label for="">Employee ID</label>
                        <input type="text" class="form-control" id="" placeholder="First Name">
                        </div>
                    </form>


                    <h6>TRAINING INFORMATION</h6>
        <form class="form-inline">
      
            <div class="form-group mx-sm-2 mb-2">
                <label for="">Title of training</label>
              <input type="text" class="form-control" id="" placeholder="" style="width:300px;">
            </div>


            <div class="form-group mx-sm-3 mb-2">
                        <label for="">Type</label>
              <select class="form-control" style="width:200px">
                <option selected>Status</option>
                <option>...</option>
            </select>
            </div>


            <div class="form-group mx-sm-2 mb-2">
            <label for="">Inclusive Dates</label>
              <input type="text" class="form-control" id="" placeholder="">
              <input type="text" class="form-control" id="" placeholder="">
            </div>


            <div class="form-group mx-sm-2 mb-2">
            <label for="">No. of Hours</label>
              <input type="text" class="form-control" id="" placeholder="" style="width:80px">
            </div>

            <div class="form-group mx-sm-2 mb-2">
            <label for="">Venue</label>
              <input type="text" class="form-control" id="" placeholder="Ext" style="width:450px">
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
            <label for="">Agency</label>
              <input type="text" class="form-control" id="" placeholder="" style="width:300px">
            </div>

            <div class="form-group mx-sm-2 mb-2">
            <label for="">Title</label>
              <input type="text" class="form-control" id="" placeholder="" style="width:250px">
            </div>

            <div class="form-group mx-sm-2 mb-2">
            <label for="">Sponsor Agency/ies</label>
              <input type="text" class="form-control" id="" placeholder="" style="width:350px">
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