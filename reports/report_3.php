
<style>

.table_head{
    background:#98D6F3;
}
.table tr{
    text-transform:capitalize;
}
</style>



<div class="container ">
<!--
<div class="row">
    <div class="col-lg-8">
        <h5 class="text-center">Position/Rank</h5>
    </div>

    <div class="col-lg-4">
        <h5>No.Employees</h5>
    </div>
</div>
-->
<table class="table table-bordered">
<thead>
    <tr>
      <th class="table_head text-center">Position/Rank</th>
      <th class="table_head text-center">No.Employees</th>
    </tr>
  </thead>

  <tbody>

  
<?php

require '../includes/conn.php';

$query = "SELECT COUNT(office_assign) as count , office_assign from pds GROUP BY office_assign " ;

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
            $count=$mydata["count"];
            $office_assign=$mydata["office_assign"];

?>


    <tr>
      <td><?php echo $office_assign?></td>
      <td><?php echo $count?></td>
    </tr>


    <?php }} ?>
   
  </tbody>

 
</table>



</div>