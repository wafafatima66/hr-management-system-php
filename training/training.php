<?php include '../includes/link.php'; ?>
<?php include '../includes/header.php'; ?>




<?php
if(isset($_GET['submit'])){
    if($_GET['submit']=="error"){
        echo'<p class="alert alert-danger h6">TRAINING NOT ADDEDD SUCCESSFULLY ! TRY AGAIN</p>';
    }else  if($_GET['submit']=="success"){
        echo'<p class="alert alert-success h6"> TRAINING ADDEDD SUCCESSFULLY </p>';
    }else  if($_GET['submit']=="noid"){
      echo'<p class="alert alert-danger h6"> EMPLOYEE NOT FOUND ! </p>';
  }else  if($_GET['submit']=="update"){
    echo'<p class="alert alert-success h6"> TRAINING FORM UPDATED ! </p>';
}else  if($_GET['submit']=="notupdate"){
  echo'<p class="alert alert-danger h6"> TRAINING FORM NOT UPDATED  ! </p>';
}
}

if(isset($_GET['delete'])){

    if($_GET['delete']=="error"){
        echo'<p class="alert alert-danger h6">TRAINING NOT DELETED ! TRY AGAIN</p>';
    }else  if($_GET['delete']=="success"){
        echo'<p class="alert alert-success h6"> TRAINING DELETED SUCCESSFULLY </p>';
    }
}
?>


<?php require "training_first_box.php"  ?>

<?php require "training_second_box.php"  ?>


<!--button to add training-->
            <!-- Modal -->

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
// to find ut does employee exist 

$(document).ready(function(){
    $(".emp_id").keyup(function(){
        $.ajax({
            url:'training-message.php',
            type : 'post',
            
            data: {
                emp_id : $(this).val()
                },
            success : function(result){
                
                $('#space').html(result);
                

            }
        });
    });

});


</script>

   <?php require "training_modal.php"; ?>
   <?php require "first_box-config/view_training_modal.php"; ?>

   <script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>