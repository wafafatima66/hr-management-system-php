<style>

.setting .modal-content{
    background-color: #f3f3f3;
}
.setting .modal-header{
    background-color: #345587;
    color: #fff;
}

.setting .modal-header button{
    color: #fff;
}
.setting .modal-body h6{
    color: #345587;
    font-weight: bold;
}

.setting .modal-footer .btn{
    color: #fff;
    font-weight: bold;
}
.setting .modal-footer .btn-one{
    background-color: #FC904F;
    
}

.setting .btn-two{
    background-color: #345587;
    color:#fff;
}

.setting label{
    font-size: 12px;
    font-weight: bold;
    color:#345587 ;
    margin-right: 12px;
}
.setting input{
    font-size: 12px;
  
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$('#newPass, #newPassConfirm').on('keyup', function () {
  if ($('#newPass').val() != $('#newPassConfirm').val()) {
    $('#message').html('Password Not Matching!').css('color', 'red');
  } else  $('#message').html('');
});

});
</script>


  <!--button to add employye-->
      <!-- Modal -->
      <div class="modal fade setting " id="setting" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
          <div class="modal-dialog modal-dialog-centered modal" role="document">
              <div class="modal-content">

                <div class="modal-header">
                  <h3 class="modal-title">Setting</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                </div>

                 <div class="modal-body">

                                                <!--Section: Block Content-->
               
                                               
                <div class="container">

                <section class="mb-5 text-center">

                    <h6>Set a new password</h6>

                        <form action="../settings/setting-config.php" method="post">

                        <input type="hidden" name="username" value="<?php echo $login_session; ?>">
                        <input type="hidden" name="userid" value="<?php echo $login_session_id; ?>">

                        <span id='message'></span>

                        <div class="form-inline mx-sm-3 mb-2 mt-2">
                           
                            <label  style="width:150px">New password</label>
                            <input type="password"  class="form-control" name="newPass" id="newPass">
                        </div>

                        <div class="form-inline mx-sm-3 mb-2 mt-2">
                         
                            <label  style="width:150px">Confirm password</label>
                            <input type="text"  class="form-control" name="newPassConfirm" id="newPassConfirm">

                        </div>

                        <button type="submit" class="btn btn-two mt-2" name="change_pass">Change password</button>

                        </form>

                        </section>

                        <section class="mb-5 text-center">

                            <h6>Set Profile Photo</h6>

                            <form action="../settings/setting-config.php" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="username" value="<?php echo $login_session; ?>">
                            <input type="hidden" name="userid" value="<?php echo $login_session_id; ?>">

                                <div class="form-inline mx-sm-3 mb-2 mt-4">
                                
                                <label for="">Admin Profile Photo</label>
                                    <input type="file" name="admin_photo"   >
                                </div>

                            

                                <button type="submit" class="btn btn-two mt-2" name="admin_photo">Change/Set Photo</button>

                        </form>
                         </section>
                </div>


               
                <!--Section: Block Content-->  
                            
                </div>
                        

               


               
            </div>
        </div>
      </div>

    

  
  