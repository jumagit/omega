     <footer class="footer" style="background-image: linear-gradient(90deg, #002F47, #002F47);">
         <div class="container-fluid">

             <div class="row">
                 <div class="col-12">
                     
                     <div class="d-flex " style="margin-left:35%">

                         <div class="align-items-start pr-4"><img src="assets/images/logo.png" width="100px"
                                 class="img-fluid "></div>
                         <div class="align-items-end">
                             <p class="font-weight-bold"> <?php echo date("Y"); ?> © Online Trade Copyrights Reserved
                             </p>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </footer>
     <!-- End Footer -->


     <!-- jQuery  -->
     <script src="assets/js/jquery.min.js"></script>
 
     <script src="assets/js/jquery.slimscroll.js"></script>
     <script src="assets/js/waves.min.js"></script>

     <script src="plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

     <!-- Required datatable js -->
     <script src="plugins/datatables/jquery.dataTables.min.js"></script>
     <script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
     <!-- Buttons examples -->
     <script src="plugins/datatables/dataTables.buttons.min.js"></script>
     <script src="plugins/datatables/buttons.bootstrap4.min.js"></script>
     <script src="plugins/datatables/jszip.min.js"></script>
     <script src="plugins/datatables/pdfmake.min.js"></script>
     <script src="plugins/datatables/vfs_fonts.js"></script>
     <script src="plugins/datatables/buttons.html5.min.js"></script>
     <script src="plugins/datatables/buttons.print.min.js"></script>
     <script src="plugins/datatables/buttons.colVis.min.js"></script>
     <!-- Responsive examples -->
     <script src="plugins/datatables/dataTables.responsive.min.js"></script>
     <script src="plugins/datatables/responsive.bootstrap4.min.js"></script>
     <script src="plugins/parsleyjs/parsley.min.js"></script>
    <!--money js -->

    
    <script src="plugins/money/Number.js"></script>
    
     <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
     <!-- Sweet-Alert  -->
     <script src="plugins/sweet-alert2/sweetalert2.min.js"></script>

      <script src="assets/js/Chart.min.js"></script>
   
     <!-- App js -->
     <script src="assets/js/app.js"></script>

   


     <script src="assets/js/main.js"></script>

    
     
     <script src="assets/js/parmanent.js"> </script>

     <script src="assets/js/bootstrap.bundle.min.js"></script>

       <script>
        $(document).ready(function() {
             $('form').parsley();
             $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'colvis']
            });

            table.buttons().container()
            .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');


           
        });

    </script>





     </body>

     </html>