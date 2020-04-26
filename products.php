
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
                            
                            <h4 class="page-title">Products</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Agroxa</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Products</li>
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
                        <div class="col-12">
                            <div class="card m-b-20">
                                <div class="card-body">

                                    <h4 class="mt-0 header-title">View All Products</h4>
                                    <p class="text-muted m-b-30">The Buttons extension for DataTables
                                        provides a common set of options, API methods and styling to display
                                        buttons on a page that will interact with a DataTable. The core library
                                        provides the based framework upon which plug-ins can built.
                                    </p>

                                    <div class="d-block float-right" style="">
                                         <button type="button" class="btn btn-warning waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg"> <i class="mdi mdi-checkbox-blank"></i> Add Product</button>
                                    </div>

                                   
                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                        </thead>


                                        <tbody>
                                       
                                      
                                      
                                        <tr>
                                            <td>Michael Bruce</td>
                                            <td>Javascript Developer</td>
                                            <td>Singapore</td>
                                            <td>29</td>
                                            <td>2011/06/27</td>
                                            <td>$183,000</td>
                                        </tr>
                                        <tr>
                                            <td>Donna Snider</td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>27</td>
                                            <td>2011/01/25</td>
                                            <td>$112,000</td>
                                        </tr>
                                        </tbody>
                                    </table>
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



              <!--  Modal content for adding products -->
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header text-white" style="background-color: orange;">
                            <h5 class="modal-title mt-0" id="myLargeModalLabel"> <i class="mdi mdi-plus-circle"></i> Add Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            
                            <div class="card m-b-20">
                                <div class="card-body">

                                  
                                  
                                <div class="alert alert-dark bg-dark  font-weight-normal  text-white alert-dismissible fade show" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                     </button> <strong> <i class=" mdi mdi-arrow-down-box"></i>   </strong> Here you can add a Product for Sale
                                </div>
    
                                   <form action="" id="addProductForm">

                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <label for="productImage">Product Image :</label>
                                        </div>  
                                        <div class="col-sm-9">
                                            <input type="file" name="productImage" class="form-control">
                                        </div>                                        
                                    </div>

                                      <div class="form-group row">
                                        <div class="col-sm-3">
                                            <label for="productCategory">Product Category :</label>
                                        </div>  
                                        <div class="col-sm-9">

                                            <select name="productCategory" id="productCategory" class="custom-select">
                                                <option value="" selected="selected" disabled="disabled">~~ Select Category ~~</option>
                                                <option value="value1">Value 1</option>
                                                <option value="value1">Value 1</option>
                                                <option value="value1">Value 1</option>
                                                <option value="value1">Value 1</option>
                                            </select>
                                         
                                        </div>                                        
                                    </div>

                                   

                                      <div class="form-group row">
                                        <div class="col-sm-3">
                                            <label for="productName">Product Name :</label>
                                        </div>  
                                        <div class="col-sm-9">
                                            <input type="text" name="productName" class="form-control" placeholder="Product Name">
                                        </div>                                        
                                    </div>

                                     <div class="form-group row">
                                        <div class="col-sm-3">
                                            <label for="productPrice">Product Price :</label>
                                        </div>  
                                        <div class="col-sm-9">
                                            <input type="number" name="productPrice" class="form-control" placeholder="Product Price">
                                        </div>                                        
                                    </div>


                                      <div class="form-group row">
                                        <div class="col-sm-3">
                                            <label for="productQuantity">Product Quantity :</label>
                                        </div>  
                                        <div class="col-sm-9">
                                            <input type="number" name="productQuantity" class="form-control" placeholder="Product Quantity">
                                        </div>                                        
                                    </div>

                                      <div class="form-group row">
                                        <div class="col-sm-3">
                                            <label for="productDescription">Product Description :</label>
                                        </div>  
                                        <div class="col-sm-9">
                                            <textarea type="text" name="productDescription" class="form-control" placeholder="Product Description"></textarea>
                                        </div>                                        
                                    </div>


                                     <div class="form-group row">
                                        <div class="col-sm-3">
                                            <label for="brandName">Brand Name :</label>
                                        </div>  
                                        <div class="col-sm-9">
                                             <select name="brandName" id="brandName" class="custom-select">
                                                <option value="" selected="selected" disabled="disabled">~~ Select Brand ~~</option>
                                                <option value="value1">Value 1</option>
                                                <option value="value1">Value 1</option>
                                                <option value="value1">Value 1</option>
                                                <option value="value1">Value 1</option>
                                            </select>
                                        </div>                                        
                                    </div>


                                      <div class="form-group">
                                            <div class="float-right">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                  <i class="mdi mdi-content-save"></i>  Save 
                                                </button>
                                                <button type="reset" class="btn btn-dark waves-effect m-l-5">
                                                     <i class="mdi mdi-close-circle"></i>   Cancel
                                                </button>
                                            </div>
                                        </div>

                                       

                                   </form>
    
                                </div>
                            </div>
                       
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

        <!-- Footer -->
   <?php include"includes/footer.php"; ?>