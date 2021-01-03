
<style>

.emp_image .modal-content{
    background-color: #f3f3f3;
}
.emp_image .modal-header{
    background-color: #345587;
    color: #fff;
}

.emp_image .modal-header button{
    color: #fff;
}
.emp_image .modal-body h6{
    color: #345587;
    font-weight: bold;
}

.emp_image .modal-footer .btn{
    color: #fff;
    font-weight: bold;
}
.emp_image .modal-footer .btn-one{
    background-color: #FC904F;
    
}

.emp_image .btn-two{
    background-color: #345587;
    color:#fff;
}

.emp_image label{
    font-size: 12px;
    font-weight: bold;
    color:#345587 ;
    margin-right: 12px;
}
.emp_image input{
    font-size: 12px;
  
}
</style>
 <?php
 require '../includes/conn.php';

 if(isset($_POST['emp_image'])){

    $emp_id=$_POST['emp_id'];

  

    $emp_image = $_FILES["emp_image"]["name"]; 
    $tempname = $_FILES["emp_image"]["tmp_name"];     
    $folder = "../uploads/image/".$emp_image; 

    if (move_uploaded_file($tempname, $folder))  { 

    

         
        $query = "UPDATE add_emp SET emp_image='$emp_image' WHERE emp_id= '$emp_id' " ;


        $runquery = $conn -> query($query);
  
}
 }

 ?>


<div class="modal fade emp_image " id="emp_image" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
          <div class="modal-dialog modal-dialog-centered modal" role="document">
              <div class="modal-content">

                <div class="modal-header">
                  <h3 class="modal-title">emp_image</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                </div>

                 <div class="modal-body">

                                                <!--Section: Block Content-->
               
                                               
                <div class="container">

              

                        <section class="mb-5 text-center">

                            <h6>Set Profile Photo</h6>

                            <form action="" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="emp_id"  id="emp_id">
                            

                                <div class="form-inline mx-sm-3 mb-2 mt-4">
                                
                                <label for="">Change Image</label>
                                    <input type="file" name="emp_image"   >
                                </div>

                            

                                <button type="submit" class="btn btn-two mt-2" name="emp_image">Change/Set Photo</button>

                        </form>
                         </section>
                </div>


               
                <!--Section: Block Content-->  
                            
                </div>
                        

               


               
            </div>
        </div>
      </div>