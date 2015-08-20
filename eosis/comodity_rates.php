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
                <h3><i class="fa fa-align-left"></i>Comodity Rates</h3>
                  <div class="row mt">
                    <div class="col-lg-12">
                     <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i>Comodity List </h4>
                         
                         <div class="col-lg-12">
                          <button href="#creatG4" class="panel-top-adbtn btn btn-success pull-left "><span class="btn-pls fa fa-plus"></span>Add New</button>
                          </div>
                         
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th class="text-center">Type</th>
                                  <th class="text-center">Comodity Name</th>
                                  
                                  <th class="text-center">Previouse Rate</th>
                                  <th class="text-center">New Rate</th>
                                                               
                                  <th class="text-center">Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td class="text-center">Comodities</td>
                                  <td class="text-center">Comodity Name</td>
                                  <td class="text-center">10%</td>
                                  <td class="text-center">15%</td>
                                  
                                  <td class="text-center"> 
                                      <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i>&nbsp; Edit</button>
                                       <button class="btn btn-danger btn-xs"><i class="fa fa-close"></i>&nbsp; Delete</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="text-center">Comodities</td>
                                  <td class="text-center">Comodity Name</td>
                                  <td class="text-center">10%</td>
                                  <td class="text-center">15%</td>
                                  
                                  <td class="text-center"> 
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
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Comodity Details</h4>
                            <form class="form-horizontal style-form">
                              
                               
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label required-label">Comodity Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control required-input">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label required-label">Comodity Rate</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control required-input">
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
