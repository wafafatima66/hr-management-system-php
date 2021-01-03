<div class="emp_profile_tab2 container pb-5 pt-5" id="panel-1" style="display:block;background:#E6F7FF;">
                    <div class="container">
                        <div class="row">

                
                        <div class="col-lg-1"></div>

                        <div class="col-lg-11">
                            <div class="form-inline d-flex  justify-content-around">
                                <div class="form-group mx-sm-1 mb-2" >
                                    <label for="" style="color:#54A04B; ">VACATION LEAVE</label>
                                </div>
                                <div class="form-group mx-sm-1 mb-2" >
                                    <label for="" style="color:#54A04B;">SICK LEAVE</label>
                                </div>
                                <div class="form-group mx-sm-1 mb-2" >
                                    <label for="" style="color:#54A04B;">SPECIAL PRIVILEDGE LEAVE</label>
                                </div>
                                <div class="form-group mx-sm-1 mb-2" >
                                    <label for="" style="color:#54A04B;">LEAVE WITHOUT PAY</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 m-0 p-0 form-inline">  
                           

               <?php 

                $array = array("January", "February", "March" , "April" ,"May" ,"June" ,"July" ,"August","September","October","November","December");

                require '../includes/conn.php';

              
                    for($i=0 ; $i < 12 ; $i++){ 
                        
                        require "ledger-var.php";
                                
                        ?>

                        
                            <div class="form-group mx-sm-1 mb-1" >
                                    <label for="" class="mr-2" style="width:100px;"><?php echo $array[$i]?></label>

                                    <input type="text" class="form-control " style="width:170px; "readonly value="<?php echo $vac_leave_dates?>">

                                    <input type="text" class="form-control mr-2" readonly style="width:60px;" value="<?php echo $vac_date_diff?>days">

                                    <input type="text" class="form-control"  readonly style="width:170px;" value="<?php echo $sick_leave_dates?>" >

                                    <input type="text" class="form-control mr-2" readonly style="width:60px;" value="<?php echo $sick_date_diff?>days">

                                    <input type="text" class="form-control" readonly style="width:170px;" value="<?php echo $spl_leave_dates?>">

                                    <input type="text" class="form-control mr-2" readonly style="width:60px;" value="<?php echo $spl_date_diff?>days">

                                    <input type="text" class="form-control" readonly style="width:170px;" value="<?php echo $lwp_leave_dates?>">
                                    
                                    <input type="text" class="form-control mr-2" readonly style="width:60px;" value="<?php echo $lwp_date_diff?>days">
                            </div>

                              
                       

                                <?php
                                
                               
                                
                                }?>                       
                                                                            
                                </div>
                            </div>
                        </div>

                </div>