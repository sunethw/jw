

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
                <h3><i class="fa fa-diamond"></i> Manage user(s)</h3>
                  <div class="row mt">
                    <div class="col-lg-12">
                        <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i>User(s)</h4>
                          <section id="unseen">


<?php
require_once '../config/api.php'; //db connection creation
$sql = "select * from login;";
  $result = mysqli_query($conn,$sql);

  if(mysqli_num_rows($result) == 0)
  {
    echo 'No Item Found!';
  }
  else
  {
    echo " <table class='table table-bordered table-striped table-condensed'>
                            <thead>
                              <tr>
                                <th>User Id</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>User Role</th>
                                <th>Location</th>
                                <th>Username</th>
                                <th class='text-center'>Action</th>
                              </tr>
                              </thead>";
   

    while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
    {
                            echo "<tbody>
                              <tr>";
                                  echo "<td>". $row['userId'] ."</td>";
                                  echo "<td>". $row['firstName'] ."</td>";
                                  echo "<td>". $row['lastName'] ."</td>";
                                  echo "<td>". $row['role'] ."</td>";
                                  echo "<td>". $row['location'] ."</td>";
                                  echo "<td>". $row['uid'] ."</td>"; ?>
                                  
                                 <td class='text-center'><a href="?userId=<?php echo $row['userId']; ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i>edit </a>
                                                          <a href="delete_user.php?userId=<?php echo $row['userId']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-close"></i>delete </a>
                                 

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
  if(!empty($_GET['userId'])){ //code for retrieving record for editing

  $q = $_GET['userId']; }

$result = mysqli_query($conn,"SELECT * FROM login WHERE userId='$q'");
$row= mysqli_fetch_array($result);
?>                 





                        </section>     
                    </div>
                </div>
            </div>     
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Add User</h4>
                            <form class="form-horizontal style-form" action="create_user.php" method="POST">
                              
                               <div class="form-group">
                                    <label class="col-sm-2 control-label">User id</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="userId" value="<?php echo $row['userId']; ?>">
                                    </div>
                                    
                                   
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">First Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="firstName" value="<?php echo $row['firstName']; ?>">
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label class="col-sm-2 control-label">Last Name</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="lastName" value="<?php echo $row['lastName']; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">User role</label>
                                    <div class="col-sm-6">
                                        <select type="text" class="form-control" name="userRole" value="<?php echo $row['role']; ?>">
                                          <option>Sales</option>
                                          <option>Supervisor</option>
                                          <option>Manager</option>
                                          <option>Admin</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Location</label>
                                    <div class="col-sm-6">
                                        <select type="text" class="form-control" name="locationName" value="<?php echo $row['location']; ?>">
                                         <?php  //require_once '../config/api.php';
                                          $sql2="select * from locations"; 
                                                    $query2=mysqli_query($conn,$sql2); 
                                                    while($rw2=mysqli_fetch_array($query2)) { 
                                                                                        ?>
                                          <option> <?php echo $rw2['locationName']; ?></option><?php } ?>
                                        </select>

                                    </div>
                                </div>

                                                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Username</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="username" value="<?php echo $row['uid']; ?>">
                                    </div>
                                </div>

                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="password" value="">
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