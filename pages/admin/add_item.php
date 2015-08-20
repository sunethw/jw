
<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 'admin') {
    //echo "Welcome to the member's area, " . $_SESSION['sess_username'] . "!";
  echo "your location " . $_SESSION['sess_location'] . "";

?>
<!DOCTYPE html>
<html lang="en">

<head>
   
   <?php include '../common/header.php';?>
    
</head>

<body>

    <section id="container">
       
    <?php include '../common/component-tobar.php';?>
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
                            <form class="form-horizontal style-form" action="manage_items.php">
                              
                               <div class="form-group">
                                    <label class="col-sm-2 control-label">Item id</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="Item_Id">
                                    </div>
                                    
                                   
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Item Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="ItemName">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Item Quantity</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="Quantity">
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label">Gross weight</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="GrossWeight">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Reduction weight</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="ReductionWeight">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Wastage</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="Wastage">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Goldsmith Cost</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name= "GoldsmithCost">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Desctiption</label>
                                    <div class="col-sm-6" name ="Description">
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
   <?php include '../common/component-footer.php';?>  
        


</body>

</html>
<?php
} else {
    echo "Please log in first to see this page.";
};
?>
