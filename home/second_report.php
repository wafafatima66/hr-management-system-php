


<div class="card section4-card" style="height:300px;  overflow-x: hidden; 
  overflow-y: scroll;">

  <div class="card_body" style="height:90%">
                <div class="cart-title section4-card-title"><h2>On leave</h2></div>

                <table class="section4-table">

                <?php

require '../includes/conn.php';

$query = "SELECT e.type_of_leave , p.emp_first_name , p.emp_last_name FROM emp_leaves e , pds p where e.emp_id = p.emp_id and leave_from_date = CURDATE()"  ;

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
        $type_of_leave=$mydata["type_of_leave"];
        $emp_first_name=$mydata["emp_first_name"];
        $emp_last_name=$mydata["emp_last_name"];

        $emp_name = $emp_first_name . ' ' . $emp_last_name;
 ?>

                  <tr class="section4-table-strip">
                    <td><?php echo $emp_name?></td>
                    <td><?php echo $type_of_leave?></td>
                  </tr>

               <?php  } }  ?> 
                  
                </table>

      </div>
                
                <a href="../leave_mang/leave_mang.php" class="text-right">View More</a>
            
  </div>