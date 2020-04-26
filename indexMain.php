<?php include"includes/header.php"; ?>
<!-- Navigation Bar-->
<?php include"includes/navigation.php"; ?>
<!-- End Navigation Bar-->

<!-- page wrapper start -->
<div class="wrapper">
    <div class="page-title-box">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="state-information d-none d-sm-block">
                        <div class="state-graph">
                            <div id="header-chart-1"></div>
                            <div class="info">Balance $ 2,317</div>
                        </div>
                        <div class="state-graph">
                            <div id="header-chart-2"></div>
                            <div class="info">Item Sold 1230</div>
                        </div>
                    </div>

                    <h4 class="page-title">Dashboard</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Welcome to Supply Software Dashboard</li>
                    </ol>

                </div>
            </div>
        </div>
        <!-- end container-fluid -->

    </div>
    <!-- page-title-box -->

    <div class="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card  mini-stat position-relative"  style="background-color:red">
                        <div class="card-body">
                            <div class="mini-stat-desc">
                                <h6 class="text-uppercase verti-label text-white-50">Orders</h6>
                                <div class="text-white">
                                    <h6 class="text-uppercase mt-0 text-white-50">Orders</h6>
                                    <h3 class="mb-3 mt-0">1,587</h3>
                                    <div class="">
                                        <span class="ml-2"><a href="#"   class="text-white">More Details..</a></span>
                                    </div>
                                </div>
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-cube-outline display-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary mini-stat position-relative">
                        <div class="card-body">
                            <div class="mini-stat-desc">
                                <h6 class="text-uppercase verti-label text-white-50">Revenue</h6>
                                <div class="text-white">
                                    <h6 class="text-uppercase mt-0 text-white-50">Revenue</h6>
                                    <h3 class="mb-3 mt-0">$46,785</h3>
                                    <div class="">
                                    <span class="ml-2"><a href="#"   class="text-white">More Details..</a></span>
                                    </div>
                                </div>
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-buffer display-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card  mini-stat position-relative" style="background-color:purple">
                        <div class="card-body">
                            <div class="mini-stat-desc">
                                <h6 class="text-uppercase verti-label text-white-50">Av. Price</h6>
                                <div class="text-white">
                                    <h6 class="text-uppercase mt-0 text-white-50">Average Price</h6>
                                    <h3 class="mb-3 mt-0">15.9</h3>
                                    <div class="">
                                    <span class="ml-2"><a href="#" class="text-white">More Details..</a></span>
                                    </div>
                                </div>
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-tag-text-outline display-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-dark mini-stat position-relative">
                        <div class="card-body">
                            <div class="mini-stat-desc">
                                <h6 class="text-uppercase verti-label text-white-50">Pr. Sold</h6>
                                <div class="text-white">
                                    <h6 class="text-uppercase mt-0 text-white-50">Product Sold</h6>
                                    <h3 class="mb-3 mt-0">1890</h3>
                                    <div class="">
                                    <span class="ml-2"><a href="#"  class="text-white">More Details..</a></span>
                                    </div>
                                </div>
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-briefcase-check display-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xl-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-8 border-right">
                                    <h4 class="mt-0 header-title mb-4">Sales Report</h4>
                                    <div id="morris-area-example" class="dashboard-charts morris-charts"></div>
                                </div>
                                <div class="col-xl-4">
                                    <h4 class="header-title mb-4">Yearly Sales Report</h4>
                                    <div class="p-3">
                                        <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-first-tab" data-toggle="pill"
                                                    href="#pills-first" role="tab" aria-controls="pills-first"
                                                    aria-selected="true">2015</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-second-tab" data-toggle="pill"
                                                    href="#pills-second" role="tab" aria-controls="pills-second"
                                                    aria-selected="false">2016</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-third-tab" data-toggle="pill"
                                                    href="#pills-third" role="tab" aria-controls="pills-third"
                                                    aria-selected="false">2017</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="pills-first" role="tabpanel"
                                                aria-labelledby="pills-first-tab">
                                                <div class="p-3">
                                                    <h2>$17562</h2>
                                                    <p class="text-muted">Maecenas nec odio et ante tincidunt tempus.
                                                        Donec vitae sapien ut libero venenatis faucibus Nullam quis
                                                        ante.</p>
                                                    <a href="#" class="text-primary">Read more...</a>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="pills-second" role="tabpanel"
                                                aria-labelledby="pills-second-tab">
                                                <div class="p-3">
                                                    <h2>$18614</h2>
                                                    <p class="text-muted">Maecenas nec odio et ante tincidunt tempus.
                                                        Donec vitae sapien ut libero venenatis faucibus Nullam quis
                                                        ante.</p>
                                                    <a href="#" class="text-primary">Read more...</a>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="pills-third" role="tabpanel"
                                                aria-labelledby="pills-third-tab">
                                                <div class="p-3">
                                                    <h2>$19752</h2>
                                                    <p class="text-muted">Maecenas nec odio et ante tincidunt tempus.
                                                        Donec vitae sapien ut libero venenatis faucibus Nullam quis
                                                        ante.</p>
                                                    <a href="#" class="text-primary">Read more...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Sales Analytics</h4>
                            <div id="morris-donut-example" class="dashboard-charts morris-charts"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <!-- end row -->

            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Latest Trasaction</h4>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">(#) Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col" colspan="2">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">#15236</th>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-2.jpg" alt=""
                                                        class="thumb-md rounded-circle mr-2"> Jeanette James
                                                </div>
                                            </td>
                                            <td>14/8/2018</td>
                                            <td>$104</td>
                                            <td><span class="badge badge-success">Delivered</span></td>
                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#15237</th>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-3.jpg" alt=""
                                                        class="thumb-md rounded-circle mr-2"> Christopher Taylor
                                                </div>
                                            </td>
                                            <td>15/8/2018</td>
                                            <td>$112</td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#15238</th>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-4.jpg" alt=""
                                                        class="thumb-md rounded-circle mr-2"> Edward Vazquez
                                                </div>
                                            </td>
                                            <td>15/8/2018</td>
                                            <td>$116</td>
                                            <td><span class="badge badge-success">Delivered</span></td>
                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#15239</th>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-5.jpg" alt=""
                                                        class="thumb-md rounded-circle mr-2"> Michael Flannery
                                                </div>
                                            </td>
                                            <td>16/8/2018</td>
                                            <td>$109</td>
                                            <td><span class="badge badge-primary">Cancel</span></td>
                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#15240</th>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-6.jpg" alt=""
                                                        class="thumb-md rounded-circle mr-2"> Jamie Fishbourne
                                                </div>
                                            </td>
                                            <td>17/8/2018</td>
                                            <td>$120</td>
                                            <td><span class="badge badge-success">Delivered</span></td>
                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title mb-4">Latest Order</h4>
                            <div class="table-responsive order-table">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">(#) Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Date/Time</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col" colspan="2">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <th scope="row">#14563</th>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-5.jpg" alt=""
                                                        class="thumb-md rounded-circle mr-2"> Ralph Shockey
                                                </div>
                                            </td>
                                            <td>18/8/2018
                                                <p class="font-13 text-muted mb-0">10:18AM</p>
                                            </td>
                                            <td>$112</td>
                                            <td><span class="badge badge-warning badge-pill"><i
                                                        class="mdi mdi-checkbox-blank-circle text-warning"></i>
                                                    Pending</span></td>
                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#14564</th>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-6.jpg" alt=""
                                                        class="thumb-md rounded-circle mr-2"> Alexander Pierson
                                                </div>
                                            </td>
                                            <td>18//8/2018
                                                <p class="font-13 text-muted mb-0">12:36PM</p>
                                            </td>
                                            <td>$116</td>
                                            <td><span class="badge badge-success badge-pill"><i
                                                        class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                    Delivered</span></td>
                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#14565</th>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-7.jpg" alt=""
                                                        class="thumb-md rounded-circle mr-2"> Robert Rankin
                                                </div>
                                            </td>
                                            <td>19/8/2018
                                                <p class="font-13 text-muted mb-0">11:47AM</p>
                                            </td>
                                            <td>$109</td>
                                            <td><span class="badge badge-primary badge-pill"><i
                                                        class="mdi mdi-checkbox-blank-circle text-primary"></i>
                                                    Cancel</span></td>
                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">#14566</th>
                                            <td>
                                                <div>
                                                    <img src="assets/images/users/user-8.jpg" alt=""
                                                        class="thumb-md rounded-circle mr-2"> Myrna Shields
                                                </div>
                                            </td>
                                            <td>20/8/2018
                                                <p class="font-13 text-muted mb-0">02:52PM</p>
                                            </td>
                                            <td>$120</td>
                                            <td><span class="badge badge-success badge-pill"><i
                                                        class="mdi mdi-checkbox-blank-circle text-success"></i>
                                                    Delivered</span></td>
                                            <td>
                                                <div>
                                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end page content-->

</div>
<!-- page wrapper end -->

<!-- Footer -->
<?php include"includes/footer.php"; ?>