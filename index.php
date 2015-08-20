<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Excelsoft PVT LTD">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>EOSIS - Leave Management</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <section id="container">
        <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
    <?php include 'component-tobar.php';?>

        <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
     <?php include 'component-sidebar.php';?> 

        <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper site-min-height">
                <h3><i class="fa fa-user-plus"></i> Employee Setup</h3>
                           <div class="row mt">
                    <div class="col-lg-12">
                        <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i>Employee list </h4>
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
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Employee Details</h4>
                            <form class="form-horizontal style-form">
                               <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Joined date</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control datepicker">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Gender</label>
                                    <div class="col-sm-6">
                                        <select class="form-control">
                                            <option>Select Option</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">NIC Number</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Date of Birth</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control datepicker">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">E Mail</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Mobile Number</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <h4 class="mb"><i class="fa fa-angle-right"></i> Department Details</h4>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Department</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Joined date</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control datepicker">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Employee ID</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                  
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Designation</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Reporting To</label>
                                    <div class="col-sm-6">
                                        <select class="form-control">
                                            <option>Select Option</option>
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


    <script src="assets/js/bootstrap-datetimepicker.js"></script>




    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->

    <!--  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>-->

    <script>
        /*Date Picker*/

        $(function() {
            $('.datepicker').datetimepicker({
                viewMode: 'years',
                format: 'YYYY/MM/DD'
            });
        });
    </script>


</body>

</html>
