
<?php 
session_start();

if(isset($_POST['submit'])){

    $emp_id = $_SESSION['emp_id'];

   
    $ele_school_name=$_POST['ele_school_name'];
    $ele_degree=$_POST['ele_degree'];
    $ele_from_date=$_POST['ele_from_date'];
    $ele_to_date=$_POST['ele_to_date'];
    $ele_units=$_POST['ele_units'];
    $ele_award=$_POST['ele_award'];
    $ele_graduation=$_POST['ele_graduation'];

    $sec_school_name=$_POST['sec_school_name'];
    $sec_degree=$_POST['sec_degree'];
    $sec_from_date=$_POST['sec_from_date'];
    $sec_to_date=$_POST['sec_to_date'];
    $sec_units=$_POST['sec_units'];
    $sec_award=$_POST['sec_award'];
    $sec_graduation=$_POST['sec_graduation'];

    $voc_school_name=$_POST['voc_school_name'];
    $voc_degree=$_POST['voc_degree'];
    $voc_from_date=$_POST['voc_from_date'];
    $voc_to_date=$_POST['voc_to_date'];
    $voc_units=$_POST['voc_units'];
    $voc_award=$_POST['voc_award'];
    $voc_graduation=$_POST['voc_graduation'];

    $coll_school_name=$_POST['coll_school_name'];
    $coll_degree=$_POST['coll_degree'];
    $coll_from_date=$_POST['coll_from_date'];
    $coll_to_date=$_POST['coll_to_date'];
    $coll_units=$_POST['coll_units'];
    $coll_award=$_POST['coll_award'];
    $coll_graduation=$_POST['coll_graduation'];

    $gra_school_name=$_POST['gra_school_name'];
    $gra_degree=$_POST['gra_degree'];
    $gra_from_date=$_POST['gra_from_date'];
    $gra_to_date=$_POST['gra_to_date'];
    $gra_units=$_POST['gra_units'];
    $gra_award=$_POST['gra_award'];
    $gra_graduation=$_POST['gra_graduation'];


 
    
    require '../../includes/conn.php';

     
                    
            $sql="INSERT INTO edu_background (ele_school_name ,ele_degree,ele_from_date,ele_to_date,ele_units,ele_award,ele_graduation,sec_school_name ,sec_degree,sec_from_date,sec_to_date,sec_units,sec_award,sec_graduation,voc_school_name ,voc_degree,voc_from_date,voc_to_date,voc_units,voc_award,voc_graduation,coll_school_name ,coll_degree,coll_from_date,coll_to_date,coll_units,coll_award,coll_graduation,gra_school_name ,gra_degree,gra_from_date,gra_to_date,gra_units,gra_award,gra_graduation,emp_id) VALUE (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";

        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location:../emp_profile.php?error=sqlerror");
            exit();
        }
            else{


                mysqli_stmt_bind_param($stmt,"ssssissssssissssssissssssissssssissi",$ele_school_name, $ele_degree, $ele_from_date,$ele_to_date,$ele_units,$ele_award,$ele_graduation,$sec_school_name,$sec_degree,$sec_from_date,$sec_to_date,$sec_units,$sec_award,$sec_graduation,$voc_school_name,$voc_degree,$voc_from_date,$voc_to_date,$voc_units,$voc_award,$voc_graduation,$coll_school_name,$coll_degree,$coll_from_date,$coll_to_date,$coll_units,$coll_award,$coll_graduation,$gra_school_name,$gra_degree,$gra_from_date,$gra_to_date,$gra_units,$gra_award,$gra_graduation,$emp_id);
                mysqli_stmt_execute($stmt);
                header("Location:../emp_profile.php?submit=edu");
                        exit();
            }

             

    
    

         
          
              
          mysqli_stmt_close($stmt);
          mysqli_close($conn);
            
         
}
    
         

    else
    {
        header("Location:../emp_profile.php");
        exit();
    }
    
  
  ?>