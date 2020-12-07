<?php

if(isset($_POST['search'])){
   
   $search = $_POST['search'];
    $search = "%$search%";
    
    require '../includes/conn.php';

    if(strlen($search)> 2){
        
        $query = "SELECT doc_name,doc_date,doc_type FROM doc WHERE doc_name like '$search' UNION ALL SELECT  file_name ,file_date,file_type from emp_file WHERE file_name like '$search'  ";
        

        if($runquery = $conn -> query($query))
       {

        while($data = $runquery -> fetch_assoc()){

            $doc_name=  $data["doc_name"];
            $doc_date=  $data["doc_date"];
            $doc_type=  $data["doc_type"];
           
            

            echo '  <ul >
            <a href="../uploads/' .$doc_name .'" target="_blank" style="text-decoration:none; color:black;"> 
            <li class="active"><span style="font-weight:bold;">' .$doc_name. '</span><p><small style="font-style:italic;">Date uploaded </small> <small style="font-weight:bold;">' .$doc_date. '</small>   |   <small style="font-style:italic;">File type </small><small style="font-weight:bold;">' .$doc_type. '</small></p>
            </li>
            </a>
           
        </ul>';

        }
    } else {
        echo "hi";
    }
}
    
}


?>