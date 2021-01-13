
<div class="form-inline">

    <div class="col-lg-8 leave_mang_header ">
        <h4>LEAVE SUMMARY</h4>
    </div>

        <div class="col-lg-4 ">

            <form action="" method="post" class="form-inline ">

                <div class="form-group mx-sm-1">
                <input type="date" class="form-control" id="from_date"  style="width:140px" name="from_date">
                </div>  

                <div class="form-group mx-sm-1">
                <input type="date" class="form-control" id="to_date"  style="width:140px" name="to_date">
                </div> 

                <button class="btn" name="search" >SEARCH</button>

            </form>
        </div>

</div>
     
    <div id="printableArea_leave_summary">

        <div class="leave_mang_section_body pt-5"  >
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10">

<?php
                        if(isset($_POST['search'])){

                        if(isset($_POST['from_date']) && isset($_POST['to_date'])){

                            require "leave_mang_sec_box_search.php" ;
                        }
                    }

                    else {
                        require "leave_mang_sec_box_config.php" ;
                    }
                        
                         
                        ?>
                        
                        </div>

                        <?php require "date-block.php"; ?>

                    </div>
                </div>
            </div>

    </div>

    </div>