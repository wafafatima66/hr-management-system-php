    
    
       <!--Ledger--->

       <div class=" emp_profile_section2_tab" id="tab-2" >  
        <!--menu section--->
         <div class="container">
            <div class="row">
                    <div class="col-lg-9 d-flex align-items-end pr-0">
                            <div class="emp_profile_section2_header " style="width:100%">
                                <h3 class="p-2 m-2" > LEAVE LEDGER </h3>
                            </div>
                    </div>

                    <div class="col-lg-3 pl-0">
                    <div class="emp_profile_image" style="height:250px"> 
                        <img src="<?php echo $emp_image?>" alt="" style="width:100%;height:100%">
                    </div>
                </div>
                
                </div>
            </div>

        <!--Body section--->

        <div class="container">

        <div class="ledger-body" style="border: #345587 solid 2px;">

                <div class="container mt-3 pt-2">

                        <div class="form-inline "> 
                            <button  onclick="openpanel2('panel-1')" type="button" class="btn emp_profile_section2_tab_btn active" >SUMMARY OF LEAVES</button>
                            <button onclick="openpanel2('panel-2')"  type="button" class="btn emp_profile_section2_tab_btn ">LEAVE CREDIT</button>
                        </div>

                    </div>
       

        <div class="container">
            <div class="emp_profile_tab2 container pb-5 pt-5" id="panel-1" style="display:block;background:#E6F7FF;">
                    <div class="container">
                        <div class="row">

                      <!--  <div class="col-lg-2">
                                <div class="d-flex flex-column">
                                    <p style="color:#54A04B">Month</p>
                                    <p >January</p>
                                    <p>Febuary</p>
                                    <p>March</p>
                                    <p>April</p>
                                    <p>May</p>
                                    <p>June</p>
                                    <p>July</p>
                                    <p>August</p>
                                    <p>September</p>
                                    <p>October</p>
                                    <p>November</p>
                                    <p>December</p>
                                </div> 
                        </div>
                        -->
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

                $year = date("Y");

              
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

<!--
                        <div class="form-inline d-flex align-items-center justify-content-around">
                            
                                        <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                            <input type="text" class="form-control" readonly >
                                            <input type="text" class="form-control" readonly style="width:20%">
                                        </div>

                                        <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                            <input type="text" class="form-control" readonly >
                                            <input type="text" class="form-control" readonly style="width:20%">
                                        </div>
                                        <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                            <input type="text" class="form-control" readonly>
                                            <input type="text" class="form-control" readonly style="width:20%">
                                        </div>
                                        <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                            <input type="text" class="form-control" readonly>
                                            <input type="text" class="form-control" readonly style="width:20%">
                                        </div>
                    </div>

                    <div class="form-inline d-flex align-items-center justify-content-around">
                            
                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                <input type="text" class="form-control" readonly >
                                <input type="text" class="form-control" readonly style="width:20%">
                            </div>

                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                <input type="text" class="form-control" readonly >
                                <input type="text" class="form-control" readonly style="width:20%">
                            </div>
                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                <input type="text" class="form-control" readonly>
                                <input type="text" class="form-control" readonly style="width:20%">
                            </div>
                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                <input type="text" class="form-control" readonly>
                                <input type="text" class="form-control" readonly style="width:20%">
                            </div>
                    </div>

                    <div class="form-inline d-flex align-items-center justify-content-around">
                            
                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                <input type="text" class="form-control" readonly >
                                <input type="text" class="form-control" readonly style="width:20%">
                            </div>

                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                <input type="text" class="form-control" readonly >
                                <input type="text" class="form-control" readonly style="width:20%">
                            </div>
                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                <input type="text" class="form-control" readonly>
                                <input type="text" class="form-control" readonly style="width:20%">
                            </div>
                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                <input type="text" class="form-control" readonly>
                                <input type="text" class="form-control" readonly style="width:20%">
                            </div>
                    </div>


                    <div class="form-inline d-flex align-items-center justify-content-around">
                            
                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                <input type="text" class="form-control" readonly >
                                <input type="text" class="form-control" readonly style="width:20%">
                            </div>

                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                <input type="text" class="form-control" readonly >
                                <input type="text" class="form-control" readonly style="width:20%">
                            </div>
                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                <input type="text" class="form-control" readonly>
                                <input type="text" class="form-control" readonly style="width:20%">
                            </div>
                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                <input type="text" class="form-control" readonly>
                                <input type="text" class="form-control" readonly style="width:20%">
                            </div>
                    </div>


                    <div class="form-inline d-flex align-items-center justify-content-around">
                            
                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                <input type="text" class="form-control" readonly >
                                <input type="text" class="form-control" readonly style="width:20%">
                            </div>

                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                <input type="text" class="form-control" readonly >
                                <input type="text" class="form-control" readonly style="width:20%">
                            </div>
                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                <input type="text" class="form-control" readonly>
                                <input type="text" class="form-control" readonly style="width:20%">
                            </div>
                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                <input type="text" class="form-control" readonly>
                                <input type="text" class="form-control" readonly style="width:20%">
                            </div>
                    </div>


                    <div class="form-inline d-flex align-items-center justify-content-around">
                            
                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                <input type="text" class="form-control" readonly >
                                <input type="text" class="form-control" readonly style="width:20%">
                            </div>

                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                <input type="text" class="form-control" readonly >
                                <input type="text" class="form-control" readonly style="width:20%">
                            </div>
                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                <input type="text" class="form-control" readonly>
                                <input type="text" class="form-control" readonly style="width:20%">
                            </div>
                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                <input type="text" class="form-control" readonly>
                                <input type="text" class="form-control" readonly style="width:20%">
                            </div>
                    </div>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                        </form>

-->
                                                          
                                                                            
                                </div>
                            </div>
                        </div>

                </div>


    <div class="emp_profile_tab2 container pb-5 pt-5" id="panel-2">

            <div class="container">

                <div class="d-flex flex-column pb-4">

                    <p class="text-center">BALANCE FORWARDED AS OF </p>

                        <div class="d-flex align-items-center justify-content-center">

                           <div class="d-flex flex-column">
                                <h4 style=" border-right: 1px solid #000; padding:0 20px">8.0 </h4> 
                                <span class="text-center">VL</span>
                           </div>

                           <div class="d-flex flex-column">
                                <h4 style="border-right: 1px solid #000; padding: 0 20px">8.0 </h4> 
                                <span class="text-center">SL</span>
                           </div>

                           <div class="d-flex flex-column">
                                <h4 style="padding: 0 20px">8.0 </h4> 
                                <span class="text-center">Total</span>
                           </div>
                          
                        </div>

                </div>

                <div class="row">

                <div class="col-lg-1"></div>

                        <div class="col-lg-11">
                            <div class="form-inline d-flex  justify-content-around">
                            
                                <div class="form-group mx-sm-3 mb-2" >
                                    <label for="" style="color:#54A04B; width:120px ">VACATION LEAVE</label>
                                </div>
                                <div class="form-group mx-sm-3 mb-2" >
                                    <label for="" style="color:#54A04B; width:120px ">SICK LEAVE</label>
                                </div>
                                <div class="form-group mx-sm-1 mb-2" >
                                    <label for="" style="color:#54A04B; width:80px ">SPL</label>
                                </div>
                                <div class="form-group mx-sm-1 mb-2" >
                                    <label for="" style="color:#54A04B; width:80px ">FORCE LEAVE</label>
                                </div>
                                <div class="form-group mx-sm-1 mb-2" >
                                    <label for="" style="color:#54A04B; width:100px ">LEAVE WITHOUT PAY</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 m-0 p-0 form-inline"> 
                    

                    <?php 

                    $array = array("January", "February", "March" , "April" ,"May" ,"June" ,"July" ,"August","September","October","November","December");

                    $year = date("Y");


                    for($i=0 ; $i < 12 ; $i++){ 

                    require "leave_credits.php";
                            
                    ?>

                    <div class="form-group mx-sm-1 mb-1" >

                        <label for="" class="mr-2" style="width:100px;"><?php echo $array[$i]?></label>

                        <input type="text" class="form-control " style="width:110px; "readonly value="<?php echo $ini_vl_pts[$i]?>">
                        <input type="text" class="form-control mr-2" readonly style="width:110px;" value="<?php echo $vl_pts?>days">

                        <input type="text" class="form-control"  readonly style="width:110px;" value="<?php echo $ini_sl_pts[$i]?>" >
                        <input type="text" class="form-control mr-3" readonly style="width:110px;" value="<?php echo $sl_pts?>days">

                        
                        <input type="text" class="form-control mr-3" readonly style="width:110px;" value="<?php echo $spl_date_diff?>days">

                        
                        <input type="text" class="form-control mr-3" readonly style="width:110px;" value="<?php echo $lwp_date_diff?>days">

                        <input type="text" class="form-control mr-3" readonly style="width:110px;" value="<?php echo $lwp_date_diff?>days">
                </div>


        <?php
        
       
        
        }?>

<!--
                                            <form class="form-inline">
                                                
                                                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                                <input type="text" class="form-control" readonly >
                                                                <input type="text" class="form-control" readonly style="width:20%">
                                                            </div>

                                                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                                <input type="text" class="form-control" readonly >
                                                                <input type="text" class="form-control" readonly style="width:20%">
                                                            </div>
                                                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                                <input type="text" class="form-control" readonly>
                                                                <input type="text" class="form-control" readonly style="width:20%">
                                                            </div>
                                                            <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                                <input type="text" class="form-control" readonly>
                                                                <input type="text" class="form-control" readonly style="width:20%">
                                                            </div>
                                        </form>

                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                        </form>

                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                        </form>


                                        <form class="form-inline">
                                                
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>

                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly >
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                                <div class="form-group mx-sm-1 mb-2" style="width:170px;">
                                                    <input type="text" class="form-control" readonly>
                                                    <input type="text" class="form-control" readonly style="width:20%">
                                                </div>
                                        </form>
-->

                                                          
                                                                            
                                </div>
                            </div>
                        </div>

                </div> <!-- end of leave credits -->

                </div>
            </div>
        </div>
    </div>