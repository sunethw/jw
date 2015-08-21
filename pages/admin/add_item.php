
<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 'admin') {
    //echo "Welcome to the member's area, " . $_SESSION['sess_username'] . "!";
  //echo "your location " . $_SESSION['sess_location'] . "";

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
                            <!-- CRUD for add item -->
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
                                <th>Item id</th>
                                <th>Item code</th>
                                <th>Item Name</th>
                                <th>Quantity</th>
                                <th>Gross weight</th>
                                <th>Reduction Weight</th>
                                <th>Wastage</th>
                                <th>Goldsmith cost</th>
                                <th>Description</th>
                                  
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
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Item Details</h4>
                            <form class="form-horizontal style-form" action="manage_items.php" method="POST">

                              <input type="hidden" name="itemId">
                              
                               <div class="form-group">
                                    <label class="col-sm-2 control-label">Item code</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="ItemCode">
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
