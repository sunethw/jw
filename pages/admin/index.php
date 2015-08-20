<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == 'admin') {
    //echo "Welcome to the member's area, " . $_SESSION['sess_username'] . "!";
  echo "your location " . $_SESSION['sess_location'] . "";

?>


<?php include '../common/header.php';?>
<?php include '../common/component-tobar.php';?>
<?php include 'component-sidebar.php';?> 


        <!--main content start-->
        
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