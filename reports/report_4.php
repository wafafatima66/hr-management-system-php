<style>

.border_column{
    border-right : solid 1px #B89783 ; 
    border-left : solid 1px #B89783 ; 
}

h1{
    font-weight:bold;
}


h2{
    color:#4A4A4A;
    font-weight:bold;
}
.pink-text{
    color:#D0328D;
}
.blue-text{
    color:#3B5887;
    font-size:20px;
    padding-bottom:15px;
}

</style>

<?php
//SELECT  e.emp_status , p.emp_gender from add_emp e , pds p where p.emp_id = e.emp_id  and emp_gender = "female" and e.emp_status = "permanent"

require '../includes/conn.php';

$query = "select COUNT(e.emp_status) as status from add_emp e , pds p where p.emp_id = e.emp_id and emp_gender = 'male' and e.emp_status = 'permanent'";

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
        $male_per=$mydata["status"];
  }
    } 

$query = "select COUNT(e.emp_status) as status from add_emp e , pds p where p.emp_id = e.emp_id and emp_gender = 'male' and e.emp_status = 'contractual'";

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
        $male_cont=$mydata["status"];
  }
    } 

    $query = "select COUNT(e.emp_status) as status from add_emp e , pds p where p.emp_id = e.emp_id and emp_gender = 'male' and e.emp_status = 'job_order'";

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
        $male_job=$mydata["status"];
  }
    } 

    $query = "select COUNT(e.emp_status) as status from add_emp e , pds p where p.emp_id = e.emp_id and emp_gender = 'female' and e.emp_status = 'permanent'";

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
        $female_per=$mydata["status"];
  }
    } 

    $query = "select COUNT(e.emp_status) as status from add_emp e , pds p where p.emp_id = e.emp_id and emp_gender = 'female' and e.emp_status = 'contractual'";

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
        $female_cont=$mydata["status"];
  }
    } 

    $query = "select COUNT(e.emp_status) as status from add_emp e , pds p where p.emp_id = e.emp_id and emp_gender = 'female' and e.emp_status = 'job_order'";

    if($runquery = $conn -> query($query)) {
            while($mydata = $runquery -> fetch_assoc()){
            $female_job=$mydata["status"];
      }
        } 

        $male_total = $male_per + $male_cont + $male_job ; 
        $female_total = $female_per + $female_cont + $female_job ; 

?>

<div class="container " style="height:100%">

    <div class="row">
        <div class="col-lg-4">
        </div>

        <div class="col-lg-4">
            <h4 class="text-center pink-text pb-3">Female</h4>
        </div>

        <div class="col-lg-4">
            <h4 class="text-center pink-text pb-3">Male</h4>
        </div>
    </div>

    <div class="row">
    
        <div class="col-lg-4 ">
            <h3 class="blue-text">Permanent</h3>
            <h3 class="blue-text">Contractual</h3>
            <h3 class="blue-text">Job-order</h3>
            <h3 class="blue-text"></h3>
        </div>

        <div class="col-lg-4 border_column">
            <h2 class="text-center" ><?php echo  $female_per?></h2>
            <h2 class="text-center"><?php echo  $female_cont?></h2>
            <h2 class="text-center"><?php echo  $female_job?></h2>
            <h1 class="text-center pink-text"><?php echo  $female_total?></h1>
        </div> 
 
        <div class="col-lg-4">
            <h2 class="text-center"><?php echo  $male_per?></h2>
            <h2 class="text-center"><?php echo  $male_cont?></h2>
            <h2 class="text-center"><?php echo  $male_job?></h2>
            <h1 class="text-center pink-text"><?php echo  $male_total?></h1>
        </div>
    </div>
</div>