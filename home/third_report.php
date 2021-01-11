


<div class="card section4-card" style="height:300px;">



                <div class="cart-title section4-card-title"><h2>Calendar | Activities | Events </h2></div>
                  <div class="row p-3">

                    <div class="col-lg-7">

                    <?php   
                    
                    
$year = date("Y");
$month = date("m");

                                                    
                            require '../includes/conn.php';

                            $query = "SELECT title , venue from table_events where month(DATE_FORMAT(start, '%Y-%m-%d')) = '$month' and year(DATE_FORMAT(start, '%Y-%m-%d')) = '$year'"  ; //curdate()

                            if($runquery = $conn -> query($query)) {
                                    while($mydata = $runquery -> fetch_assoc()){
                                    $title=$mydata["title"];
                                    $venue=$mydata["venue"];
                    ?>

                      <list-group>
                        <h6 style="font-size:18px;font-weight:bold"><?php echo $title?></h6>
                        <p style="font-size:12px;"><?php echo $venue?></p>
                      </list-group>

                      <?php }} ?>

                    </div>

                    <div class="col-lg-5">
                      <div class="list-group">
                        <h6 style="margin:0;" ><?php echo date("F");?></h6>
                        <h1 style="color:#E6AD0F; margin:0;"><?php echo date("d");?></h1>
                        <h6 style="margin:0;"><?php echo date("l");?></h6>
                      </div>
                    </div>

                  </div>

                  

                  <a href="../calendar/calendar.php" class="text-right p-2">View More</a>
              </div>