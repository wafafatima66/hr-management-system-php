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


</script>

<script>
$(document).ready(function(){
    //$("#leave_from_date").on("keyup change", function ({
    $("#leave_to_date").change(function(){
        $.ajax({
            url:'get_leave_credits.php',
            type : 'post',
            data: {leave_to_date : $(this).val() , leave_from_date : $("#leave_from_date").val(), type_of_leave: $("#type_of_leave").val()},
           dataType: 'json',
            success : function(result){
               
                $('#vl_pts').html(result.vl_pts); // getting vacation  leaves points from database
                $('#sl_pts').html(result.sl_pts); // getting sick  leaves points from database
               
               
                $('#pts_total').html(result.pts_total); // getting total points from calculing vl_pts and sl_pts
                $('#total_pts_now').html(result.total_pts_now); // getting pints calculating from vi_now-pts and sl_now_pts
                $('#vl_bal').html(result.vl_bal); // vl_pts - vl_now_pts
                $('#sl_bal').html(result.sl_bal); // sl_pts - sl_now_pts
                $('#total_bal').html(result.total_bal); //vl_bal - sl_bal
                
               //$('#space').html(result);
              
               $('#vl_now_pts').html(result.vl_now_pts); // getting vacation  leaves points date given 
                $('#sl_now_pts').html(result.sl_now_pts); // getting sick leaves points from date given
            }
        });
    });

});


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
   
      <div id="space"></div>


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
              <select class="form-control" style="width:190px;" name="type_of_leave" id="type_of_leave">
                <option value="0">Select</option>
                <option value="vacation leave">Vacation Leave</option>
                <option value="sick leave">Sick Leave</option>
                <option value="special priviledge leave">Special priviledge Leave</option>
                <option value="force leave">Force Leave</option>
                <option value="leave without pay">Leave without pay</option>
            </select>
            </div>

                <div class="form-group mx-sm-2 mb-2">
                        <label >INCLUSIVE DATES</label>
                        <div class="d-flex flex-column">
                            <label style="color:#C3CFD5;" >From </label>
                            <input type="date" class="form-control" name="leave_from_date" style="width:140px" id="leave_from_date" >
                            
                        </div>   
                </div>

                <div class="form-group mx-sm-2 mb-2">
                        <div class="d-flex flex-column">
                            <label style="color:#C3CFD5;" >To</label>
                            <input type="date" class="form-control" name="leave_to_date" style="width:140px" id="leave_to_date">
                        </div>   
                </div>
             

                <div class="form-group mx-sm-3 mb-2">
                    <label for="">COMMUNICATION</label>
                    <select class="form-control" style="width:100px;" name="communication">
                        <option selected>Select</option>
                        <option>...</option>
                    </select>
                 </div>

                 <div class="form-group mx-sm-3 mb-2">
                        <textarea class="form-control" rows="3" placeholder="Please Specify" name="description" ></textarea>
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
                            <th scope="col">Total</th>
                            </tr>
                        </thead>

                        <tbody >
                            <tr>
                            
                                <th>Last Balance</th>
                                <td id="vl_pts"></td>
                                <td id = "sl_pts"></td>
                                <td id="pts_total"></td>
                            
                            </tr>

                            <tr>
                                <th>Less this Leave</th>
                                <td id="vl_now_pts"></td>
                                <td id = "sl_now_pts"></td>
                                <td id="total_pts_now"></td>
                           
                            </tr>

                            <tr>
                                <th >Balance</th>
                                <td id="vl_bal"></td>
                                <td id="sl_bal"></td>
                                <td id="total_bal"></td>
                           
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

                        <?php
                        
                                require '../includes/conn.php';
                                                
                                $query = "select emp_id from per_emp_leaves"; // finding emp_id form date diff leave table to avoid repeat

                                if($runquery = $conn -> query($query))

                                {
                                    while($mydata = $runquery -> fetch_assoc())
                                        {
                                            $emp_id =   $mydata["emp_id"];
                                            $resultarray [] =  $emp_id; // creating array to store all the employees applied for leave
                                           
                                        }
                                }
                                        
                        // this block was for storing employees id   
                        ?>     

                        <?php   
                        
                                for ($i = 0 ; $i < count($resultarray) ; $i++) // running the loop as many id stored in array
                                {

                                    $emp_id = $resultarray[$i]; // getting the emp id from the array 


                                    $query = "select emp_first_name , emp_last_name , emp_middle_name, emp_image , office_assign from add_emp where emp_id ='$emp_id'"; // finding emp_id form date diff leave table to avoid repeat

                                    if($runquery = $conn -> query($query))
    
                                    {
                                        while($mydata = $runquery -> fetch_assoc())
                                            {
                                                $emp_first_name =   $mydata["emp_first_name"];
                                                $emp_last_name =   $mydata["emp_last_name"];
                                                $emp_middle_name =   $mydata["emp_middle_name"];
                                                $emp_image = '../uploads/image/'.$mydata["emp_image"];
                                                $office_assign =   $mydata["office_assign"];

                                                $emp_name =  $emp_first_name . ' ' . $emp_last_name . ' '. $emp_middle_name;

                                                ?>

                                                <tbody >
                                                <tr>
                                                    <td style="text-transform: capitalize;"><div class="d-flex flex-row "><img src="<?php echo $emp_image?>" alt="" style="width:50px; height:50px; border-radius: 50%;"><div class="d-flex flex-column ml-3"><div style="font-weight:bold;"><?php echo $emp_name ?></div><div><?php echo $office_assign ?></div></div></td>

                                
                                <?php

                                            }
                                        }
                                    $query = "select MAX(date_diff) AS date_max , MIN(date_diff) AS date_min from emp_leaves where emp_id = '$emp_id' and type_of_leave = 'vacation leave'"; 

                                    if($runquery = $conn -> query($query)){

                                        while($mydata = $runquery -> fetch_assoc()){

                                                $date_max =   $mydata["date_max"];
                                                $date_min =   $mydata["date_min"];

                            //this block for getting vacation information                     
                        ?>

                                
                                            <td ><?php echo $date_max?>-<?php echo $date_min?></td>
                        <?php 
                        
                                } } // end of if and while loop of vacation leave
                        
                        ?>


                        <?php
                        
                            $query = "select MAX(date_diff) AS date_max , MIN(date_diff) AS date_min from emp_leaves where emp_id = '$emp_id' and type_of_leave = 'sick leave'"; 

                            if($runquery = $conn -> query($query)){

                                while($mydata = $runquery -> fetch_assoc()){

                                    $date_max =   $mydata["date_max"];

                                    $date_min =   $mydata["date_min"];
                                
                                    //this block for getting sick leave vacation
                        ?>

                                <td><?php echo $date_max?>-<?php echo $date_min?></td> 

                        <?php 
                            } } // end of block of sick leave vacation 
                        ?>

                        <?php
                            
                            $query = "select MAX(date_diff) AS date_max , MIN(date_diff) AS date_min from emp_leaves where emp_id = '$emp_id' and type_of_leave = 'special priviledge leave'"; 

                            if($runquery = $conn -> query($query)){

                            while($mydata = $runquery -> fetch_assoc()){

                                    $date_max =   $mydata["date_max"];
                                
                                    $date_min =   $mydata["date_min"];
                                
                                    // block for spl 
                        ?>

                        <td><?php echo $date_max?>-<?php echo $date_min?></td>

                        <?php 
                            } } //end of spl
                        ?>


                        </tr>
                            </tbody>

                                                    
                        <?php    } // end of for loop ?>

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