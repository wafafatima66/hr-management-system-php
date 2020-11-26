

  <!--body section of education background-->
  
  <div class=" emp_profile_section2 pt-4 mb-5 pb-2 " id="content-3">  

  <?php
 if(isset($_POST['update'])){

    $emp_id = $_REQUEST["emp_id"];

    
if(isset($_POST["ele_school_name"]) || isset($_POST["sec_school_name"]) || isset($_POST["voc_school_name"])  || isset($_POST["coll_school_name"])){

    $ele_school_name=$_POST['ele_school_name'];
    $ele_degree=$_POST['ele_degree'];
    $ele_from_date=$_POST['ele_from_date'];
    $ele_to_date=$_POST['ele_to_date'];
    $ele_units=$_POST['ele_units'];
    $ele_award=$_POST['ele_award'];
    $ele_graduation=$_POST['ele_graduation'];

    $sec_school_name=$_POST['sec_school_name'];
    $sec_degree=$_POST['sec_degree'];
    $sec_from_date=$_POST['sec_from_date'];
    $sec_to_date=$_POST['sec_to_date'];
    $sec_units=$_POST['sec_units'];
    $sec_award=$_POST['sec_award'];
    $sec_graduation=$_POST['sec_graduation'];

    $voc_school_name=$_POST['voc_school_name'];
    $voc_degree=$_POST['voc_degree'];
    $voc_from_date=$_POST['voc_from_date'];
    $voc_to_date=$_POST['voc_to_date'];
    $voc_units=$_POST['voc_units'];
    $voc_award=$_POST['voc_award'];
    $voc_graduation=$_POST['voc_graduation'];

    $coll_school_name=$_POST['coll_school_name'];
    $coll_degree=$_POST['coll_degree'];
    $coll_from_date=$_POST['coll_from_date'];
    $coll_to_date=$_POST['coll_to_date'];
    $coll_units=$_POST['coll_units'];
    $coll_award=$_POST['coll_award'];
    $coll_graduation=$_POST['coll_graduation'];

    $gra_school_name=$_POST['gra_school_name'];
    $gra_degree=$_POST['gra_degree'];
    $gra_from_date=$_POST['gra_from_date'];
    $gra_to_date=$_POST['gra_to_date'];
    $gra_units=$_POST['gra_units'];
    $gra_award=$_POST['gra_award'];
    $gra_graduation=$_POST['gra_graduation'];

    $upquery = "UPDATE edu_background SET ele_school_name= '$ele_school_name', ele_degree ='$ele_degree' , ele_from_date ='$ele_from_date' , ele_to_date ='$ele_to_date' , ele_units ='$ele_units' , ele_award ='$ele_award' , ele_graduation ='$ele_graduation', sec_school_name= '$sec_school_name', sec_degree ='$sec_degree' , sec_from_date ='$sec_from_date' , sec_to_date ='$sec_to_date' , sec_units ='$sec_units' , sec_award ='$sec_award' , sec_graduation ='$sec_graduation', voc_school_name= '$voc_school_name', voc_degree ='$voc_degree' , voc_from_date ='$voc_from_date' , voc_to_date ='$voc_to_date' , voc_units ='$voc_units' , voc_award ='$voc_award' , voc_graduation ='$voc_graduation',  coll_school_name= '$coll_school_name', coll_degree ='$coll_degree' , coll_from_date ='$coll_from_date' , coll_to_date ='$coll_to_date' , coll_units ='$coll_units' , coll_award ='$coll_award' , coll_graduation ='$coll_graduation', gra_school_name= '$gra_school_name', gra_degree ='$gra_degree' , gra_from_date ='$gra_from_date' , gra_to_date ='$gra_to_date' , gra_units ='$gra_units' , gra_award ='$gra_award' , gra_graduation ='$gra_graduation'  WHERE emp_id = $emp_id";
    
    $runupquery = $conn -> query($upquery);
    if($runupquery==true){
        echo'<p class="alert alert-success h6">UPDATED </p>';
    } else echo'<p class="alert alert-danger h6"> NOT UPDATED </p>';
} 

} 
 
 ?>


        <form action="" method="post">
            <div class="container">

            <!--ELEMENTARY-->
                <div class="row">
                    <div class="col-lg-2 d-flex align-items-center">
                        <h6>ElEMENTARY</h6>

                    </div>
                   
                    <div class="col-lg-10 pt-2 pb-2 mt-2 mb-2" style="background:#E6F7FF;">

                         <div class="row form-inline">
                    
                
                        <div class="form-group mx-sm-1 mb-2">
                        <div class="d-flex flex-column">
                        <label for="">NAME OF SCHOOL </label>
                        <input type="text" class="form-control" id="" style="width:220px" value=" <?php echo $ele_school_name?>" name="ele_school_name">
                        </div>
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                        <div class="d-flex flex-column">
                        <label for="">BASIC EDUCATION/DEGREE/COURSE </label>
                        <input type="text" class="form-control" id="" style="width:230px"  value="<?php echo $ele_degree?>" name="ele_degree">
                        </div>
                        </div>
                            
                        <div class="form-group mx-sm-3 mb-2">
                           <div class="d-flex flex-column">
                           <label for="">PERIOD OF ATTENDANCE</label>
                        <div>
                            <input type="date" class="form-control" id="" style="width:120px" value="<?php echo $ele_school_name?>" name="ele_from_date">
                            <input type="date" class="form-control" id="" style="width:120px"   value="<?php echo $ele_school_name?>" name="ele_to_date">
                        </div>
                           </div>
                        </div>
                    
                
                        <div class="form-group mx-sm-1 mb-2">
                        <label for="">HIGHEST UNITS EARNED</label>
                        <input type="text" class="form-control" id="" style="width:100px" value="<?php echo $ele_units?>" name="ele_units">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                                <label for="">SCHOLARSHIP/AWARDS</label>
                                <input type="text" class="form-control" id="" style="width:200px"  value="<?php echo $ele_award?>" name="ele_award">
                        </div>

                        <div class="form-group mx-sm-3 mb-2">
                            <label for="">YEAR GRADUATED</label>
                            <input type="text" class="form-control" id="" style="width:80px"  value="<?php echo $ele_graduation?>" name="ele_graduation">
                        </div>
                
                 

                    </div>

                    </div>
                </div>

                
         <!--ELEMENTARY-->
         <div class="row">
                    <div class="col-lg-2 d-flex align-items-center">
                        <h6>SECONDARY</h6>

                    </div>

                    <div class="col-lg-10 pt-2 pb-2 mt-2 mb-2" style="background:#E6F7FF;">

                         <div class="row form-inline">
                    
                
                        <div class="form-group mx-sm-1 mb-2">
                        <div class="d-flex flex-column">
                        <label for="">NAME OF SCHOOL</label>
                        <input type="text" class="form-control" id="" style="width:220px" value="<?php echo $sec_school_name?>" name="sec_school_name">
                        </div>
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                       <div class="d-flex flex-column">
                       <label for="">BASIC EDUCATION/DEGREE/COURSE</label>
                       <input type="text" class="form-control" id="" style="width:230px"  value="<?php echo $sec_degree?>" name="sec_degree">
                       </div>
                        </div>
                            
                        <div class="form-group mx-sm-3 mb-2">
                          <div class="d-flex flex-column">
                          <label for="">PERIOD OF ATTENDANCE</label>
                       <div>
                       <input type="date" class="form-control" id="" style="width:120px"   value="<?php echo $sec_from_date?>" name="sec_from_date">

                        <input type="date" class="form-control" id="" style="width:120px"   value="<?php echo $sec_to_date?>" name="sec_to_date">
                       </div>
                          </div>
                        </div>
                    
                
                        <div class="form-group mx-sm-1 mb-2">
                        <label for="">HIGHEST UNITS EARNED</label>
                        <input type="text" class="form-control" id="" style="width:100px" value="<?php echo $sec_units?>" name="sec_units">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                                <label for="">SCHOLARSHIP/AWARDS</label>
                                <input type="text" class="form-control" id="" style="width:200px"  value="<?php echo $sec_award?>" name="sec_award">
                        </div>

                        <div class="form-group mx-sm-3 mb-2">
                            <label for="">YEAR GRADUATED</label>
                            <input type="text" class="form-control" id="" style="width:80px"  value="<?php echo $sec_graduation?>" name="sec_graduation">
                        </div>
                
                 

                    </div>

                    </div>
                </div>

           <!--ELEMENTARY-->
                <div class="row">
                    <div class="col-lg-2 d-flex align-items-center">
                        <h6>VOCATIONAL/ <br> TRADE COURSE</h6>

                    </div>

                    <div class="col-lg-10 pt-2 pb-2 mt-2 mb-2" style="background:#E6F7FF;">

                         <div class="row form-inline">
                    
                
                        <div class="form-group mx-sm-1 mb-2">
                        <div class="d-flex flex-column">
                        <label for="">NAME OF SCHOOL</label>
                        <input type="text" class="form-control" id="" style="width:220px" value="<?php echo $voc_school_name?>" name="voc_school_name">
                        </div>
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                        <div class="d-flex flex-column">
                        <label for="">BASIC EDUCATION/DEGREE/COURSE</label>
                        <input type="text" class="form-control" id="" style="width:230px"  value="<?php echo $voc_degree?>" name="voc_degree">
                        </div>
                        </div>
                            
                        <div class="form-group mx-sm-3 mb-2">
                            <div class="d-flex flex-column">
                            <label for="">PERIOD OF ATTENDANCE</label>
                                <div>
                                <input type="date" class="form-control" id="" style="width:120px"   value="<?php echo $voc_from_date?>" name="voc_from_date">

                                <input type="date" class="form-control" id="" style="width:120px"   value="<?php echo $voc_to_date?>" name="voc_to_date">
                                </div>
                            </div>
                        </div>
                    
                
                        <div class="form-group mx-sm-1 mb-2">
                        <label for="">HIGHEST UNITS EARNED</label>
                        <input type="text" class="form-control" id="" style="width:100px" value="<?php echo $voc_units?>" name="voc_units">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                                <label for="">SCHOLARSHIP/AWARDS</label>
                                <input type="text" class="form-control" id="" style="width:200px"  value="<?php echo $voc_award?>" name="voc_award">
                        </div>

                        <div class="form-group mx-sm-3 mb-2">
                            <label for="">YEAR GRADUATED</label>
                            <input type="text" class="form-control" id="" style="width:80px"  value="<?php echo $voc_graduation?>" name="voc_graduation">
                        </div>
                
                 

                    </div>

                    </div>
                </div>


              <!--ELEMENTARY-->
              <div class="row">
                    <div class="col-lg-2 d-flex align-items-center">
                        <h6>COLLEGE</h6>

                    </div>

                    <div class="col-lg-10 pt-2 pb-2 mt-2 mb-2" style="background:#E6F7FF;">

                         <div class="row form-inline">
                    
                
                        <div class="form-group mx-sm-1 mb-2">
                        <div class="d-flex flex-column">
                        <label for="">NAME OF SCHOOL</label>
                        <input type="text" class="form-control" id="" style="width:220px" value="<?php echo $coll_school_name?>" name="coll_school_name">
                        </div>
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                        <div class="d-flex flex-column">
                        <label for="">BASIC EDUCATION/DEGREE/COURSE</label>
                        <input type="text" class="form-control" id="" style="width:230px"  value="<?php echo $coll_degree?>" name="coll_degree">
                        </div>
                        </div>
                            
                        <div class="form-group mx-sm-3 mb-2">
                            <div class="d-flex flex-column">
                            <label for="">PERIOD OF ATTENDANCE</label>
                            <div>
                            <input type="date" class="form-control" id="" style="width:120px"   value="<?php echo $coll_from_date?>" name="coll_from_date">
                            <input type="date" class="form-control" id="" style="width:120px"   value="<?php echo $coll_to_date?>" name="coll_to_date">
                            </div>
                            </div>
                        </div>
                    
                
                        <div class="form-group mx-sm-1 mb-2">
                        <label for="">HIGHEST UNITS EARNED</label>
                        <input type="text" class="form-control" id="" style="width:100px" value="<?php echo $coll_units?>" name="coll_units">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                                <label for="">SCHOLARSHIP/AWARDS</label>
                                <input type="text" class="form-control" id="" style="width:200px"  value="<?php echo $coll_award?>" name="coll_award">
                        </div>

                        <div class="form-group mx-sm-3 mb-2">
                            <label for="">YEAR GRADUATED</label>
                            <input type="text" class="form-control" id="" style="width:80px"  value="<?php echo $coll_graduation?>" name="coll_graduation">
                        </div>
                
                 

                    </div>

                    </div>
                </div>


             <!--ELEMENTARY-->
             <div class="row">
                    <div class="col-lg-2 d-flex align-items-center">
                        <h6>GRADUATE STUDIES</h6>

                    </div>

                    <div class="col-lg-10 pt-2 pb-2 mt-2 mb-2" style="background:#E6F7FF;">

                         <div class="row form-inline">
                    
                
                        <div class="form-group mx-sm-1 mb-2">
                       <div class="d-flex flex-column">
                       <label for="">NAME OF SCHOOL</label>
                       <input type="text" class="form-control" id="" style="width:220px" value="<?php echo $gra_school_name?>" name="gra_school_name">
                       </div>
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                        <div class="d-flex flex-column">
                        <label for="">BASIC EDUCATION/DEGREE/COURSE</label>
                        <input type="text" class="form-control" id="" style="width:230px"  value="<?php echo $gra_degree?>" name="gra_degree">
                        </div>
                        </div>
                            
                        <div class="form-group mx-sm-3 mb-2">
                           <div class="d-flex flex-column">
                           <label for="">PERIOD OF ATTENDANCE</label>
                            <div>
                            <input type="date" class="form-control" id="" style="width:120px"   value="<?php echo $gra_from_date?>" name="gra_from_date">
                                <input type="date" class="form-control" id="" style="width:120px"   value="<?php echo $gra_to_date?>" name="gra_to_date">
                            </div>
                           </div>
                        </div>
                    
                
                        <div class="form-group mx-sm-1 mb-2">
                        <label for="">HIGHEST UNITS EARNED</label>
                        <input type="text" class="form-control" id="" style="width:100px" value="<?php echo $gra_units?>" name="gra_units">
                        </div>

                        <div class="form-group mx-sm-1 mb-2">
                                <label for="">SCHOLARSHIP/AWARDS</label>
                                <input type="text" class="form-control" id="" style="width:200px"  value="<?php echo $gra_award?>" name="gra_award">
                        </div>

                        <div class="form-group mx-sm-3 mb-2">
                            <label for="">YEAR GRADUATED</label>
                            <input type="text" class="form-control" id="" style="width:80px"  value="<?php echo $gra_graduation?>" name="gra_graduation">
                        </div>
                
                 

                    </div>

                    </div>
                </div>


                  

                    </div>


                    <div class="container">
                    <div class="text-right">
                    
                    <button  type ="submit" name="update" class="btn m-2" style="background: #345587; color:#fff";>UPDATE</button>

                    </div>
               </div>

                    </form>

                    </div>
               