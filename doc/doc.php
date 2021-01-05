<?php include '../includes/link.php'; ?>
<?php include '../includes/header.php'; ?>

<style>
.file-upload{
    width:95%;
    border:solid 1px #40A6EB;
    height:120px;
    padding:20px;
    margin:20px;
    color: blue;
    text-transform:italic;
    font-weight:bold;
}
.file{
    width:900px;
    height:120px;
   
}


</style>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#search").keyup(function(){
        $.ajax({
            url:'doc-search.php',
            type : 'post',
            data: {search : $(this).val()},
            success : function(result){
                $("#search_section").html(result)

            }
        });
    });

});

</script>


<?php
 if(isset($_GET['upload'])){
    if($_GET['upload']=="success"){
      echo'<p class="alert alert-success h6">FILE UPLOADED SUCCESSFULLY</p>';
    }
    if($_GET['upload']=="exist"){
        echo'<p class="alert alert-danger h6">FILE EXIST IN THE FOLDER</p>';
      } if($_GET['upload']=="failed"){
        echo'<p class="alert alert-danger h6">FILE FAILED TO UPLOAD</p>';
      }if($_GET['upload']=="error"){
        echo'<p class="alert alert-danger h6">ERROR TO UPLOAD FILE</p>';
      }
   
    }

?>



<div class="container">

<form  method="post" action="doc-config.php" enctype="multipart/form-data">

    <div class="doc_section">
        <div class="file-upload-wrapper">
        <label  class="file-upload  "  >  CLICK AND DRAG YOUR FILES HERE 
            <input  type="file" multiple  name="upload_file[]"  class="file"  />
            
        </label>
      
        </div>

    </div>

    <div class="text-center">
        <button class="btn doc_section_btn" name="upload" type="submit">UPLOAD</button>
    </div>
</form>






    <div class="doc_section_header">
        <div class="d-flex flex-column">
        <div class="text-center">
            <span>Search Document</span>
            <input class="form-control mx-auto" type="text" placeholder="Search"  style="width:250px;" id="search" name="search" >
        </div>
        </div>
    </div>

    

    <div class="doc_section" id="search_section">
  
    </div>

</div>

<script>



</script>