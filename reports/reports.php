<?php include '../includes/link.php'; ?>
<?php include '../includes/header.php'; ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

<div class="report_section pt-5">
    
    <div class="text-center">
        <h6>Highest Educational Attainment</h6>
    </div>

    <div class="container">

        <div class="row pt-2">

            <div class="col-lg-6">
                <?php require "report_1.php"?>
            </div>

            <div class="col-lg-6 report-2 report">
                <?php require "report_2.php"?>
            </div>

            </div>

    <div class="row pt-4">
        <div class="col-lg-6">

            <div class="text-center">
                <h6>Distribution According to Position /Rank</h6>
            </div>

            <div class="report-3 report mb-5" style="overflow-x: hidden;  overflow-y: scroll; height:300px; ">
                <?php require "report_3.php"?>
            </div>

        </div>

        <div class="col-lg-6">

            <div class="text-center">
                <h6>Distribution According to Status of Appointment</h6>
            </div>

            <div class="report-4 report" style="height:300px;">
                <?php require "report_4.php"?>
            </div>
            
        </div>
    </div>


    <div class="row pt-4">
        <div class="col-lg-6">

            <div class="text-center">
                <h6>Summary Reports</h6>
            </div>

            <div class="report-5 report mb-5" style="height:300px;  background-color: #DDAAF2;">
             <?php require "report_5.php"?>
            </div>

        </div>

        <div class="col-lg-6">

           
            
        </div>
    </div>


</div>
</div>
