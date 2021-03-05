    <!--File uploaad-->
                        <div class=" emp_profile_section2_tab mb-5" id="tab-3">  


                   <div class="container">
                        <div class="row">
                                    <div class="col-lg-9 d-flex align-items-end pr-0">
                                    
                                            <div class="emp_profile_section2_header " style="width:100%">
                                                <h3 class="p-2 m-2" > FILE 201 </h3>
                                            </div>
                                    </div>

                                    <div class="col-lg-3 pl-0">
                    <div class="emp_profile_image" style="height:250px"> 
                        <img src="<?php echo $emp_image?>" alt="" style="width:100%;height:100%">
                    </div>
                </div>
                                    
                        
                        </div>
                   </div>


                       <div class="container">
                             <div class="file_section_body">
                                <div class="container file_section_body_container p-4">

                                        <div class="row">

                                        


                                         


                                          <div class="col-lg-2">
                                                <h6>PDS</h6>
                                                
                                                <a href="" type="submit" data-toggle="modal" data-target="#pdsfile"><i class="fas fa-folder-open" style="" name="pds" ></i></a>
                                            </div>

                                           

                                           

                                            <div class="col-lg-2">
                                                <h6>IPCR</h6>
                                              
                                                <a href="" type="submit" data-toggle="modal" data-target="#ipcrfile"><i class="fas fa-folder-open" style="" name="ipcr" ></i></a>
                                            </div>

                                         
                                            <div class="col-lg-2">
                                                <h6>SALN</h6>
                                                <a href="" type="button" data-toggle="modal" data-target="#salnfile"><i class="fas fa-folder-open" style=""></i></a>
                                            </div>

                                            <div class="col-lg-2">
                                                <h6>OTHERS</h6>
                                                <a href="" type="button" data-toggle="modal" data-target="#othersfile"><i class="fas fa-folder-open" style=""></i></a>
                                            </div>
                                           
                                         

                                        </div>

                                        
                                                 
                                </div>
                                       
                                <div class="text-right mt-2 ">

                                <button class="btn" type="button" style="background: #345587;color:#fff;" data-toggle="modal" data-target="#uploadfile">UPLOAD</button>
                        </div>    
                              
                            </div>

                           
                       
                       
                       </div>


                    </div>


                   

                     <!-- Modal -->
      <div class="modal fade addemployee" id="uploadfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
          <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
              <div class="modal-content">

                <div class="modal-header">
                  <h3 class="modal-title">Upload File 201</h3>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                </div>

                 <div class="modal-body">

                    <div class="container">
                     

                      <form class="form-inline " method="post" action="includes/file_config.php" enctype="multipart/form-data">

                      

                      <div class="form-group mx-sm-3 mb-2">
                            <label for="">Folder</label>
                            <select class="form-control" name="folder" style="font-size:12px" required>
                              <option value="pds"> PDS</option>
                              <option value="ipcr" >IPCR</option>
                              <option value="saln" >SALN</option>
                              <option value="other" >OTHERS</option>
                          </select>
                        </div>
                        

                   
                    
                        <input type="hidden" name="emp_id" value="<?php echo $emp_id?>" id="emp_id">

                      <div class="doc_section" style="width:100%">
                    <div class="file-upload-wrapper">
                    <input type="file" id="input-file-max-fs" class="file-upload"  name="upload_file" />
                    </div>
                </div>
                     
                     
                        
                        </div>                  
                            
                      </div>
                       


                <div class="modal-footer ">
                    
                   
                   <div class="text-center">
                    <button type="submit" name="upload" class="btn btn-two" >Upload</button>
                   </div>

                
                </div>

                </form>


            </div>
        </div>
      </div>


       
 <!--modal for pds-->

 <div class="modal fade  addemployee" id="pdsfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >

<div class="modal-dialog modal-dialog-centered modal-xl" role="document">

    <div class="modal-content">

      <div class="modal-header">
        <h3 class="modal-title">PDS FILES</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
      </div>

       <div class="modal-body">


              
<table width="80%" class="table table-sm table-bordered file-section-table">
<tr>
<th>File Name</th>
<th>File Date</th>
<th>File Type</th>
<th>File Size(KB)</th>
<th>View</th>
</tr>


<?php

if(isset( $_REQUEST["emp_id"])){

  $emp_id = $_REQUEST["emp_id"];
}
    
require '../includes/conn.php';

$file_folder = "pds";
$query = "SELECT * FROM emp_file WHERE emp_id = '$emp_id' AND file_folder='$file_folder'";

$runquery = $conn -> query($query);
if($runquery == true){


while($data = $runquery -> fetch_assoc()){
?>
        <tr>
        <td><?php echo $data['file_name'] ?></td>
        <td><?php echo $data['file_date'] ?></td>
        <td><?php echo $data['file_type'] ?></td>
        <td><?php echo $data['file_size'] ?></td>
        <td><a href="../uploads/<?php echo $data['file_name'] ?>" target="_blank">view file</a></td>
        </tr>

    <?php
    }

}


?>
</table>
     

          </div>
             


     
     


  </div>
</div>
</div>




       
 <!--modal for //ipcr-->

 <div class="modal fade  addemployee" id="ipcrfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >

<div class="modal-dialog modal-dialog-centered modal-xl" role="document">

    <div class="modal-content">

      <div class="modal-header">
        <h3 class="modal-title">IPCR FILES</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
      </div>

       <div class="modal-body">


              
<table width="80%" class="table table-sm table-bordered file-section-table">
<tr>
<th>File Name</th>
<th>File Date</th>
<th>File Type</th>
<th>File Size(KB)</th>
<th>View</th>
</tr>


<?php

if(isset( $_REQUEST["emp_id"])){

  $emp_id = $_REQUEST["emp_id"];
}

    
require '../includes/conn.php';

$file_folder = "ipcr";
$query = "SELECT * FROM emp_file WHERE emp_id = '$emp_id' AND file_folder='$file_folder'";

$runquery = $conn -> query($query);
if($runquery == true){


while($data = $runquery -> fetch_assoc()){
?>
        <tr>
        <td><?php echo $data['file_name'] ?></td>
        <td><?php echo $data['file_date'] ?></td>
        <td><?php echo $data['file_type'] ?></td>
        <td><?php echo $data['file_size'] ?></td>
        <td><a href="../uploads/<?php echo $data['file_name'] ?>" target="_blank">view file</a></td>
        </tr>

    <?php
    }

}


?>
</table>
     

          </div>
             


     
     


  </div>
</div>
</div>
              


       
 <!--modal for//sapn-->

 <div class="modal fade  addemployee" id="salnfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >

<div class="modal-dialog modal-dialog-centered modal-xl" role="document">

    <div class="modal-content">

      <div class="modal-header">
        <h3 class="modal-title">SALN FILES</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
      </div>

       <div class="modal-body">


              
<table width="80%" class="table table-sm table-bordered file-section-table">
<tr>
<th>File Name</th>
<th>File Date</th>
<th>File Type</th>
<th>File Size(KB)</th>
<th>View</th>
</tr>


<?php


if(isset( $_REQUEST["emp_id"])){

  $emp_id = $_REQUEST["emp_id"];
} 

    
require '../includes/conn.php';

$file_folder = "saln";
$query = "SELECT * FROM emp_file WHERE emp_id = '$emp_id' AND file_folder='$file_folder'";

$runquery = $conn -> query($query);
if($runquery == true){


while($data = $runquery -> fetch_assoc()){
?>
        <tr>
        <td><?php echo $data['file_name'] ?></td>
        <td><?php echo $data['file_date'] ?></td>
        <td><?php echo $data['file_type'] ?></td>
        <td><?php echo $data['file_size'] ?></td>
        <td><a href="../uploads/<?php echo $data['file_name'] ?>" target="_blank">view file</a></td>
        </tr>

    <?php
    }

}


?>
</table>
     

          </div>
             


     
     


  </div>
</div>
</div>
              


       
 <!--modal for //others-->

 <div class="modal fade  addemployee" id="othersfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >

<div class="modal-dialog modal-dialog-centered modal-xl" role="document">

    <div class="modal-content">

      <div class="modal-header">
        <h3 class="modal-title">OTHERS FILES</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
      </div>

       <div class="modal-body">


              
<table width="80%" class="table table-sm table-bordered file-section-table">
<tr>
<th>File Name</th>
<th>File Date</th>
<th>File Type</th>
<th>File Size(KB)</th>
<th>View</th>
</tr>


<?php


if(isset( $_REQUEST["emp_id"])){

  $emp_id = $_REQUEST["emp_id"];
}

    
require '../includes/conn.php';

$file_folder = "other";
$query = "SELECT * FROM emp_file WHERE emp_id = '$emp_id' AND file_folder='$file_folder'";

$runquery = $conn -> query($query);
if($runquery == true){


while($data = $runquery -> fetch_assoc()){
?>
        <tr>
        <td><?php echo $data['file_name'] ?></td>
        <td><?php echo $data['file_date'] ?></td>
        <td><?php echo $data['file_type'] ?></td>
        <td><?php echo $data['file_size'] ?></td>
        <td><a href="../uploads/<?php echo $data['file_name'] ?>" target="_blank">view file</a></td>
        </tr>

    <?php
    }

}


?>
</table>
     

          </div>
             


     
     


  </div>
</div>
</div>
              
              

