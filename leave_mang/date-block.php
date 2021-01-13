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