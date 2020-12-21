

            <div class="report-1 report">
                <canvas id="myChart_1" ></canvas>
            </div>


            
<?php 

//SELECT COUNT(title_of_training) as title  , from emp_learning WHERE title_of_training IS NOT NULL AND LENGTH(`title_of_training`) > 0

//SELECT COUNT(e.emp_status) as status, e.emp_status , p.emp_gender from add_emp e , pds p where p.emp_id = e.emp_id  and emp_gender = "male" and e.emp_sta

require '../includes/conn.php';

$query = "SELECT COUNT(post_school_name) as post  from edu_background WHERE post_school_name IS NOT NULL AND LENGTH(`post_school_name`) > 0 " ;

if($runquery = $conn -> query($query)) {
        while($mydata = $runquery -> fetch_assoc()){
        $post=$mydata["post"];
        if(empty($post)){
            $post = 1; 
        }
  }
    } 

    $query = "SELECT COUNT(gra_school_name) as gra  from edu_background WHERE gra_school_name IS NOT NULL AND LENGTH(`gra_school_name`) > 0 " ;

        if($runquery = $conn -> query($query)) {
                while($mydata = $runquery -> fetch_assoc()){
                $gra=$mydata["gra"];
                if(empty($gra)){
                    $gra = 1; 
                }
        }
            } 

            $query = "SELECT COUNT(coll_school_name) as coll  from edu_background WHERE coll_school_name IS NOT NULL AND LENGTH(`coll_school_name`) > 0 " ;

        if($runquery = $conn -> query($query)) {
                while($mydata = $runquery -> fetch_assoc()){
                $coll=$mydata["coll"];
                if(empty($coll)){
                    $coll = 1; 
                }
        }
            } 

  $query = "SELECT COUNT(sec_school_name) as sec  from edu_background WHERE sec_school_name IS NOT NULL AND LENGTH(`sec_school_name`) > 0 " ;

  if($runquery = $conn -> query($query)) {
    while($mydata = $runquery -> fetch_assoc()){
    $sec=$mydata["sec"];
    if(empty($sec)){
        $sec = 1; 
    }
    }
        } 
        

    $arr=[$post, $gra, $coll, $sec];
    ?>

<script>
var ctx = document.getElementById('myChart_1').getContext('2d');
var dataArray = [<?php echo join(',',$arr); ?>];

var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Doctorate', 'Masteral', 'Baccalaureate', 'Senior High'],
        datasets: [{
            label: '# of Votes',
            data: dataArray,
            backgroundColor: [
                '#53AED5',
                '#72D8C8',
                '#F46A67',
                '#FFE15B'
                
            ],
            borderColor: [
                '#53AED5',
                '#72D8C8',
                '#F46A67',
                '#FFE15B'
                
                
            ],
            borderWidth: 1
        }]
    },
    options: {
      legend:{
          position:'left',
         
          labels:{
            boxWidth : 20,
            padding : 20
        }
      }
     
    }
});




</script>