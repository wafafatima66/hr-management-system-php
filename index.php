<?php include 'link.php'; ?>
<?php include 'header.php'; ?>


  
<!---Main body-->

      <!---section 1-->
      <div class="container-fluid">
     
       <div class="row p-3">

         <div class="col-lg-5 section1-box"> 
            <div class="row">
              <div class="col-lg-6">
                Male
                <h2 class="text-right pr-5">100</h2>
              </div>
              <div class="col-lg-6">
                Female
                <h2 class="text-right pr-5">130</h2>
              </div>
            </div>
              <h1 class="text-center">240</h1>
              <p class="text-center">REQULAR EMPLOYEES</p>
         </div>
         
         <div class="col-lg-5 section1-box ml-auto"> 
            <div class="row">
              <div class="col-lg-6">
                Male
                <h2 class="text-right pr-5">100</h2>
              </div>
              <div class="col-lg-6">
                Female
                <h2 class="text-right pr-5">130</h2>
              </div>
            </div>
              <h1 class="text-center">240</h1>
              <p class="text-center">CONTRACTUAL EMPLOYEES</p>
         </div>
       </div> <!----end of section 1-->

        <!--section 2-->
        <form class="form-inline">
          <button type="submit" class="btn mb-2 "><i class="fas fa-plus pr-2"></i>Add Employee</button> 
            <div class="form-group mx-sm-3 mb-2">
              <input type="text" class="form-control" id="" placeholder="Employee ID">
            </div>
            <div class="form-group mx-sm-3 mb-2">
              <input type="text" class="form-control" id="" placeholder="Employee name">
            </div>
            <div class="form-group mx-sm-3 mb-2">
              <select class="form-control">
                <option selected>Status</option>
                <option>...</option>
            </select>
            </div>
            <button type="submit" class="btn btn-search mb-2 pr-5 pl-5">SEARCH</button> 
        </form>
  

      <!---section 3 -->

        <!--Table-->
        <table class="table table-striped w-auto table-bordered">

          <!--Table head-->
          <thead class="table-head">
            <tr>
              <th>Name</th>
              <th>Employee ID</th>
              <th>Sex</th>
              <th>Department/Unit</th>
              <th>Contact No</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <!--Table head-->

          <!--Table body-->
          <tbody>
            <tr class="table-strip">
              <th scope="row">Kate</th>
              <td>14-123</td>
              <td>female</td>
              <td>USA</td>
              <td>Web Designer</td>
              <td class="text-center"><i class="fas fa-edit"></i><i class="fas fa-trash-alt"></i></td> <td>36</td>
            </tr>
            <tr>
              <th scope="row">Anna</th>
              <td>Female</td>
              <td>office of the president</td>
              <td>01892929729</td>
              <td>Permanent</td>
              <td class="text-center"><i class="fas fa-edit"></i><i class="fas fa-trash-alt"></i></td> <td>36</td>
            </tr>
            
          </tbody>
          <!--Table body-->


        </table>
        <!--Table-->

        <!---section 4 -->
        <!---first coluum--->
          <div class="row mt-5">
            <div class="col-lg-4 p-3">
              <div class="card section4-card">
                <div class="cart-title section4-card-title"><h2>Personal Profile</h2></div>
                <div class="card-list p-4">

                <div class="list-group">
                  <h6>DOCTORATE</h6>
                   <div class="progress">
                      <div class="progress-bar progress-bar-less" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                      <div class="progress-bar" role="progressbar" style="width: 75%;font-weight:bold;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                 </div>
                 
                <div class="list-group">
                  <h6>DOCTORATE</h6>
                   <div class="progress">
                      <div class="progress-bar progress-bar-less" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                      <div class="progress-bar" role="progressbar" style="width: 75%;font-weight:bold;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                 </div>
                 
                <div class="list-group">
                  <h6>DOCTORATE</h6>
                   <div class="progress">
                      <div class="progress-bar progress-bar-less" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                      <div class="progress-bar" role="progressbar" style="width: 75%;font-weight:bold;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                 </div>
             
                </div>
              </div>
            </div>
         

        <!--second-->
         
            <div class="col-lg-4 p-3">
              <div class="card section4-card">
                <div class="cart-title section4-card-title"><h2>On leave</h2></div>
                <table class="section4-table">
                  <tr class="section4-table-strip">
                    <td>Female</td>
                    <td>office of the president</td>
                  </tr>
                  <tr>
                    <td>Female</td>
                    <td>office of the president</td>
                  </tr>
                  <tr class="section4-table-strip">
                    <td>Female</td>
                    <td>office of the president</td>
                  </tr>
                  <tr>
                    <td>Female</td>
                    <td>office of the president</td>
                  </tr>
                </table>
              </div>
            </div>

            <!--Third-->
            <div class="col-lg-4 p-3">
              <div class="card section4-card">
                <div class="cart-title section4-card-title"><h2>Calendar | Activities | Events </h2></div>
                  <div class="row p-3">
                    <div class="col-lg-7">
                      <list-group>
                        <h6 style="font-size:18px;">Admin counsil</h6>
                        <p style="font-size:12px;">Discusion on a meeting</p>
                      </list-group>
                    </div>
                    <div class="col-lg-5">
                      <div class="list-group">
                        <h6 style="margin:0;" >January</h6>
                        <h1 style="color:#E6AD0F; margin:0;">26</h1>
                        <h6 style="margin:0;">Thursday</h6>
                      </div>
                    </div>
                  </div>
              </div>
            </div>

          </div>

      </div><!---end of Main body-->
      
     