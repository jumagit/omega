     jQuery(document).ready(function($) {

          admin_client();
          admin_pie_chart();

         
          //admin 


          function admin_client(){


            $.post('php_action/admin_charts.php', function(data, textStatus, xhr) {
                   
                    var date = [];
                    var grand_total = [];
                    var prod = [];

                    for (var i in data) {
                         date.push(data[i].created_at);
                         grand_total.push(data[i].grand_total);
                         prod.push(data[i].prod);
                    }

                    var chartdata = {
                        labels: date,
                        datasets: [{
                        label: 'Total Sales',
                        fill: true,
                        lineTension: 0.5,                   
                        borderCapStyle: 'butt',
                        borderDash: [],
                        borderDashOffset: 0.0,
                        borderJoinStyle: 'miter',
                        pointBorderColor: "#f5b225",
                        pointBackgroundColor: "#fff",
                        pointBorderWidth: 1,
                        pointHoverRadius: 5,
                        backgroundColor: "#888545",
                        borderColor: "#F86F15",
                        borderWidth: 1,
                        pointHoverBackgroundColor: "#f5b225",
                        pointHoverBorderColor: "#fff",
                        pointHoverBorderWidth: 2,
                        pointRadius: 1,
                        pointHitRadius: 10,
                        data: grand_total
                         }]
                    };

                    var graphTarget = $("#adminOrders");

                    var barGraph = new Chart(graphTarget, {
                         type: 'bar',
                         data: chartdata,
                         options: {
                         scales: {
                             yAxes: [{
                                 ticks: {
                                     beginAtZero: true
                                 }
                             }]
                         }
                     },
                    });

               });

           }


           function admin_pie_chart(){
              $.post('php_action/admin_piecharts.php', function(data, textStatus, xhr) {
                   // console.log(data);
                    var item = ['products','orders','order-items','categories'];
                    var total = data;


                  var pieChart = {
                labels: item,
                datasets: [{
                    data: [300, 180, 30,  40],
                    backgroundColor: [
                        "#35a989",
                        "#e333f2",
                        "#43a232",
                        "#9e1232",
                        "#43eee2"
                    ],
                    hoverBackgroundColor: [
                        "#35a989",
                        "#eea989",
                        "#ebeff2",
                        "#ff9012",
                        "#dd9012"
                    ],
                    hoverBorderColor: "#fff"
                }]
            };




                    var graphTarget = $("#admin_pie");

                    var barGraph = new Chart(graphTarget, {
                         type: 'pie',
                         data: pieChart
                    });


           })


         }

     //end of functions
     });
