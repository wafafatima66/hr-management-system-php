
<?php



if(isset($_POST['upload'])){

    $emp_id = $_SESSION['emp_id']; 

    if($_FILES["upload_file"]["name"] != " "){

        $date = date("l jS \of F Y ");
        $folder = $_POST["folder"];
        $file_name = $_FILES["upload_file"]["name"]; 
    $tempname = $_FILES["upload_file"]["tmp_name"];  
    $path = "../emp_mang/uploads/".$folder."/".$date.$file_name; 

    if (move_uploaded_file($tempname, $path))  { 
        $msg = " File uploaded successfully"; 
    }else{ 
        $msg = " File uploaded failed";
        }

        $pds = ""; $ipcr = ""; $saln = ""; $others = ""; 

        if($folder=="pds"){
            $pds = $file_name;
        }else  if($folder=="ipcr"){
            $ipcr = $file_name;
        }else  if($folder=="saln"){
            $saln = $file_name;
        } else {
            $others = $file_name;
        }


        $sql="INSERT INTO emp_file (pds, ipcr, saln,others,emp_id) VALUE (?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:emp_mang.php?error=sqlerror");
            exit();
        }
            else{
            
                mysqli_stmt_bind_param($stmt,"ssssi", $pds, $ipcr, $saln,$others,$emp_id);
                mysqli_stmt_execute($stmt);

            

               $msg = " File uploaded successfully";
            }

            mysqli_stmt_close($stmt);
            mysqli_close($conn);

        /*$data = explode(".",$_FILES["upload_file"]["name"]);
        $extension = $data[1];
        $new_file_name = rand().'.'.$extension;
        $path = $_POST["folder"]."/".$new_file_name;
        if(move_uploaded_file($_FILES["upload_file"]["tmp_name"],$path)){
            echo "image uploaded";
        }else echo "image not uploaded";
    }else {echo "no file ";}*/
}

} else {
    $msg = 'File uploaded Failed';
}



?>

                        <!--File uploaad-->
                        <div class=" emp_profile_section2_tab container " id="tab-3">  


                   <div class="container">
                        <div class="row">
                                    <div class="col-lg-9 d-flex align-items-end pr-0">
                                    
                                            <div class="emp_profile_section2_header " style="width:100%">
                                                <h3 class="p-2 m-2" > FILE 201 </h3>
                                            </div>
                                    </div>

                                    <div class="col-lg-3 pl-0">
                                        <div class="emp_profile_image"> 
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
                                                <i class="fas fa-folder-open" style=""></i>
                                            </div>

                                            <div class="col-lg-2">
                                                <h6>IPCR</h6>
                                                <i class="fas fa-folder-open" style=""></i>
                                            </div>

                                            <div class="col-lg-2">
                                                <h6>SALN</h6>
                                                <i class="fas fa-folder-open" style=""></i>
                                            </div>

                                            <div class="col-lg-2">
                                                <h6>OTHERS</h6>
                                                <i class="fas fa-folder-open" style=""></i>
                                            </div>

                                        </div>

                                        
                                                 
                                </div>
                                       
                                <div class="text-right mt-2 ">

                                <button class="btn" type="button" style="background: #345587;color:#fff;" data-toggle="modal" data-target="#uploadfile">UPLOAD</button>
                        </div>    
                              
                            </div>

                           
                       
                       
                       </div>


                    </div>


                    <!--modal-->

                     <!-- Modal -->
      <div class="modal fade addemployee " id="uploadfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
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
                     

                      <form class="form-inline " method="post" action="" enctype="multipart/form-data">

                      

                      <div class="form-group mx-sm-3 mb-2">
                            <label for="">Folder</label>
                            <select class="form-control" name="folder" style="font-size:12px" required>
                              <option value="pds"> PDS</option>
                              <option value="ipcr" >IPCR</option>
                              <option value="saln" >SALN</option>
                              <option value="other" >OTHERS</option>
                          </select>
                        </div>
                        

                   
                    
                  

                      <div class="doc_section" style="width:100%">
                    <div class="file-upload-wrapper">
                    <input type="file" id="input-file-max-fs" class="file-upload" data-max-file-size="2M" name="upload_file" />
                    </div>
                </div>
                     
                     
                        
                        </div>                  
                            
                      </div>
                       


                <div class="modal-footer ">
                    
                   
                   <div class="text-center">
                    <button type="submit" name="upload" class="btn btn-two">Upload</button>
                   </div>

                
                </div>

                </form>


            </div>
        </div>
      </div>
                  