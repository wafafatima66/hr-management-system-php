<?php include '../includes/link.php'; ?>
<?php include '../includes/header.php'; ?>

<style type="text/css">


@media print
{
    #printableArea { display:block;}
    #action { visibility: hidden; }
}
</style>


<script>

// to get the id from leave management first box
$(document).ready(function(){
    $("#emp_id").keyup(function(){
        $.ajax({
            url:'leave_mang-config.php',
            type : 'post',
            data: {emp_id : $(this).val()},
            dataType: 'json',
            success : function(result){
                
                $('#emp_first_name').val(result.emp_first_name);
                $('#emp_middle_name').val(result.emp_middle_name);
                $('#emp_last_name').val(result.emp_last_name);
                $('#emp_ext').val(result.emp_ext);
                $('#emp_status').val(result.emp_status);
                $('#emp_salary').val(result.emp_salary);

            }
        });
    });

});


</script>

<script>

//to get date from leave management first box to load credits points in the small table
$(document).ready(function(){
   
    $("#leave_to_date").change(function(){
        $.ajax({
            url:'get_leave_credits.php',
            type : 'post',
            data: {leave_to_date : $(this).val() , leave_from_date : $("#leave_from_date").val(), type_of_leave: $("#type_of_leave").val()},
           dataType: 'json',
            success : function(result){
               
                $('#vl_pts').html(result.vl_pts); // getting vacation  leaves points from database
                $('#sl_pts').html(result.sl_pts); // getting sick  leaves points from database
               
               
                $('#pts_total').html(result.pts_total); // getting total points from calculing vl_pts and sl_pts
                $('#total_pts_now').html(result.total_pts_now); // getting pints calculating from vi_now-pts and sl_now_pts
                $('#vl_bal').html(result.vl_bal); // vl_pts - vl_now_pts
                $('#sl_bal').html(result.sl_bal); // sl_pts - sl_now_pts
                $('#total_bal').html(result.total_bal); //vl_bal - sl_bal
                
               //$('#space').html(result);
              
               $('#vl_now_pts').html(result.vl_now_pts); // getting vacation  leaves points date given 
                $('#sl_now_pts').html(result.sl_now_pts); // getting sick leaves points from date given
            }
        });
    });

});


</script>



<?php

if(isset($_GET['leave'])){
    if($_GET['leave']=="error"){
        echo'<p class="alert alert-danger h6">LEAVE FORM NOT UPDATED ! TRY AGAIN</p>';
    }else  if($_GET['leave']=="success"){
        echo'<p class="alert alert-success h6">LEAVE FORM UPDATED</p>';
    }
}
?>


<?php 
// leave management first box 
require "leave_mang_first_box.php"  ?>

<!-- leave summary section -->
<div class="leave_mang_section">

<?php 
// leave management first box 
require "leave_mang_second_box.php"  ?>    
    
   

                     <div class="container mt-2 mb-5">
                            <div class="text-right">
                                <button class="btn" style="background: #345587;color:#EFE20A;" onclick="printDiv('printableArea_leave_summary')" type="button" >PRINT</button>
                            </div>
                    </div>

    </div>


    <script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>