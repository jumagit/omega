<?php include"includes/header.php"; ?>
<!-- Navigation Bar-->
<?php include"includes/navigation.php"; ?>
<!-- End Navigation Bar-->

<!-- page wrapper start -->
<div class="wrapper">
    <div class="page-title-box">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12 text-center">
                    

                    <h2 class="text-white"> <i class="fa fa-home"></i> Admin Dashboard </h2>
                    
                </div>
            </div>
        </div>
        <!-- end container-fluid -->

    </div>
    <!-- page-title-box -->

    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row mb-5 pb-4">
              
                            <div class="col-sm-3">
                                <div class="card rounded m-2  mini-stat position-relative " style="background-color:#240B3A">
                                    <div class="card-body">
                                        <div class="mini-stat-desc">                                           
                                            <div class="text-white">                                              
                                                <div class="text-center">
                                                     <h1 class="mb-3 mt-0"><?php count_admin('clients'); ?></h1>
                                                    <h4 class="text-uppercase mt-0 text-white-20">Clients</h4>
                                                    <span class="ml-2"><a href="clients.php" class="text-white">More
                                                            Details..</a></span>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                              <div class="col-sm-3">
                                <div class="card rounded m-2  mini-stat position-relative " style="background-color:#F86F15">
                                    <div class="card-body">
                                        <div class="mini-stat-desc">                                           
                                            <div class="text-white">                                              
                                                <div class="text-center">
                                                     <h1 class="mb-3 mt-0"><?php count_admin('orders'); ?></h1>
                                                    <h4 class="text-uppercase mt-0 text-white-20">Orders</h4>
                                                    <span class="ml-2"><a href="orders.php" class="text-white">More
                                                            Details..</a></span>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                           


                             <div class="col-sm-3">
                                <div class="card rounded m-2  mini-stat position-relative " style="background-color:#3F1D0B">
                                    <div class="card-body">
                                        <div class="mini-stat-desc">                                           
                                            <div class="text-white">                                              
                                                <div class="text-center">
                                                     <h1 class="mb-3 mt-0"><?php count_admin('categories'); ?></h1>
                                                    <h4 class="text-uppercase mt-0 text-white-20">Categories</h4>
                                                    <span class="ml-2"><a href="categories.php" class="text-white">More
                                                            Details..</a></span>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>


                             <div class="col-sm-3">
                                <div class="card rounded m-2  mini-stat position-relative " style="background-color:#888545">
                                    <div class="card-body">
                                        <div class="mini-stat-desc">                                           
                                            <div class="text-white">                                              
                                                <div class="text-center">
                                                     <h1 class="mb-3 mt-0"><?php count_admin('customers'); ?></h1>
                                                    <h4 class="text-uppercase mt-0 text-white-20">Customers</h4>
                                                    <span class="ml-2"><a href="customers.php" class="text-white">More
                                                            Details..</a></span>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>



            </div>
            <!-- end row -->

            <div class="row">

            <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">OVERALL CHARTS</h4>
                            <canvas id="admin_pie" height="250"></canvas>
                        </div>
                    </div>
                </div>
                
                <!-- end col -->

                 <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">TOTAL SALES</h4>
                            <canvas id="adminOrders" height="250"></canvas>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">TOTAL CLIENTS</h4>
                            <canvas id="customerTotals" height="250"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <!-- end row -->

        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end page content-->

</div>
<!-- page wrapper end -->

<!-- Footer -->
<?php include"includes/footer.php"; ?>