
<?php include '../includes/link.php'; ?>
<?php include '../includes/header.php'; ?>

  
<?php include 'add_emp_modal.php'; ?>

<?php 
	if(isset($_GET['error'])){
		if($_GET['error']=="emptyfields"){
			echo'<p class="alert alert-danger h6">Fill in all fields</p>';
		}
		else if($_GET['error']=="invalidmail&user"){
			echo'<p class="alert alert-danger h6">Invalid Email</p>';
		}
	
		else if($_GET['error']=="sqlerror"){
			echo'<p class="alert alert-danger h6">Error in Creating account</p>';
		}
		else if($_GET['error']=="emailtaken"){
			echo'<p class="alert alert-danger h6">Email Taken</p>';
		}
	
	}	
?>


<div class="container pt-5 ">
<form class="form-inline">
          <button type="button" class="btn mb-2 " data-toggle="modal" data-target="#addemployee"  data-backdrop="static" data-keyboard="false" ><i class="fas fa-plus pr-2"></i>Add Employee</button> 
          
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

      
    </div>

    
    </div>  <!-- /#page-content-wrapper -->
  </div> <!-- /#wrapper -->