
<style>
.tr-input{
  border:none;
  background:white;
  width:100%;
}

input[type="submit"] { 
    outline: none;
}


</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
/*


$(document).ready(function(){
                        $('.emp_summary').click(function(){
                          $.ajax({
                              url:'export.php?',
                              type : 'post',
                              data: {
                                emp_summary : $(this).data("todo") 
                              },
                              cache: false,
                              success: function(dataResult){
                              window.open('export.php');
                                                  }
                          });
                          
                        });


                        $('.leave_summary').click(function(){
                          $.ajax({
                              url:'export.php?',
                              type : 'post',
                              data: {
                                leave_summary : $(this).data("todo") 
                              },
                               //dataType: 'json',
                              success : function(result){

                                  $('#space').html(result);
                              }
                          });
                          
                        });


                        $('.training_cond').click(function(){
                          $.ajax({
                              url:'export.php?',
                              type : 'post',
                              data: {
                                training_cond : $(this).data("todo") 
                              },
                               //dataType: 'json',
                              success : function(result){

                                  $('#space').html(result);
                              }
                          });
                          
                        });


      
});         

*/
                    </script>



<div class="container ">

<div id="space"></div>

<table class="table table-bordered">
<h6 class="mb-3" >Documents</h6>
<tbody>


    <tr><td><form action="export.php" method="post"> <input type="submit" name="emp_summary" value="Employee Summary" class="tr-input text-left"></form></td></tr>

    <tr><td><form action="export.php" method="post"> <input type="submit" name="leave_summary" value="Leave Summary" class="tr-input text-left"></form></td></tr>

    <tr><td><form action="export.php" method="post"> <input type="submit" name="training_cond" value="Trainings Conducted" class="tr-input text-left"></form></td></tr>



    <!--<form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export" />
    </form>-->
    
  </tbody>
  

  

  



   



 
</table>



</div>