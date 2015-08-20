<!DOCTYPE html>
<html lang="en">

<head>
   
   <?php include 'header.php';?>
    
</head>

<body>

    <section id="container">
       
    <?php include 'component-tobar.php';?>
    <?php include 'component-sidebar.php';?> 

       
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper site-min-height">
                <h3><i class="fa fa-diamond"></i> Add Item</h3>
                  <div class="row mt">
                    <div class="col-lg-12">
                     <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i>Item list </h4>
                         
                         
                         
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>Employee Name</th>
                                 <th>Department</th>
                                  <th class="numeric">NIC</th>
                                  <th class="numeric">Join Date</th>
                                  <th class="numeric">Employee ID</th>
                                  <th class="numeric">Entitled</th>
                                  <th class="numeric">Designation</th>
                                  <th class="text-center">Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>Suneth Wijesiri</td>
                                  <td>2015/01/01</td>
                                  <td class="numeric">Casual Leave</td>
                                  <td class="numeric">Full Day</td>
                                  <td class="numeric">Aminda</td>
                                  <td class="numeric">21</td>
                                  <td class="numeric">10</td>
                                  <td class="text-center"> 
                                     <button class="btn btn-success btn-xs"><i class="fa fa-check"></i>&nbsp; Aprove</button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-close"></i>&nbsp; Reject</button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i>&nbsp; View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Suneth Wijesiri</td>
                                  <td>2015/01/01</td>
                                  <td class="numeric">Casual Leave</td>
                                  <td class="numeric">Full Day</td>
                                  <td class="numeric">Aminda</td>
                                  <td class="numeric">21</td>
                                  <td class="numeric">10</td>
                                  <td class="text-center"> 
                                     <button class="btn btn-success btn-xs"><i class="fa fa-check"></i>&nbsp; Aprove</button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-close"></i>&nbsp; Reject</button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i>&nbsp; View</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>Suneth Wijesiri</td>
                                  <td>2015/01/01</td>
                                  <td class="numeric">Casual Leave</td>
                                  <td class="numeric">Full Day</td>
                                  <td class="numeric">Aminda</td>
                                  <td class="numeric">21</td>
                                  <td class="numeric">10</td>
                                  <td class="text-center"> 
                                     <button class="btn btn-success btn-xs"><i class="fa fa-check"></i>&nbsp; Aprove</button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-close"></i>&nbsp; Reject</button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i>&nbsp; View</button>
                                  </td>
                              </tr>
                            </tbody>  
                            </table> 
                        </section>     
                    </div>
                </div>
            </div>     
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Item Details</h4>
                            <form class="form-horizontal style-form">
                              
                               <div class="form-group">
                                    <label class="col-sm-2 control-label">Item id</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                    </div>
                                    
                                   
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Item Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Item Quantity</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label">Gross weight</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Reduction weight</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Wastage</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Goldsmith Cost</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Desctiption</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                               
                                
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="button" class="btn btn-success">  Save  </button>
                                        <button type="button" class="btn btn-default">Clear All</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--End of COL 12-->

                </div>

            </section>
            <!-- wrapper -->
        </section>
        <!-- /MAIN CONTENT -->

        <!--main content end-->
        <!--footer start-->
   <?php include 'component-footer.php';?>  
          <!--footer end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
     <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>


    <script src="assets/js/bootstrap-datetimepicker.js"></script>



    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>



       
       
        


</body>

</html>
