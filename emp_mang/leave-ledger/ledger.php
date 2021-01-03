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
                    
                        <?php 
                        // leave summary section
                        require "ledger_leave_summary.php"
                        ?>


                            <?php 
                            // leave summary section
                            require "ledger_leave_credits.php"
                            ?>


                    </div>
            </div>
        </div>
    </div>

    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
$(document).ready(function(){
    
    $("#vl_pts , #sl_pts").keyup(function()
    {
        $.ajax({
            url:'../emp_mang/ledger_config.php',
            type : 'post',
            data: {vl_pts : $("#vl_pts").val(), sl_pts: $("#sl_pts").val(),emp_id: $("#leave_emp_id").val()},
            //dataType: 'json',
            success : function(result){
                
                $('#space').html(result);
              

            }
        });
    });

    });


</script>