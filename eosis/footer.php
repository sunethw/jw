<!--footer end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>


    <script src="assets/js/bootstrap-datetimepicker.js"></script>
    <script src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    



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