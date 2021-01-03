
<!--leave credits section-->


<div class="emp_profile_tab2 container pb-5 pt-5" id="panel-2">

<div class="container">

<div id="space"></div>

    <div class="d-flex flex-column pb-4">

        <?php

        $last_year = date("Y")-1; //finding last year

        $query = "select vl_pts,sl_pts,year from leave_credits_year where emp_id = '$emp_id' and year = $last_year ";                         
        if($runquery = $conn -> query($query)){
            $rowcount=mysqli_num_rows($runquery);
                if($rowcount != 0 ){
            while($mydata = $runquery -> fetch_assoc())
                {
                
                    $vl_pts = $mydata["vl_pts"] ;
                    $sl_pts = $mydata["sl_pts"] ;
                    $year = $mydata["year"] ; //getting last year to display

                       
                }
            } else {
                $vl_pts = 15.0;
                    $sl_pts = 15.0;
                    $year = date("Y")-1;
            }
            
            
                
            } 
            $total_pts = $vl_pts + $sl_pts ; 
            ?>

<p class="text-center">BALANCE FORWARDED AS OF <span style="font-style:italic;">12/31/<?php echo $year?></span></p>

    <div class="d-flex align-items-center justify-content-center">

    <input type="hidden" id="leave_emp_id" value="<?php echo $emp_id?>">

        <div class="d-flex flex-column" style=" border-right: 1px solid #000; padding:0 20px ">
            <input type="text" size="1" class="text-center h4 pts" style="background: none;
                    border: none; background-color:#E6F7FF; color:#345587 ;" value="<?php echo $vl_pts?>" id="vl_pts" > 
                <span class="text-center">VL</span>
        </div>

        <div class="d-flex flex-column" style=" border-right: 1px solid #000; padding:0 20px ">
        <input type="text" size="1" class="text-center h4 pts" style="background: none;
                    border: none; background-color:#E6F7FF; color:#345587 ;" value="<?php echo $sl_pts?>" id="sl_pts" > 
                <span class="text-center">SL</span>
        </div>

        <div class="d-flex flex-column" style=" border-right: 1px solid #000; padding:0 20px ">
        <input type="text" size="1" class="text-center h4" style="background: none;
                    border: none; background-color:#E6F7FF; color:#345587 ;" value="<?php echo $total_pts?>" > 
                <span class="text-center">Total</span>
        </div>
        
    </div>

</div>

    <div class="row">

        <div class="col-lg-1"></div>

            <div class="col-lg-11">
                <div class="form-inline ">
                
                    <div class="form-group mx-sm-3 mb-2" >
                        <label for="" style="color:#54A04B; width:150px ">VACATION LEAVE</label>
                    </div>
                    <div class="form-group mx-sm-3 mb-2" >
                        <label for="" style="color:#54A04B; width:200px ">SICK LEAVE</label>
                    </div>
                    <div class="form-group mx-sm-3 mb-2" >
                        <label for="" style="color:#54A04B; width:120px ">SPL</label>
                    </div>
                    <div class="form-group mx-sm-1 mb-2" >
                        <label for="" style="color:#54A04B; width:120px ">FORCE LEAVE</label>
                    </div>
                    <div class="form-group mx-sm-1 mb-2" >
                        <label for="" style="color:#54A04B; width:150px ">LEAVE WITHOUT PAY</label>
                    </div>
                </div>
            </div>


            <div class="col-lg-12 m-0 p-0 form-inline"> 
        

        <?php 

        $array = array("January", "February", "March" , "April" ,"May" ,"June" ,"July" ,"August","September","October","November","December");

       

        for($i=0 ; $i < 12 ; $i++){ 

            $j = $i+1;
            $year = date("Y");

            $query = "select emp_id from per_emp_leaves where emp_id = '$emp_id' "; //to understand whether emp submitted for leave form

                                   
            $runquery = $conn -> query($query);
                $rowcount=mysqli_num_rows($runquery);
                if($rowcount == 0 ){

                    $spl_days = "";
                    $fl_days = "";
                    $lwp_days = "";
                    $vl_days = "";           
                    $vl_pts =  "";
                    $sl_days = "" ; 
                    $sl_pts =  "";

                    ?>

                            <div class="form-group mx-sm-1 mb-1" >

                            <label for="" class="mr-2" style="width:100px;"><?php echo $array[$i]?></label>

                            <input type="text" class="form-control " style="width:110px; "readonly value="<?php echo $vl_days?>">
                            <input type="text" class="form-control mr-2" readonly style="width:110px;" value="<?php echo $vl_pts?>">

                            <input type="text" class="form-control"  readonly style="width:110px;" value="<?php echo $sl_days?>" >
                            <input type="text" class="form-control mr-3" readonly style="width:110px;" value="<?php echo $sl_pts?>">


                            <input type="text" class="form-control mr-3" readonly style="width:110px;" value="<?php echo $spl_days?>">


                            <input type="text" class="form-control mr-3" readonly style="width:110px;" value="<?php echo $fl_days?>">

                            <input type="text" class="form-control mr-3" readonly style="width:110px;" value="<?php echo $lwp_days?>">
                            </div>

         <?php       }
            
        else {


            $query = "select sum(vacation_leave) as vl_days , sum(sick_leave) as sl_days, sum(spl) as spl_days , sum(force_leave) as fl_days , sum(lwp) as lwp_days from leave_credits where emp_id = '$emp_id' and mon = $j and year = $year"; 

                                   
                if($runquery = $conn -> query($query)){

                    while($mydata = $runquery -> fetch_assoc())
                        {
                        
                            $spl_days = $mydata["spl_days"] ;
                            $fl_days = $mydata["fl_days"] ;
                            $lwp_days = $mydata["lwp_days"] ;
                            
                        if(!empty($mydata["vl_days"]) && !empty($mydata["sl_days"])){
                    
                            $vl_days = $mydata["vl_days"] ; //getting vacation days
                                
                            $vl_pts =  $vl_pts - $vl_days;

                            $sl_days = $mydata["sl_days"] ;
                                
                            $sl_pts =  $sl_pts - $sl_days;
                            
                        }

                        else if(!empty($mydata["sl_days"] )){
                            $sl_days = $mydata["sl_days"] ;
                                
                            $sl_pts =  $sl_pts - $sl_days;
                            $vl_days = 1.25 ;
                            
                        }  else if(!empty($mydata["vl_days"]) ){
                            $vl_days = $mydata["vl_days"] ; //getting vacation days
                                
                            $vl_pts =  $vl_pts - $vl_days;
                            $sl_days = 1.25 ;
                        }
                        
                        else {
                            $vl_days = 1.25 ; //when no leave has taken 
                            
                            
                            $vl_pts =  $vl_pts + $vl_days;

                            $sl_days = 1.25 ; //when no leave has taken 
                            
                            
                            $sl_pts =  $sl_pts + $sl_days;
                            
                        }
                    

//for fetching the information into leave form 
$mon = $i+1 ; //getting month number
                    
$sql_3="INSERT INTO leave_credits_result (emp_id,mon,year,vl_pts,sl_pts) VALUE (?,?,?,?,?)
        ON DUPLICATE KEY UPDATE
        vl_pts = '$vl_pts',
        sl_pts = '$sl_pts'
";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql_3)){
header("Location:leave_mang.php?leave=error");
exit();
}
else{ 

    mysqli_stmt_bind_param($stmt,"iiidd", $emp_id,$mon,$year,$vl_pts,$sl_pts);
    mysqli_stmt_execute($stmt);

}
                
                        
                
        ?>

        <div class="form-group mx-sm-1 mb-1" >

            <label for="" class="mr-2" style="width:100px;"><?php echo $array[$i]?></label>

            <input type="text" class="form-control " style="width:110px; "readonly value="<?php echo $vl_days?>">
            <input type="text" class="form-control mr-2" readonly style="width:110px;" value="<?php echo $vl_pts?>">

            <input type="text" class="form-control"  readonly style="width:110px;" value="<?php echo $sl_days?>" >
            <input type="text" class="form-control mr-3" readonly style="width:110px;" value="<?php echo $sl_pts?>">

            
            <input type="text" class="form-control mr-3" readonly style="width:110px;" value="<?php echo $spl_days?>">

            
            <input type="text" class="form-control mr-3" readonly style="width:110px;" value="<?php echo $fl_days?>">

            <input type="text" class="form-control mr-3" readonly style="width:110px;" value="<?php echo $lwp_days?>">
    </div>


<?php



}}   }
} // end of for loop



if(!empty($vl_pts)  || !empty($sl_pts)  ){

$vl_pts = abs($vl_pts);
$sl_pts = abs($sl_pts);
$year = date("Y");

$query = "SELECT * FROM leave_credits_year WHERE emp_id = '$emp_id' and year= $year";
$runquery = $conn -> query($query);
$rowcount=mysqli_num_rows($runquery);
if($rowcount != 0 ){


$query = "UPDATE leave_credits_year SET vl_pts= $vl_pts , sl_pts = $sl_pts where year = $year";
$runquery = $conn -> query($query);
    if($runquery == true){
      
   
} 
}
else {


//$next_year = date("Y")+1;


$sql="INSERT INTO leave_credits_year (emp_id,vl_pts,year,sl_pts) VALUE (?,?,?,?)
";


$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){

}
    else{ 
    
        mysqli_stmt_bind_param($stmt,"iiii", $emp_id,$vl_pts,$year,$sl_pts);
        mysqli_stmt_execute($stmt);
    
    }
}
}
?>


                                              
                                                                
                    </div>
                </div>
            </div>

    </div> <!-- end of leave credits -->