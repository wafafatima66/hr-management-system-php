
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

                <button class="btn" name="search" >SEARCH</button>

            </form>
        </div>

</div>
     


<div class="leave_mang_section_body" >
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
                            <th scope="col">Action</th>
                            </tr>
                        </thead>

            <?php
            
                    require '../includes/conn.php';
                                    
                    $query = "select emp_id from per_emp_leaves"; // finding emp_id form date diff leave table to avoid repeat

                    if($runquery = $conn -> query($query)){
                    $rowcount=mysqli_num_rows($runquery);
                            if($rowcount != 0 ){

                    
                        while($mydata = $runquery -> fetch_assoc())
                            {
                                $emp_id =   $mydata["emp_id"];
                                $resultarray [] =  $emp_id; // creating array to store all the employees applied for leave
                                
                            }
                    } else {
                        $resultarray [] =  "";
                    }
                }

                                        
                    // this block was for storing employees id   
                      
                        
                    for ($i = 0 ; $i < count($resultarray) ; $i++) // running the loop as many id stored in array
                    {


                        $emp_id = $resultarray[$i]; // getting the emp id from the array 

                        $query = "select emp_first_name , emp_last_name , emp_middle_name, emp_image , office_assign from add_emp where emp_id ='$emp_id'"; 

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

                    <tbody>
                        <tr>

                                <td style="text-transform: capitalize;" class="clickable-row" data-href='../emp_mang/emp_profile.php?emp_id=<?php echo $emp_id;?>'>
                                    <div class="d-flex flex-row "><img src="<?php echo $emp_image?>" alt="" style="width:50px; height:50px; border-radius: 50%;"><div class="d-flex flex-column ml-3"><div style="font-weight:bold;"><?php echo $emp_name ?></div><div><?php echo $office_assign ?></div></div>
                                </td>

            <?php 


                                $year = date("Y");
                                $mon = date("m");

                                $vac_leave_dates = "" ; 
                                  
                                $sick_leave_dates = "" ; 
                                
                                $spl_leave_dates = "" ; 

                $query = "select * from emp_leaves ";  // to find is any data available in emp_leaves
                    if($runquery = $conn -> query($query))
                        $rowcount=mysqli_num_rows($runquery);
                            if($rowcount == 0 ){
                        
                                  $vac_leave_dates = "" ; 
                                  
                                  $sick_leave_dates = "" ; 
                                  
                                  $spl_leave_dates = "" ; 
                            } else {

               
                // getting vacation leaves dates                 
                    $query = "select * from emp_leaves where emp_id = '$emp_id' and MONTH(leave_from_date) = $mon and year(leave_from_date)= $year and type_of_leave = 'vacation leave'"; 



                    if($runquery = $conn -> query($query))

                    {
                    while($mydata = $runquery -> fetch_assoc())
                        {
                            $leave_from_date =   date("m/d/y", strtotime($mydata["leave_from_date"]));
                            $leave_to_date =   date("m/d/y", strtotime($mydata["leave_to_date"]));
                            $vac_sno = $mydata["sno"];
                            $sno = $mydata["sno"];

                            $vac_leave_dates = $leave_from_date . ' '.'-'.' ' . $leave_to_date ; 
                        }

                        
                    }
                
                //getting sick leaves dates
                    $query = "select * from emp_leaves where emp_id = '$emp_id' and MONTH(leave_from_date) = $mon and year(leave_from_date)= $year and type_of_leave = 'sick leave'"; 


                    if($runquery = $conn -> query($query))

                    {
                    while($mydata = $runquery -> fetch_assoc())
                        {
                            $leave_from_date =   date("m/d/y", strtotime($mydata["leave_from_date"]));
                            $leave_to_date =   date("m/d/y", strtotime($mydata["leave_to_date"]));
                            $sick_sno = $mydata["sno"];
                            $sno = $mydata["sno"];

                            $sick_leave_dates = $leave_from_date . ' '.'-'.' ' . $leave_to_date ; 
                        }

                        
                    }

                //getting spl dates

                    $query = "select * from emp_leaves where emp_id = '$emp_id' and MONTH(leave_from_date) = $mon and year(leave_from_date)= $year and type_of_leave = 'special priviledge leave'"; 



                    if($runquery = $conn -> query($query))

                    {
                    while($mydata = $runquery -> fetch_assoc())
                        {
                            $leave_from_date =   date("m/d/y", strtotime($mydata["leave_from_date"]));
                            $leave_to_date =   date("m/d/y", strtotime($mydata["leave_to_date"]));
                            $spl_sno = $mydata["sno"];
                            $sno = $mydata["sno"];


                            $spl_leave_dates = $leave_from_date . ' '.'-'.' ' . $leave_to_date ; 
                        }

                    }                    
                    
                    
            ?>



                                        
                                        
                <td data-todo="<?php echo  $emp_id?>" data-id="<?php echo  $vac_sno?>" class="leave_edit"><?php echo $vac_leave_dates?></td>

                <td data-todo="<?php echo  $emp_id?>" data-id="<?php echo  $sick_sno?>" class="leave_edit"><?php echo $sick_leave_dates?></td>
                
                <td data-todo="<?php echo  $emp_id?>" data-id="<?php echo  $spl_sno?>" class="leave_edit"><?php echo $spl_leave_dates?></td>

            

                <td class="text-center">
                    <a  data-todo="<?php echo  $emp_id?>" data-id="<?php echo  $sno?>" class="leave_edit" ><i class="fas fa-edit"></i></a> 
                    <a href="../leave_mang/leave-delete.php?emp_id=<?php echo $emp_id;?>"> <i class="fas fa-trash-alt"></i></a>
                </td>

            </tr>

        <?php } }} ?>
          

                    <script>
                        $('.leave_edit').click(function(){
                          
                          $.ajax({
                              url:'view_leave.php?',
                              type : 'post',
                              data: {
                                emp_id : $(this).data("todo") ,
                                sno : $(this).data("id")
                              },
                             dataType: 'json',
                                success : function(result){
                                   
                                    $('#emp_first_name').val(result.emp_first_name);
                                    $('#emp_middle_name').val(result.emp_middle_name);
                                    $('#emp_last_name').val(result.emp_last_name);
                                    $('#emp_ext').val(result.emp_ext);
                                    $('#emp_status').val(result.emp_status);
                                    $('#emp_id').val(result.emp_id);

                                    $('#type_of_leave').val(result.type_of_leave);
                                    $('#emp_salary').val(result.emp_salary);
                                    $('#leave_from_date').val(result.leave_from_date);
                                    $('#leave_to_date').val(result.leave_to_date);
                                    $('#communication').val(result.communication);

                                    $('#sno').val(result.sno);
                                    
                                    $('#vl_pts').html(result.vl_pts); // getting vacation  leaves points from database
                                    $('#sl_pts').html(result.sl_pts); // getting sick  leaves points from database
                                
                                
                                    $('#pts_total').html(result.pts_total); // getting total points from calculing vl_pts and sl_pts
                                    $('#total_pts_now').html(result.total_pts_now); // getting pints calculating from vi_now-pts and sl_now_pts
                                    $('#vl_bal').html(result.vl_bal); // vl_pts - vl_now_pts
                                    $('#sl_bal').html(result.sl_bal); // sl_pts - sl_now_pts
                                    $('#total_bal').html(result.total_bal); //vl_bal - sl_bal
                                        
                                    //$('#space').html(result);
                                    
                                    $('#vl_now_pts').html(result.vl_now_pts); // getting vacation  leaves points date given 
                                    $('#sl_now_pts').html(result.sl_now_pts); 

                                   
                                   

                                   // $('#leave-space').html(result);
                                }
                          });
                          
                        });
                    </script>

                        

                            </tbody>

                            <div id="leave-space"></div>
                             
                            <?php }?>

                    </table>
                  
                </div>

            <!--date block of the leave -->
            
                <div class="col-lg-2">
                    <div class="d-flex flex-column">
                        <div class="text-center">

                            <?php

                                if(isset($_POST['search'])){

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