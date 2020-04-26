     <footer class="footer">
         <div class="container-fluid">

             <div class="row">
                 <div class="col-12">
                     2018 © Online Trade Copyrights Reserved
                 </div>
             </div>
         </div>
     </footer>
     <!-- End Footer -->


     <!-- jQuery  -->
     <script src="assets/js/jquery.min.js"></script>
     <script src="assets/js/bootstrap.bundle.min.js"></script>
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

     <!-- Datatable init js -->
     <script src="assets/pages/datatables.init.js"></script>

     <!-- Peity JS -->
     <script src="plugins/peity/jquery.peity.min.js"></script>

     <script src="plugins/morris/morris.min.js"></script>
     <script src="plugins/raphael/raphael-min.js"></script>

     <script src="assets/pages/dashboard.js"></script>

      <!--Chartist Chart-->
      <script src="plugins/chart.js/chart.min.js"></script>
      
     <!-- App js -->
     <script src="assets/js/app.js"></script>

     <script>
            $(document).ready(function() {
                $('form').parsley();
            });
          //line chart 


    !function($) {
    "use strict";

    var ChartJs = function() {};

    ChartJs.prototype.respChart = function(selector,type,data, options) {
        // get selector by context
        var ctx = selector.get(0).getContext("2d");
        // pointing parent container to make chart js inherit its width
        var container = $(selector).parent();

        // enable resizing matter
        $(window).resize( generateChart );

        // this function produce the responsive Chart JS
        function generateChart(){
            // make chart width fit with its container
            var ww = selector.attr('width', $(container).width() );
            switch(type){
                case 'Line':
                    new Chart(ctx, {type: 'line', data: data, options: options});
                    break;
              
                case 'Pie':
                    new Chart(ctx, {type: 'pie', data: data, options: options});
                    break;
                case 'Bar':
                    new Chart(ctx, {type: 'bar', data: data, options: options});
                    break;
               
            }
            // Initiate new chart or Redraw

        };
        // run function - render chart at first load
        generateChart();
    },
    //init
    ChartJs.prototype.init = function() {
        //creating lineChart
        var lineChart = {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September","October"],
            datasets: [
                {
                    label: "Sales Analytics",
                    fill: true,
                    lineTension: 0.5,
                    backgroundColor: "rgba(245, 178, 37, 0.2)",
                    borderColor: "#f5b225",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "#f5b225",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "#f5b225",
                    pointHoverBorderColor: "#fff",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [65, 59, 80, 81, 56, 55, 40, 55, 30, 80]
                },
                {
                    label: "Monthly Earnings",
                    fill: true,
                    lineTension: 0.5,
                    backgroundColor: "rgba(235, 239, 242, 0.2)",
                    borderColor: "#ebeff2",
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: "#ebeff2",
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: "#ebeff2",
                    pointHoverBorderColor: "#eef0f2",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [80, 23, 56, 65, 23, 35, 85, 25, 92, 36]
                }
            ]
        };

        var lineOpts = {
            scales: {
                yAxes: [{
                    ticks: {
                        max: 100,
                        min: 20,
                        stepSize: 10
                    }
                }]
            }
        };

        this.respChart($("#lineChart"),'Line',lineChart, lineOpts);

    },
        $.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs;

     
}(window.jQuery),



        

    //initializing
function($) {
    "use strict";
    $.ChartJs.init()
}(window.jQuery);
 
    
     </script>

     </body>

     </html>