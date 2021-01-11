<?php


require '../includes/conn.php';


if(isset($_POST['search'])){
   
   $from_date = $_POST['from_date'];
   $to_date = $_POST['to_date'];


   $from_date = date("Y-m-d" , strtotime($from_date));
   $to_date = date("Y-m-d" , strtotime($to_date));
  



  

    $query = " SELECT  file_name ,file_date,file_type from emp_file WHERE file_date BETWEEN '$from_date' and '$to_date'  ";

    $runquery = $conn -> query($query);
    $rowcount=mysqli_num_rows($runquery);

    
    if($runquery == true && $rowcount != 0){
        
            while($data = $runquery -> fetch_assoc()){

                $file_name=  $data["file_name"];
                $file_date=  $data["file_date"];
                $file_type=  $data["file_type"];
                
                
                
                echo ' 
                
                <ul >
                <a href="../uploads/' .$file_name .'" target="_blank" style="text-decoration:none; color:black;"> 
                <li class="active"><span style="font-weight:bold;">' .$file_name. '</span><p><small style="font-style:italic;">Date uploaded </small> <small style="font-weight:bold;">' .$file_date. '</small>   |   <small style="font-style:italic;">File type </small><small style="font-weight:bold;">' .$file_type. '</small></p>
                </li>
                </a>
                
                </ul>
                ';
            }
         
    
}   

}  else {
                    

    $query = "SELECT file_name,file_date,file_type FROM emp_file ORDER BY file_no DESC LIMIT 10 ";

    $runquery = $conn -> query($query);
    $rowcount=mysqli_num_rows($runquery);


if($runquery == true ){

while($data = $runquery -> fetch_assoc()){

$file_name=  $data["file_name"];
$file_date=  $data["file_date"];
$file_type=  $data["file_type"];



echo ' 

<ul >
<a href="../uploads/' .$file_name .'" target="_blank" style="text-decoration:none; color:black;"> 
<li class="active"><span style="font-weight:bold;">' .$file_name. '</span><p><small style="font-style:italic;">Date uploaded </small> <small style="font-weight:bold;">' .$file_date. '</small>   |   <small style="font-style:italic;">File type </small><small style="font-weight:bold;">' .$file_type. '</small></p>
</li>
</a>

</ul>
';
}
}
}

?>