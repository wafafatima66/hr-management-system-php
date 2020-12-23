      <?php      
if(isset( $_REQUEST["emp_id"])){

$emp_id = $_REQUEST["emp_id"];

require '../includes/conn.php';

//$dltquery = "DELETE FROM pds WHERE emp_id = $emp_id"; 

$runquery = $conn -> query("DELETE FROM emp_leaves WHERE emp_id = $emp_id");
$runquery = $conn -> query("DELETE FROM per_emp_leaves WHERE emp_id = $emp_id");


if($runquery==true){
    header("Location:leave_mang.php?submit=success");
    exit();
}
    else   {
     header("Location:leave_mang.php?submit=error");
    exit();
    }
}
