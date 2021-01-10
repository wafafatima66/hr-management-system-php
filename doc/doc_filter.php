<?php
if(isset($_POST['search'])){
   
   $from_date = $_POST['from_date'];
   $to_date = $_POST['to_date'];


   $from_date = date("Y-m-d" , strtotime($from_date));
   $to_date = date("Y-m-d" , strtotime($to_date));
  



   require '../includes/conn.php';

    $query = "SELECT doc_name,doc_date,doc_type FROM doc  WHERE doc_date BETWEEN '$from_date' and '$to_date' UNION ALL SELECT  file_name ,file_date,file_type from emp_file WHERE file_date BETWEEN '$from_date' and '$to_date'  ";

    $runquery = $conn -> query($query);
    if($runquery == true){
     
       
    while($data = $runquery -> fetch_assoc()){

        $doc_name=  $data["doc_name"];
        $doc_date=  $data["doc_date"];
        $doc_type=  $data["doc_type"];
       
        

        echo ' 
  
        <ul >
        <a href="../uploads/' .$doc_name .'" target="_blank" style="text-decoration:none; color:black;"> 
        <li class="active"><span style="font-weight:bold;">' .$doc_name. '</span><p><small style="font-style:italic;">Date uploaded </small> <small style="font-weight:bold;">' .$doc_date. '</small>   |   <small style="font-style:italic;">File type </small><small style="font-weight:bold;">' .$doc_type. '</small></p>
        </li>
        </a>
       
    </ul>
   ';
    }
}


}

?>