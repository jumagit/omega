<?php include"includes/header.php"; ?>
<!-- Navigation Bar-->
<?php include"includes/navigation.php"; ?>
<!-- End Navigation Bar-->

<?php   
        
        
        
            $user_id = $_SESSION['user_id'];
            $sql = "SELECT * FROM users WHERE user_id = $user_id";
            $query = query($sql);
            $result = $query->fetch_assoc();

            $connection->close();




        ?>

<!-- page wrapper start -->
<div class="wrapper">
    <div class="page-title-box">
        <div class="container-fluid">

             <div class="row">
                <div class="col-sm-12 text-center">
                    

                    <h2 class="text-white"> <i class="fa fa-cogs"></i> Settings </h2>
                    
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
                        <div class="card-header bg-dark text-white">
                            <h4 class="mt-0 "> <i class="fa fa-user"></i> Change Username</h4>
                        </div>
                        <div class="card-body">

                            
                         
                          
                             <div class="alert alert-info font-weight-normal   alert-dismissible fade show"
                                role="alert"> <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong>Here you view can Change your Username
                            </div>

                            <form action="" id="changeUsername">

                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <label for="username">Username :</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="hidden" name="user_id" id="user_id"
                                            value="<?php echo $result['user_id'] ?>" />
                                        <input type="text" name="username" required class="form-control"
                                            value="<?php echo $result['username']; ?>">
                                    </div>
                                </div>


                                <div class="form-group ">

                                    <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">
                                        <i class="mdi mdi-content-save"></i> Change Username
                                    </button>
                                </div>


                            </form>


                        </div>
                    </div>
                </div> <!-- end col -->


                <div class="col-6">
                    <div class="card m-b-20">
                         <div class="card-header bg-dark text-white">
                            <h4 class="mt-0 "><i class="fa fa-lock"></i> Change Password</h4>
                        </div>
                        <div class="card-body">

                           
                              <div class="alert alert-info font-weight-normal   alert-dismissible fade show"
                                role="alert"> <button type="button" class="close" data-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> <strong> <i class=" mdi mdi-arrow-down-box"></i> </strong>Here you view can Change your Password
                            </div>

                            <form action="" id="changePassword">

                                <div class="form-group row">

                                    <div class="col-sm-3">
                                        <label for="currentPassword">Current Password :</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="password" name="currentPassword" class="form-control"
                                            placeholder="Enter your Old Password" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <label for="password">New Password :</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="password" name="newPassword" class="form-control" id="pass2"
                                            placeholder="Enter your Favourite Password" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <label for="confirmPassword">Confirm Password :</label>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="password" name="confirmPassword" data-parsley-equalto="#pass2"
                                            class="form-control" placeholder="Confirm Your Chosen Password" required>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <input type="hidden" name="puser_id" id="puser_id"
                                        value="<?php echo $result['user_id'] ?>" />
                                    <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">
                                        <i class="mdi mdi-content-save"></i> Change Password
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