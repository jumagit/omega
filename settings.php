
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
                            
                            <h4 class="page-title">Categories</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Plane Page</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Plane Page</li>
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
                        <div class="col-6">
                            <div class="card m-b-20">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Change Username</h4>
                                    <hr>
                                    <p class="text-muted m-b-30">Here you view can Change your Username
                                    </p>

                                    <form action="" id="changeUsername">
                                      
                                       <div class="form-group row">
                                        <div class="col-sm-3">
                                            <label for="brandName">Username :</label>
                                        </div>  
                                        <div class="col-sm-9">
                                            <input type="text" name="username" class="form-control" placeholder="Enter Username">
                                        </div>                                        
                                    </div>


                                    <div class="form-group float-right">
                                      
                                       <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                  <i class="mdi mdi-content-save"></i>  Change Username 
                                      </button>
                                    </div>


                                    </form>

                                  
                                </div>
                            </div>
                        </div> <!-- end col -->


                           <div class="col-6">
                            <div class="card m-b-20">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">Change Password</h4>
                                    <hr>
                                    <p class="text-muted m-b-30">Here you view All registered Plane
                                    </p>

                                    <form action="" id="changePassword">

                                      <div class="form-group row">
                                      
                                        <div class="col-sm-3">
                                            <label for="currentPassword">Current Password :</label>
                                        </div>  
                                        <div class="col-sm-9">
                                            <input type="password" name="currentPassword" class="form-control" placeholder="Enter your Old Password">
                                        </div>                                        
                                    </div>

                                     <div class="form-group row">
                                       <div class="col-sm-3">
                                            <label for="password">New Password :</label>
                                        </div>  
                                        <div class="col-sm-9">
                                            <input type="password" name="password" class="form-control" placeholder="Enter your Favourite Password">
                                        </div>                                        
                                    </div>

                                       <div class="form-group row">
                                          <div class="col-sm-3">
                                            <label for="rePassword">Confirm Password :</label>
                                        </div>  
                                        <div class="col-sm-9">
                                            <input type="password" name="rePassword" class="form-control" placeholder="Confirm Your Chosen Password">
                                        </div>                                        
                                    </div>


                                      <div class="form-group float-right">
                                      
                                       <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                  <i class="mdi mdi-content-save"></i>  Change Password 
                                      </button>
                                    </div>

                                    </form>

                                  
                                </div>
                            </div>
                        </div> <!-- end col -->


                    </div> <!-- end row -->
                </div>
                <!-- end container-fluid -->
            </div>
            <!-- end page content-->

        </div>
        <!-- page wrapper end -->


      <!--   modal begins here -->




        <!-- Footer -->
   <?php include"includes/footer.php"; ?>