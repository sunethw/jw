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
                <h3><i class="fa  fa-user"></i> Add Staff</h3>
                  <div class="row mt">
                    
                    <div class="col-lg-12">
                        <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i>Staff List</h4>
                         
                          <div class="col-lg-12">
                          <button href="#creatG4" class="panel-top-adbtn btn btn-success pull-left "><span class="btn-pls fa fa-plus"></span>Add New</button>
                          </div>
                          <div class="clearfix"></div>
                         
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th class="text-center">Staff ID</th>
                                  <th class="text-center">Employee Name</th>
                                  <th class="text-center">Designation</th>
                                  <th class="text-center">User Role</th>
                                  <th class="text-center">User Location</th>
                                  <th class="text-center">Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td class="text-center">001</td>
                                  <td class="text-center">Suneth Wijesiri</td>
                                  <td class="text-center">Manager</td>
                                  <td class="text-center">Admin</td>
                                  <td class="text-center">Colombo</td>
                                  <td class="text-center"> 
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i>&nbsp; View</button>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i>&nbsp; Edit</button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-close"></i>&nbsp; Delete</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="text-center">002</td>
                                  <td class="text-center">Suneth Wijesiri</td>
                                  <td class="text-center">Manager</td>
                                  <td class="text-center">Admin</td>
                                  <td class="text-center">Colombo</td>
                                  <td class="text-center"> 
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i>&nbsp; View</button>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i>&nbsp; Edit</button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-close"></i>&nbsp; Delete</button>
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
                        <div class="form-panel" id="creatG4">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Staff Details</h4>
                            <form class="form-horizontal style-form">
                              
                               <div class="form-group">
                                    <label class="col-sm-2 control-label required-label">Staff ID</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control required-input">
                                    </div>
                                    
                                   
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label required-label">Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control required-input">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label required-label">Phone Number</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control required-input">
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label required-label">Address</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control required-input">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label required-label">Designation</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control required-input">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label required-label">User Role</label>
                                    <div class="col-sm-6">
                                        <select class="form-control required-input">
                                            <option>Admin</option>
                                            <option>Manager</option>
                                            <option>Supervisor</option>
                                            <option>Sales Person</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label required-label">User Location</label>
                                    <div class="col-sm-6">
                                        <select class="form-control required-input">
                                            <option>Location1</option>
                                            <option>Location2</option>
                                      
                                        </select>
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

 <script>
        $(document).on('click', '.panel-top-adbtn', function(){

	   $('#creatG4').collapse('show');
       $("body, html").animate({ 
                scrollTop: $( $(this).attr('href') ).offset().top -140
            }, 500);     
 
    });

</script>    
   


</body>

</html>
