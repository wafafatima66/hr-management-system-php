<?php include '../includes/link.php'; ?>
<?php include '../includes/header.php'; ?>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $("#emp_id").keyup(function(){
        $.ajax({
            url:'leave_mang-config.php',
            type : 'post',
            data: {emp_id : $(this).val()},
            dataType: 'json',
            success : function(result){
                
                $('#emp_first_name').val(result.emp_first_name);
                $('#emp_middle_name').val(result.emp_middle_name);
                $('#emp_last_name').val(result.emp_last_name);
                $('#emp_ext').val(result.emp_ext);
                 $('#emp_status').val(result.emp_status);

            }
        });
    });

});

/*
$(document).ready(function(){
    $("#filter").click(function(){
        $.ajax({
            url:'leave_mang-date.php',
            type : 'post',
            data: {from_date : $(this).val()},
            dataType: 'json',
            success : function(result){

                $('#space ').html(result);

                $('#vac_rowcount').html(result.vac_rowcount);
                $('#sick_rowcount').html(result.sick_rowcount);
                $('#spl_rowcount').html(result.spl_rowcount);
               

            }
        });
    });
});
*/
/*
$(document).ready(function(){
   $(function(){
        $("#from_date").datepicker();
    });

*/

</script>



<?php

if(isset($_GET['leave'])){
    if($_GET['leave']=="error"){
        echo'<p class="alert alert-danger h6">LEAVE FORM NOT UPDATED ! TRY AGAIN</p>';
    }else  if($_GET['leave']=="success"){
        echo'<p class="alert alert-success h6">LEAVE FORM UPDATED</p>';
    }
}
?>

<div class="leave_mang_section">
    
        <div class="col-lg-9 leave_mang_header ">
            <h4>LEAVE FORM</h4>
        </div>
   
      


    <div class="leave_mang_section1_body leave_mang_section_body">
         <form class="form-inline" method="post" action="leave_mang-config.php">
                    
            <div class="form-group mx-sm-1 mb-2">
                <input type="text" class="form-control" placeholder="Type Employer ID" name="emp_id" id="emp_id">
                
                
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <label for="">NAME</label>
                <input type="text" class="form-control"  placeholder="Surname" style="width:100px;" id="emp_last_name">
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <input type="text" class="form-control"  placeholder="First" style="width:100px;" id="emp_first_name">
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <input type="text" class="form-control"  placeholder="Middle" style="width:80px;" id="emp_middle_name">
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <input type="text" class="form-control"  placeholder="ext" style="width:50px;" id="emp_ext">
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <label for="">POSITION</label>
                <input type="text" class="form-control"  placeholder="Auto" style="width:100px;" id="emp_status">
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <label for="">SALARY</label>
                <input type="text" class="form-control"  placeholder="" name="emp_salary" style="width:100px;">
            </div>

            <div class="form-group mx-sm-3 mb-2">
                <label for="">TYPE OF LEAVE</label>
              <select class="form-control" style="width:190px;" name="type_of_leave">
                <option value="0">Select</option>
                <option value="vacation leave">Vacation Leave</option>
                <option value="sick leave">Sick Leave</option>
                <option value="special priviledge leave">Special priviledge Leave</option>
                <option value="others">Others</option>
            </select>
            </div>

                <div class="form-group mx-sm-2 mb-2">
                        <label >INCLUSIVE DATES</label>
                        <div class="d-flex flex-column">
                            <label style="color:#C3CFD5;" >From </label>
                            <input type="date" class="form-control" name="leave_from_date" style="width:140px">
                        </div>   
                </div>

                <div class="form-group mx-sm-2 mb-2">
                        <div class="d-flex flex-column">
                            <label style="color:#C3CFD5;" >To</label>
                            <input type="date" class="form-control" name="leave_to_date" style="width:140px">
                        </div>   
                </div>
                <input type="hidden" name="vac_date_diff[]">
                <input type="hidden" name="sick_date_diff[]">
                <input type="hidden" name="spl_date_diff[]">

                <div class="form-group mx-sm-3 mb-2">
                    <label for="">COMMUNICATION</label>
                    <select class="form-control" style="width:100px;" name="communication">
                        <option selected>Select</option>
                        <option>...</option>
                    </select>
                 </div>

                 <div class="form-group mx-sm-3 mb-2">
                        <textarea class="form-control" rows="3" placeholder="Please Specify" name="description"></textarea>
                </div>

                <div class="form-group mx-sm-3 mb-2">
                        <label for="">CERTIFICATE OF LEAVE CREDITS</label>
                           <div class="d-flex flex-column">
                           <label style="color:#C3CFD5;" >As of </label>
                            <input type="date" class="form-control"  style="width:140px" name="certificate_of_leave">
                            </div>
                </div>

                <div class="col-lg-4 ">
                    <table class="table table-bordered table-sm" >
                        <thead>
                            <tr>
                            <th scope="col"></th>
                            <th scope="col">Vacation</th>
                            <th scope="col">Sick</th>
                            <th scope="col">SPL</th>
                            <th scope="col">Total</th>
                            </tr>
                        </thead>

                        <tbody >
                            <tr>
                            
                            <td>Last Balance</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>

                            <tr>
                            <td>Less this Leave</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@fat</td>
                            <td>@fat</td>
                            </tr>

                            <tr>
                            <th >Balance</th>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

        

    </div>  
                        <div class="container mt-2">
                            <div class="text-right">
                                <button class="btn" type="submit" style="background: #345587;color:#EFE20A;;" name="submit">SUBMIT</button>
                            </div>
                    </div>

                    </form>
</div>


    <div class="leave_mang_section">

        <div class="form-inline">

            <div class="col-lg-8 leave_mang_header ">
                <h4>LEAVE SUMMARY</h4>
            </div>

            <div class="col-lg-4 ">

            <form action="" method="post" class="form-inline ">

            
                <div class="form-group mx-sm-1">
                <input type="date" class="form-control" id="from_date"  style="width:140px" name="from_date">
                </div>  

                <div class="form-group mx-sm-1">
                <input type="date" class="form-control" id="to_date"  style="width:140px" name="to_date">
                </div> 

                <button class="btn" name="date" >DATE</button>
            </div>

            </form>

        </div>
                        
    
        <div class="leave_mang_section_body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                    <table class="table table-bordered table-sm" >

                   
                   
                        <thead class="table-head">
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Vacation</th>
                            <th scope="col">Sick</th>
                            <th scope="col">SPL</th>
                            <th scope="col">Total Balance</th>
                            </tr>
                        </thead>

         
           
      
                     <tbody >
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                            </tr>
                    </tbody>
                     

                    
                    </table>
                   
       
                </div>

                    <div class="col-lg-2">
                        <div class="d-flex flex-column">
                            <div class="text-center">

        <?php

            if(isset($_POST['date'])){

                if(isset($_POST['from_date']) && isset($_POST['to_date'])){
                $from_date = $_POST['from_date'];
                $to_date = $_POST['to_date'];
                } 
                    }
                    else 
                    {

                    $from_date= date ("y-m-d");
                    $to_date=date('y-m-d', strtotime($from_date. ' + 20 days'));;
                    
                    }

                 require '../includes/conn.php';

                $query = "SELECT type_of_leave FROM emp_leaves WHERE type_of_leave = 'vacation leave' AND leave_from_date BETWEEN  '$from_date' AND '$to_date' " ;

                $runquery = $conn -> query($query);
                $vac_rowcount=mysqli_num_rows($runquery);


                $query = "SELECT type_of_leave FROM emp_leaves WHERE type_of_leave = 'sick leave'  AND leave_from_date BETWEEN  '$from_date' AND '$to_date'" ;

                $runquery = $conn -> query($query);
                $sick_rowcount=mysqli_num_rows($runquery);

                $query = "SELECT type_of_leave FROM emp_leaves WHERE type_of_leave = 'special priviledge leave' AND leave_from_date BETWEEN  '$from_date' AND '$to_date'" ;

                $runquery = $conn -> query($query);
                $spl_rowcount=mysqli_num_rows($runquery);

        ?>
                                <span>Vacation Leave</span>
                                <h2 ><?php echo $vac_rowcount?></h2>
                                <span>Sick Leave</span>
                                <h2 ><?php echo $sick_rowcount?></h2>
                                <span>Special Priviledge Leave</span>
                                <h2 ><?php echo $spl_rowcount?></h2>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>


</div>  <!-- /#page-content-wrapper -->
  </div> <!-- /#wrapper -->