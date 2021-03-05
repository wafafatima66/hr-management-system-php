<?php include('../index/session.php');
?>

<?php include 'local-link.php'; ?>

<?php

require '../includes/conn.php';

$ses_sql = mysqli_query($conn,"select admin_photo from users where username = '$login_session' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   //$admin_photo = $row['admin_photo'];

   $admin_photo = '../uploads/image/'.$row['admin_photo'];

?>
<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <div class="sidebar-header d-flex flex-column pt-3">
          <div class="text-center">
            <img src="<?php echo $admin_photo;?>" alt="" style="width:200px; height:200px;">
            <span style="font-weight:bold;">ALJEN BLESS TICANGAN</span>
            <span>Administrator</span>
          </div>
           
        </div>
        
     
        <div class="sidebar-menu" >
            <div class="list-group ">
                <a href="../home/home.php" class="sidebar-link" >Home</a>
                <a href="../emp_mang/emp_mang.php" class="sidebar-link">Employee Management</a>
                <a href="../leave_mang/leave_mang.php" class="sidebar-link" >Leave Management</a>
                <a href="../doc/doc.php" class="sidebar-link" >Documents</a>
                <a href="../training/training.php" class="sidebar-link">Training/Seminars</a>
                <a href="../calendar/calendar.php"  >Calendar and Events</a>
                <a href="../reports/reports.php" >Reports</a>
              </div>

             
        </div>

      
    
    </div>
    <!-- /#sidebar-wrapper -->

        <!-- Page Content -->

    <!---Main header-->

    <?php include '../settings/setting.php'; ?>

    <div id="page-content-wrapper">

    <nav class="navbar navbar-expand-lg main-header">
      <h4 class="navbar-brand" >HUMAN RESOURCES MANAGEMENT SYSTEM</h4>
          <ul class="navbar-nav ml-auto nav-flex-icons">
              <li class="nav-item">
                <a class="nav-link" type="button"  data-toggle="modal" data-target="#setting">
                  <i class="fas fa-cog nav-icon" style="color:#E6AD0F"></i>
                  <p>Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../index/logout.php" class="nav-link">
                  <i class="fas fa-sign-out-alt nav-icon" style="color:#E6AD0F"></i>
                  <p>Logout</p>
                </a>
              </li>
          
    </nav>
    

<!---End of Main header-->


      
   

 