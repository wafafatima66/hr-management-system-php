
<?php include 'link.php'; ?>
<?php include 'header.php'; ?>


<div class="emp_profile">

<!--head section-->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-9 emp_profile_section1 ">
            <h6 class="text-right pr-2">PDS | Leave Ledger | File 201</h6>
            <h4>WARREN DR AFICHAO</h4>
            <p>Permanent > Senior Programmer</p>
            <div>
                <form class="form-inline"> 
                   <a onclick="part1()"> <button type="button"class="btn">PERSONAL INFORMATION</button> </a>
                    <a onclick="part2()"><button type="button" class="btn" >FAMILY BACKGROUND</button> </a>
                    <button type="button" class="btn">EDUCATIONAL BACKGROUND</button> 
                    <button type="button" class="btn" >CIVIL SERVICE ELIGIBILITY</button> 
                    <button type="button"class="btn" >WORK EXPERIENCE</button> 
                    <button type="button" class="btn">VOLUNTARY WORKS</button> 
                    <button type="button" class="btn">LEARNING AND DEVELOPMENT</button> 
                    <button type="button" class="btn">SPECIAL SKILLS</button> 
                    <button type="button" class="btn">OTHER INFORMATION</button> 
                    <button type="button" class="btn">REFERENCE</button> 
                </form>
            </div>
        </div>

        <div class="col-lg-3 p-0 m-0 pr-3">
            <div class="emp_profile_image"> </div>
        </div>
    </div>
</div>


<div id="content">
<!--body section of personal information -->

<div  id="content-1">
<div class="container emp_profile_section2 pt-4 ">       
    <div class="row ">

        <div class="col-lg-9 ">
            <form class="form-inline">   

                <div class="form-group mx-sm-2 mb-2">
                    <label for="">NAME</label>
                    <input type="text" class="form-control" style="width:100px;"id="" placeholder="First Name">
                </div>
                <div class="form-group mx-sm-2 mb-2">
                <input type="text" class="form-control" style="width:100px;"id="" placeholder="Last name">
                </div>
                <div class="form-group mx-sm-2 mb-2">
                <input type="text" class="form-control" style="width:100px;"id="" placeholder="Middle name">
                </div>
                <div class="form-group mx-sm-2 mb-2">
                <input type="text" class="form-control" style="width:50px;" id="" placeholder="Ext">
                </div>
                <div class="form-group mx-sm-2 mb-2">
                <label for="">SEX</label>
                <select class="form-control" style="width:50px;">
                    <option></option>
                    <option>...</option>
                </select>
                </div>
                <div class="form-group mx-sm-1 mb-2">
                <label for="">GENDER</label>
                <select class="form-control" style="width:50px;">
                    <option ></option>
                    <option>...</option>
                </select>
                </div>
        </form>

            <form class="form-inline mt-2">
                <div class="form-group mx-sm-1 mb-2">
                <label for="">CIVIL STATUS</label>
                    <select class="form-control">
                    <option selected>Status</option>
                    <option>...</option>
                </select>
                </div>
                <div class="form-group mx-sm-2 mb-2">
                    <label for="">DATE OF BIRTH</label>
                    <input type="text" class="form-control" style="width:70px;" id="" placeholder="10/25/20">
                </div>
                <div class="form-group mx-sm-1 mb-2">
                <label for="">HEIGHT</label>
                    <input type="text" class="form-control" style="width:50px;" id="" placeholder="">
                </div>
                <div class="form-group mx-sm-1 mb-2">
                <label for="">WEIGHT</label>
                <input type="text" class="form-control" style="width:50px;" id="" placeholder="">
                </div>
                <div class="form-group mx-sm-1 mb-2">
                <label for="">BLOOD TYPE</label>
                    <input type="text" class="form-control" style="width:40px;" id="" placeholder="">
                </div>
            </form>
        </div>

        <div class="col-lg-3 p-0 m-0" style="background-color:#F4FBFF">
         <form class="form-inline">
            <div class="form-group mx-sm-1 mb-2">
                <label for="">CITIZENSHIP</label>
                    <input type="text" class="form-control" style="width:100px;" id="" placeholder="Filipino">
            </div>
            <div class="form-check mx-sm-1 mb-2">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    By Birth
                </label>
            </div>
            <div class="form-check mx-sm-1 mb-2">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    By Naturalization
                </label>
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <input type="text" class="form-control" style="width:200px;" id="" placeholder="Indicate Country If dual Citizenship">
            </div>
        </form>
    </div>

</div>
       
        <div class="row">
            <form class="form-inline">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="">RESIDENTIAL ADDRESS</label>
                    <input type="text" class="form-control" style="width:100px;"id="" placeholder="House/Block/Lot No">
                </div>
                <div class="form-group mx-sm-2 mb-2">
                    <input type="text" class="form-control" style="width:100px;"id="" placeholder="Street">
                </div>
                <div class="form-group mx-sm-1 mb-2">
                    <input type="text" class="form-control" style="width:120px;"id="" placeholder="Subdivision/Village">
                </div>
                <div class="form-group mx-sm-1 mb-2">
                    <select class="form-control" style="width:90px;">
                    <option selected>Barangay</option>
                    <option>...</option>
                </select>
                </div>
                <div class="form-group mx-sm-1 mb-2">
                    <select class="form-control" style="width:90px;">
                    <option selected>Municipal/City</option>
                    <option>...</option>
                </select>
                </div>
                <div class="form-group mx-sm-1 mb-2">
                    <select class="form-control" style="width:90px;">
                    <option selected>Province</option>
                    <option>...</option>
                </select>
                </div>
                <div class="form-group mx-sm-1 mb-2">
                    <input type="text" class="form-control" style="width:90px;"id="" placeholder="Zip Code">
                </div>
                </form>
        </div>


        <div class="row">
         <form class="form-inline">
            <div class="form-group mx-sm-3 mb-2">
                <label for="">RESIDENTIAL ADDRESS</label>
                <input type="text" class="form-control" style="width:100px;"id="" placeholder="House/Block/Lot No">
            </div>
            <div class="form-group mx-sm-2 mb-2">
                <input type="text" class="form-control" style="width:100px;"id="" placeholder="Street">
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <input type="text" class="form-control" style="width:120px;"id="" placeholder="Subdivision/Village">
            </div>
            
            <div class="form-group mx-sm-1 mb-2">
                <select class="form-control" style="width:90px;">
                <option selected>Barangay</option>
                <option>...</option>
            </select>
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <select class="form-control" style="width:90px;">
                <option selected>Municipal/City</option>
                <option>...</option>
            </select>
            </div>
            <div class="form-group mx-sm-1 mb-2">
                <select class="form-control" style="width:90px;">
                <option selected>Province</option>
                <option>...</option>
            </select>
            </div> 
            <div class="form-group mx-sm-1 mb-2">
                <input type="text" class="form-control" style="width:90px;"id="" placeholder="Zip Code">
            </div>
        </form>
    </div>

        <div class="row">
            <div class="col-lg-6 p-0 m-0" >
                <form class="form-inline">
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="">CONTACTS</label>
                    </div>
                    <div class="form-group mx-sm-2 mb-2" >
                      <input type="text" class="form-control" style="width:100px;"id="" placeholder="Telephone No.">
                    </div>
                    <div class="form-group mx-sm-1 mb-2">
                      <input type="text" class="form-control" style="width:100px;"id="" placeholder="Mobile No.">
                    </div>
                    <div class="form-group mx-sm-1 mb-2">
                      <input type="text" class="form-control" style="width:100px;"id="" placeholder="Email Address">
                    </div>
                </form>
             </div>

              <div class="col-lg-6 p-0 m-0">
                 <form class="form-inline">
                    <div class="form-group mx-sm-2 mb-2" >
                      <input type="text" class="form-control" style="width:100px;"id="" placeholder="GSIS ID No.">
                    </div>
                    <div class="form-group mx-sm-1 mb-2">
                      <input type="text" class="form-control" style="width:100px;"id="" placeholder="PAG-IBIG ID No.">
                    </div>
                    <div class="form-group mx-sm-1 mb-2">
                      <input type="text" class="form-control" style="width:100px;"id="" placeholder="PHILHEALTH No.">
                    </div>
                </form>

                <form class="form-inline">
                    <div class="form-group mx-sm-2 mb-2" >
                      <input type="text" class="form-control" style="width:100px;"id="" placeholder="SSS ID No.">
                    </div>
                    <div class="form-group mx-sm-1 mb-2">
                      <input type="text" class="form-control" style="width:100px;"id="" placeholder="TIN No.">
                    </div>
                    <div class="form-group mx-sm-1 mb-2">
                      <input type="text" class="form-control" style="width:100px;"id="" placeholder="AGENCY EMPLOYEE No.">
                    </div>
                </form>
            </div>
        </div>

</div>
</div>

<!--body section of family background-->
<div class="container emp_profile_section2 pt-4 " id="content-2">  

</div>

</div>
<script>
function part1(){
var content = document.getElementById("content-1").innerHTML;
console.log(content);
document.getElementById("content").innerHTML = content;
alert("runninfg")
}

function part2(){
    var content = document.getElementById("content-2").innerHTML;
   console.log(content);
  document.getElementById("content").innerHTML = content;
  alert("runninfg")
}
</script>
</div>