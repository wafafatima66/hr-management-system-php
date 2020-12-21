    
    <style>
    .progress-bar-purple {
      background-color: #D1348D; !important;
}

.progress-bar-blue {
      background-color: #0CA5C5; !important;
}
.progress {
    height:15px;
    font-size : 12px ; 
    background-color:#FAE099;

}
.progress_wrapper{
    width:90%; 
    float:right;
    padding-left: 80px ; 
}
.progress_span{
    float:left; 
    padding-right:10px; 
    color:#867E65; 
    width:60px;
    font-size:12px;
}
.percentage_span{
    float:right; 
    padding:10px;

}
.progress_container{
  
   
}
.progress_container h6{
   
}

    
    </style>
   

<?php //SELECT COUNT(ele_school_name) as ele , p.emp_gender from edu_background e , pds p  where e.emp_id = p.emp_id and p.emp_gender = "male"

//SELECT COUNT(post_school_name) as ele , p.emp_gender from edu_background e , pds p  where e.emp_id = p.emp_id and p.emp_gender = "female" and post_school_name IS NOT NULL AND LENGTH(`post_school_name`) > 0 

require '../includes/conn.php';



//post graduates 

$query = "SELECT COUNT(post_school_name) as post  from edu_background e , pds p  where e.emp_id = p.emp_id and p.emp_gender = 'female' and post_school_name IS NOT NULL AND LENGTH(`post_school_name`) > 0 "  ;

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
        $post=$mydata["post"];
  }
    } 

    $post_female = $post ;
    if(empty($post_female)){
        $post_female = 1; 
    }

    $query = "SELECT COUNT(post_school_name) as post  from edu_background e , pds p  where e.emp_id = p.emp_id and p.emp_gender = 'male' and post_school_name IS NOT NULL AND LENGTH(`post_school_name`) > 0 "  ;

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
        $post=$mydata["post"];
  }
    } 

    $post_male = $post ; 
    if(empty($post_male)){
        $post_male = 1; 
    }
   

    $total = $post_female + $post_male ; 
    $post_female = floor(($post_female/$total) * 100 ); 
    $post_male = floor(($post_male/$total) * 100 ); 
    
   

    //masteral  

    
$query = "SELECT COUNT(gra_school_name) as gra  from edu_background e , pds p  where e.emp_id = p.emp_id and p.emp_gender = 'female' and gra_school_name IS NOT NULL AND LENGTH(`gra_school_name`) > 0 "  ;

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
        $gra=$mydata["gra"];
  }
    } 

    $gra_female = $gra ; 
    if(empty($gra_female)){
        $gra_female = 1; 
    }

    $query = "SELECT COUNT(gra_school_name) as gra  from edu_background e , pds p  where e.emp_id = p.emp_id and p.emp_gender = 'male' and gra_school_name IS NOT NULL AND LENGTH(`gra_school_name`) > 0 "  ;

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
        $gra=$mydata["gra"];
  }
    } 

    $gra_male = $gra ; 
    if(empty($gra_male)){
        $gra_male = 1; 
    }

    $total = $gra_female + $gra_male ; 
    $gra_female = floor(($gra_female/$total) * 100) ; 
    $gra_male = floor(($gra_male/$total) * 100 );

    //graduates 

      
$query = "SELECT COUNT(coll_school_name) as coll  from edu_background e , pds p  where e.emp_id = p.emp_id and p.emp_gender = 'female' and coll_school_name IS NOT NULL AND LENGTH(`coll_school_name`) > 0 "  ;

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
        $coll=$mydata["coll"];
       
  }
    } 

    $coll_female = $coll ; 
    if(empty($coll_female)){
        $coll_female = 1; 
    }

    $query = "SELECT COUNT(coll_school_name) as coll  from edu_background e , pds p  where e.emp_id = p.emp_id and p.emp_gender = 'male' and coll_school_name IS NOT NULL AND LENGTH(`coll_school_name`) > 0 "  ;

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
        $coll=$mydata["coll"];
  }
    } 

    $coll_male = $coll ;
    if(empty($coll_male)){
        $coll_male = 1; 
    } 

    $total = $coll_female + $coll_male ; 
    $coll_female = floor(($coll_female/$total) * 100 ); 
    $coll_male = floor(($coll_male/$total) * 100 );

    //senior high 

         
$query = "SELECT COUNT(sec_school_name) as sec  from edu_background e , pds p  where e.emp_id = p.emp_id and p.emp_gender = 'female' and sec_school_name IS NOT NULL AND LENGTH(`sec_school_name`) > 0 "  ;

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
        $sec=$mydata["sec"];
       
  }
    } 

    $sec_female = $sec ; 
    if(empty($sec_female)){
        $sec_female = 1; 
    }

    $query = "SELECT COUNT(sec_school_name) as sec  from edu_background e , pds p  where e.emp_id = p.emp_id and p.emp_gender = 'male' and sec_school_name IS NOT NULL AND LENGTH(`sec_school_name`) > 0 "  ;

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
        $sec=$mydata["sec"];
  }
    } 

    $sec_male = $sec ; 
    if(empty($sec_male)){
        $sec_male = 1; 
    }

    $total = $sec_female + $sec_male ; 
    $sec_female = floor(($sec_female/$total) * 100) ; 
    $sec_male =floor (($sec_male/$total) * 100 );

?>

            
            <div class="progress_container container">
            <div class="row">
            
<div class="col-lg-3">

<h6 class=" ">Doctorate</h6>
</div>

                    <div class="col-lg-12">

                        <div class="progress_wrapper" >

                        <span class="progress_span">Female</span>

                            <div class="progress"  >
                                <div class="progress-bar progress-bar-purple" role="progressbar" style="width:<?php echo $post_female .'%'; ?>;"  > 
                                </div> 
                                <span class="percentage_span"><?php echo $post_female; ?></span>
                            </div>

                        </div>

                        <div class="progress_wrapper">

                        <span class="progress_span">Male</span>
                            <div class="progress"  >
                                <div class="progress-bar progress-bar-blue" role="progressbar" style="width: <?php echo $post_male.'%'; ?>;"> 
                                </div> 
                                <span class="percentage_span"><?php echo $post_male; ?></span>
                            </div>
                            
                        </div>


                    </div>
             </div>
             </div>




             <div class="progress_container container  ">
             <div class="row">

             <div class="col-lg-3">
             <h6 >Masteral</h6>
             </div>

              

                <div class="col-lg-12">
                    <div class="progress_wrapper" >

                    <span class="progress_span">Female</span>

                        <div class="progress"  >
                            <div class="progress-bar progress-bar-purple" role="progressbar" style="width:<?php echo $gra_female.'%'; ?>;" > 
                            </div> 
                            <span class="percentage_span"><?php echo $gra_female; ?></span>
                        </div>

                    </div>

                    <div class="progress_wrapper">

                    <span class="progress_span">Male</span>
                        <div class="progress"  >
                            <div class="progress-bar progress-bar-blue" role="progressbar" style="width: <?php echo $gra_male.'%'; ?>"  > 
                            </div> 
                            <span class="percentage_span"><?php echo $gra_male; ?></span>
                        </div>
                        
                    </div>


                </div>
            </div>
            </div>



             <div class="progress_container container ">

             <div class="row">

             <div class="col-lg-3">
             <h6 >Baccalaureate</h6>
             </div>
                

                <div class="col-lg-12">
                    <div class="progress_wrapper" >

                    <span class="progress_span">Female</span>

                    <div class="progress"  >
                    <div class="progress-bar progress-bar-purple" role="progressbar" style="width:<?php echo $coll_female.'%'; ?>;"  > 
                    </div> 
                    <span class="percentage_span"><?php echo $coll_female; ?></span>
                    </div>

                    </div>

                    <div class="progress_wrapper">

                    <span class="progress_span">Male</span>
                    <div class="progress"  >
                    <div class="progress-bar progress-bar-blue" role="progressbar" style="width: <?php echo $coll_male.'%'; ?>"  > 
                    </div> 
                    <span class="percentage_span"><?php echo $coll_male; ?></span>
                    </div>

                    </div>


                </div>
            </div>  
            </div>


            <div class="progress_container container  ">
            <div class="row">

            <div class="col-lg-3">
            <h6 >Senior High</h6>
            </div>

                

                <div class="col-lg-12">
                    <div class="progress_wrapper" >

                    <span class="progress_span">Female</span>

                    <div class="progress"  >
                    <div class="progress-bar progress-bar-purple" role="progressbar" style="width:<?php echo $sec_female.'%'; ?>;"  > 
                    </div> 
                    <span class="percentage_span"><?php echo $sec_female; ?></span>
                    </div>

                     </div>

                    <div class="progress_wrapper">

                    <span class="progress_span">Male</span>
                    <div class="progress"  >
                    <div class="progress-bar progress-bar-blue" role="progressbar" style="width: <?php echo $sec_male.'%'; ?>"  > 
                    </div> 
                    <span class="percentage_span"><?php echo $sec_male; ?></span>
                    </div>

                    </div>


                </div>
            </div>
            </div>

                   



