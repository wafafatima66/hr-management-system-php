<?php include 'link.php'; ?>
<?php include 'header.php'; ?>


<div class="container pt-5 ">
<form class="form-inline">
          <button type="button" class="btn mb-2" data-toggle="modal" data-target="#addemployee" ><i class="fas fa-plus pr-2"></i>Add Employee</button> 
            <div class="form-group mx-sm-3 mb-2">
              <input type="text" class="form-control" id="" placeholder="Employee ID">
            </div>
            <div class="form-group mx-sm-3 mb-2">
              <input type="text" class="form-control" id="" placeholder="Employee name">
            </div>
            <div class="form-group mx-sm-3 mb-2">
              <select class="form-control">
                <option selected>Status</option>
                <option>...</option>
            </select>
            </div>
            <button type="submit" class="btn btn-search mb-2 pr-5 pl-5">SEARCH</button> 
        </form>
  

      

        <!--Table-->
        <table class="table table-striped w-auto table-bordered mt-3">

          <!--Table head-->
          <thead class="table-head">
            <tr>
              <th>Name</th>
              <th>Employee ID</th>
              <th>Sex</th>
              <th>Department/Unit</th>
              <th>Contact No</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
            <tr class="table-strip clickable-row" data-href='emp_profile.php'>
              <th scope="row">Kate</th>
              <td>14-123</td>
              <td>female</td>
              <td>USA</td>
              <td>Web Designer</td>
              <td class="text-center"><i class="fas fa-edit"></i><i class="fas fa-trash-alt"></i></td> <td>36</td>
            </tr>
            <tr class="clickable-row" data-href='emp_profile.php'>
              <th scope="row">Anna</th>
              <td>Female</td>
              <td>office of the president</td>
              <td>01892929729</td>
              <td>Permanent</td>
              <td class="text-center"><i class="fas fa-edit"></i><i class="fas fa-trash-alt"></i></td> <td>36</td>
            </tr>
            
          </tbody>
          <!--Table body-->


        </table>
        <!--Table-->

        <!--button to add employye-->
            <!-- Modal -->
            <div class="modal fade addemployee" id="addemployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                    <div class="modal-content">
                     <div class="modal-header">
                        <h3 class="modal-title">Add Employee</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                <div class="modal-body">
                   <div class="pt-3">
                   <h6>Employee</h6>
                    <form class="form-inline">
                    
            <div class="form-group mx-sm-2 mb-2">
                <label for="">Name</label>
              <input type="text" class="form-control" id="" placeholder="First Name">
            </div>
            <div class="form-group mx-sm-2 mb-2">
              <input type="text" class="form-control" id="" placeholder="Last name">
            </div>
            <div class="form-group mx-sm-2 mb-2">
              <input type="text" class="form-control" id="" placeholder="Middle name">
            </div>
            <div class="form-group mx-sm-2 mb-2">
              <input type="text" class="form-control" id="" placeholder="Ext">
            </div>
           
          
        </form>
                   </div>

       <div class="pt-3">
       <h6>Employment Information</h6>
                    <form class="form-inline">
                    
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">Status</label>
              <select class="form-control">
                <option selected>Status</option>
                <option>...</option>
            </select>
            </div>
            <div class="form-group mx-sm-2 mb-2">
                <label for="">Inclusive dates</label>
              <input type="text" class="form-control" id="" placeholder="16/05/20">
            </div>
            <div class="form-group mx-sm-2 mb-2">
              <input type="text" class="form-control" id="" placeholder="16/05/20">
            </div>
           
           
          
        </form>
       </div>
  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-one" data-dismiss="modal">Update Profile</button>
                    <button type="button" class="btn btn-two">Submit</button>
                </div>
                </div>
            </div>
            </div>
    </div>