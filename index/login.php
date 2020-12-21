<?php 


require '../includes/conn.php';
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']); 
    
    $sql = "SELECT user_id FROM users WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   // $active = $row['active'];
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
      
    if($count == 1) {
      // session_register("username");
       $_SESSION['login_user'] = $username;
       
       header("location:../home/home.php");
    }else {
        header("location: login.php?error");
    }
 }

?>



<?php include '../includes/link.php'; ?>

<style>
body{
    height: 100%;
    background-color: #F3F3F3;
}

#login .container #login-row #login-column #login-box {
    
  margin-top: 120px;
  max-width: 600px;
  height: 320px;
  border: 1px solid #345587;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
.font_blue_color{
    color:  #345587;
   
}
.login_submit{
    background:  #345587;
    color: #fff;
    font-weight: bold ; 
}

.login_submit:hover{
    color: #fff ; 
    
}


</style>



    <nav class="navbar navbar-expand-lg main-header ">
      <h4 class="navbar-brand " >HUMAN RESOURCES MANAGEMENT SYSTEM</h4>
   </nav>

   <?php


if(isset($_GET['error'])){
 
        echo'<p class="alert alert-danger h6">Your Login Name or Password is invalid</p>';
 

}  




?>

    <div id="login">
       

        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center font_blue_color">Login</h3>

                            <div class="form-group">
                                <label for="username" class="font_blue_color">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="password" class="font_blue_color">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>

                            <div class="form-group">
                               <button type="submit" name="submit" class="btn login_submit">Submit</button>
                                
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

