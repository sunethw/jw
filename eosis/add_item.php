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
                         
                         <div class="col-lg-12">
                          <button href="#creatG4" class="panel-top-adbtn btn btn-success pull-left "><span class="btn-pls fa fa-plus"></span>Add New</button>
                          </div>
                         
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th class="text-center">Item ID</th>
                                  <th class="text-center">Item Name</th>
                                  <th class="text-center">Item Quantity</th>
                                  <th class="text-center">Gross weight(g)</th>
                                  <th class="text-center">Reduction weight(g)</th>
                                  <th class="text-center">Wastage</th>
                                  <th class="text-center">Goldsmith Cost</th>
                                 
                                  <th class="text-center">Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td class="text-center">001</td>
                                  <td class="text-center">Neckless</td>
                                  <td class="text-center">50</td>
                                  <td class="text-center">100</td>
                                  <td class="text-center">100</td>
                                   <td class="text-center">100</td>
                                  <td class="text-center">10000.00</td>
                                  
                                  <td class="text-center"> 
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i>&nbsp; View</button>
                                    <button class="btn btn-success btn-xs"><i class="fa fa-pencil"></i>&nbsp; Edit</button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-close"></i>&nbsp; Delete</button>
                                  </td>
                              </tr>
                              <tr>
                                  <td class="text-center">001</td>
                                  <td class="text-center">Neckless</td>
                                  <td class="text-center">50</td>
                                  <td class="text-center">100</td>
                                  <td class="text-center">100</td>
                                   <td class="text-center">100</td>
                                  <td class="text-center">10000.00</td>
                                  
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
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Item Details</h4>
                            <form class="form-horizontal style-form">
                              
                               <div class="form-group">
                                    <label class="col-sm-2 control-label required-label">Item id</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control required-input">
                                    </div>
                                    
                                   
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label required-label">Item Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control required-input">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label required-label">Item Quantity</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control required-input">
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label required-label required-label">Gross weight</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control required-input">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label required-label">Reduction weight</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control required-input">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label required-label">Wastage</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control required-input">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label required-label">Goldsmith Cost</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control required-input">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label required-label">Desctiption</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control required-input"></textarea>
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
