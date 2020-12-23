<?php

require '../includes/conn.php';


//post graduates 

$query = "SELECT COUNT(post_school_name) as post  from edu_background e , pds p  where e.emp_id = p.emp_id and p.emp_gender = 'female' and post_school_name IS NOT NULL AND LENGTH(`post_school_name`) > 0 "  ;

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
        $post=$mydata["post"];
  }
    } 

    $post_female = $post ;
    ; 

    $query = "SELECT COUNT(post_school_name) as post  from edu_background e , pds p  where e.emp_id = p.emp_id and p.emp_gender = 'male' and post_school_name IS NOT NULL AND LENGTH(`post_school_name`) > 0 "  ;

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
        $post=$mydata["post"];
  }
    } 

    $post_male = $post ; 
   

    $total = $post_female + $post_male ; 
    $post_female = ($post_female/$total) * 100 ; 
    $post_male = ($post_male/$total) * 100 ; 

    if($post_female > $post_male  ) {
            $post_more_percent =floor($post_female) ; 
            $post_less_percent = floor($post_male ); 
    } else {
        $post_more_percent = floor($post_male) ; 
            $post_less_percent = floor($post_female);
    }
    //masteral  

    
$query = "SELECT COUNT(gra_school_name) as gra  from edu_background e , pds p  where e.emp_id = p.emp_id and p.emp_gender = 'female' and gra_school_name IS NOT NULL AND LENGTH(`gra_school_name`) > 0 "  ;

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
        $gra=$mydata["gra"];
  }
    } 

    $gra_female = $gra ; 

    $query = "SELECT COUNT(gra_school_name) as gra  from edu_background e , pds p  where e.emp_id = p.emp_id and p.emp_gender = 'male' and gra_school_name IS NOT NULL AND LENGTH(`gra_school_name`) > 0 "  ;

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
        $gra=$mydata["gra"];
  }
    } 

    $gra_male = $gra ; 

    $total = $gra_female + $gra_male ; 
    $gra_female = ($gra_female/$total) * 100 ; 
    $gra_male = ($gra_male/$total) * 100 ;

    if($post_female > $post_male  ) {
        $gra_more_percent = floor($gra_female) ; 
        $gra_less_percent = floor($gra_male) ; 
} else {
    $gra_more_percent = floor($gra_male) ; 
        $gra_less_percent = floor($gra_female);
}

    //graduates 

      
$query = "SELECT COUNT(coll_school_name) as coll  from edu_background e , pds p  where e.emp_id = p.emp_id and p.emp_gender = 'female' and coll_school_name IS NOT NULL AND LENGTH(`coll_school_name`) > 0 "  ;

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
        $coll=$mydata["coll"];
  }
    } 

    $coll_female = $coll ; 

    $query = "SELECT COUNT(coll_school_name) as coll  from edu_background e , pds p  where e.emp_id = p.emp_id and p.emp_gender = 'male' and coll_school_name IS NOT NULL AND LENGTH(`coll_school_name`) > 0 "  ;

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
        $coll=$mydata["coll"];
  }
    } 

    $coll_male = $coll ; 

    $total = $coll_female + $coll_male ; 
    $coll_female = ($coll_female/$total) * 100 ; 
    $coll_male = ($coll_male/$total) * 100 ;

    if($post_female > $post_male  ) {
        $coll_more_percent = floor($coll_female) ; 
        $coll_less_percent = floor($coll_male ); 
} else {
    $coll_more_percent = floor($coll_male) ; 
        $coll_less_percent = floor($coll_female);
}

?>


            <div class="card section4-card" style="height:300px;">
                <div class="cart-title section4-card-title"><h2>Personal Profile</h2></div>
                <div class="card-list p-4">

                <div class="list-group">
                  <h6>DOCTORATE</h6>
                   <div class="progress">
                      <div class="progress-bar progress-bar-less" role="progressbar" style="width: <?php echo $post_less_percent?>%;"><?php echo $post_less_percent?>%</div>
                      <div class="progress-bar " role="progressbar" style="width: <?php echo $post_more_percent?>%;font-weight:bold; font-size:35px" ><?php echo $post_more_percent?>%</div>
                    </div>
                 </div>
                 
                <div class="list-group">
                  <h6>MASTERAL</h6>
                  <div class="progress">
                      <div class="progress-bar progress-bar-less" role="progressbar" style="width: <?php echo $gra_less_percent?>%;"><?php echo $gra_less_percent?>%</div>
                      <div class="progress-bar " role="progressbar" style="width: <?php echo $gra_more_percent?>%;font-weight:bold; font-size:35px" ><?php echo $gra_more_percent?>%</div>
                    </div>
                 </div>
                 
                <div class="list-group">
                  <h6>UNDERGRADUATE</h6>
                  <div class="progress">
                      <div class="progress-bar progress-bar-less" role="progressbar" style="width: <?php echo $coll_less_percent?>%;"><?php echo $coll_less_percent?>%</div>
                      <div class="progress-bar " role="progressbar" style="width: <?php echo $coll_more_percent?>%;font-weight:bold; font-size:35px" ><?php echo $coll_more_percent?>%</div>
                    </div>
                 </div>
             
                </div>
              </div>