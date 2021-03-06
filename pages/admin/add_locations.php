<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 'admin') {
    //echo "Welcome to the member's area, " . $_SESSION['sess_username'] . "!";
  //echo "your location " . $_SESSION['sess_location'] . "";

?>


<?php include '../common/header.php';?>
<?php include '../common/component-tobar.php';?>
<?php include 'component-sidebar.php';?> 


        <!--main content start-->
        <section id="main-content">
            <section class="wrapper site-min-height">
                <h3><i class="fa fa-diamond"></i> Manage locations</h3>
                  <div class="row mt">
                    <div class="col-lg-12">
                        <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i>Location(s)</h4>
                          <section id="unseen">


<?php // Display CRUD
require_once '../config/api.php'; //db connection creation
$sql = "select * from locations;";
  $result = mysqli_query($conn,$sql);

  if(mysqli_num_rows($result) == 0)
  {
    echo 'No Item Found!';
  }
  else
  {
    echo " <table class='table table-bordered table-striped table-condensed'>";?>
                            <thead>
                              <tr>
                                <th>Location code</th>
                                <th>Location name</th>
                                  
                                <th class='text-center'>Action</th>
                              </tr>
                              </thead>
   
<?php
    while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
    {
                            echo "<tbody>
                              <tr>"; ?>
                                  <td><?php echo $row['locationCode']; ?></td>
                                  <td><?php echo $row['locationName']; ?></td>
                                  <td class='text-center'><a href="?locationCode=<?php echo $row['locationCode']; ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i>edit </a>
                                                          <a href="delete_location.php?locationCode=<?php echo $row['locationCode']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-close"></i>delete </a>
                                 </tbody>
                                 <?php  
    }
    echo "</table>";
  }
  //mysqli_close($conn);
?>  
<?php
//require_once '../config/api.php'; //db connection creation

$q=0;
  if(!empty($_GET['locationCode'])){ //code for retrieving record for editing

  $q = $_GET['locationCode']; }

$result = mysqli_query($conn,"SELECT * FROM locations WHERE locationCode='$q'");
$row= mysqli_fetch_array($result);
?>                 


       </section>     
                    </div>
                </div>
            </div>     
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Add location</h4>
                            <form class="form-horizontal style-form" action="create_location.php" method="POST">
                              
                               <div class="form-group">
                                    <label class="col-sm-2 control-label">Location code</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="LocationCode" value="<?php echo $row['locationCode']; ?>">
                                    </div>
                                    
                                   
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Location Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="LocationName" value="<?php echo $row['locationName']; ?>">
                                    </div>
                                </div>
                                            
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button class="btn btn-success">  Save  </button>
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
        <!--footer end-->
    
    <?php include '../common/footer.php';?>  
   


</body>

</html>
<?php
} else {
    echo "Please log in first to see this page.";
};
?>