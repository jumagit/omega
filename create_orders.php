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

                    <h4 class="page-title">Create Order</h4>
                    <ol class="breadcrumb">

                        <li class="breadcrumb-item active">Add Order</li>
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
                <div class="col-lg-12">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Create Order</h4>
                            <p class="text-muted m-b-30">Here you can create Customer Order
                            </p>

                            <hr>


                            <form class="form-horizontal" method="POST" action="php_action/createOrder.php"
                                id="createOrderForm">

                                <div class="form-group row">
                                    <label for="orderDate" class="col-sm-2 control-label">Order Date</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="orderDate" name="orderDate"
                                            autocomplete="off" />
                                    </div>
                                </div>
                                <!--/form-group row-->
                                <div class="form-group row">
                                    <label for="customerName" class="col-sm-2 control-label">customer Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="customerName" name="customerName"
                                            placeholder="customer Name" autocomplete="off" />
                                    </div>
                                </div>
                                <!--/form-group row-->
                                <div class="form-group row">
                                    <label for="customerContact" class="col-sm-2 control-label">customer Contact</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="customerContact"
                                            name="customerContact" placeholder="Contact Number" autocomplete="off" />
                                    </div>
                                </div>
                                <!--/form-group row-->

                                <table class="table" id="productTable">
                                    <thead>
                                        <tr>
                                            <th style="width:40%;">Product</th>
                                            <th style="width:20%;">Rate</th>
                                            <th style="width:10%;">Available Quantity</th>
                                            <th style="width:15%;">Quantity</th>
                                            <th style="width:25%;">Total</th>
                                            <th style="width:10%;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
			  		                        $arrayNumber = 0;
                                            for($x = 1; $x < 4; $x++) { ?>
                                        <tr id="row<?php echo $x; ?>" class="<?php echo $arrayNumber; ?>">
                                            <td style="margin-left:20px;">
                                                <div class="form-group">

                                                    <select class="form-control" name="productName[]"
                                                        id="productName<?php echo $x; ?>"
                                                        onchange="getProductData(<?php echo $x; ?>)">
                                                        <option value="">~~SELECT~~</option>
                                                        <?php
                                            $productSql = "SELECT * FROM products WHERE active > 0 AND status > 0 AND quantity != 0";
                                            $productData = $connection->query($productSql);

                                            while($row = mysqli_fetch_array($productData)) {									 		
                                            echo "<option value='".$row['product_id']."' id='changeProduct".$row['product_id']."'>".$row['product_name']."</option>";
                                            } // /while 

                                            ?>
                                                    </select>
                                                </div>
                                            </td>
                                            <td style="padding-left:20px;">
                                                <input type="text" name="rate[]" id="rate<?php echo $x; ?>"
                                                    autocomplete="off" disabled="true" class="form-control" />
                                                <input type="hidden" name="rateValue[]" id="rateValue<?php echo $x; ?>"
                                                    autocomplete="off" class="form-control" />
                                            </td>
                                            <td style="padding-left:20px;">
                                                <div class="form-group">
                                                    <p id="available_quantity<?php echo $x; ?>"></p>
                                                </div>
                                            </td>
                                            <td style="padding-left:20px;">
                                                <div class="form-group">
                                                    <input type="number" name="quantity[]"
                                                        id="quantity<?php echo $x; ?>"
                                                        onkeyup="getTotal(<?php echo $x ?>)" autocomplete="off"
                                                        class="form-control" min="1" />
                                                </div>
                                            </td>
                                            <td style="padding-left:20px;">
                                                <input type="text" name="total[]" id="total<?php echo $x; ?>"
                                                    autocomplete="off" class="form-control" disabled="true" />
                                                <input type="hidden" name="totalValue[]"
                                                    id="totalValue<?php echo $x; ?>" autocomplete="off"
                                                    class="form-control" />
                                            </td>
                                            <td>

                                                <button class="btn btn-default removeProductRowBtn" type="button"
                                                    id="removeProductRowBtn"
                                                    onclick="removeProductRow(<?php echo $x; ?>)"><i
                                                        class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <?php
                                        $arrayNumber++;
                                        } // /for
			  		                    ?>
                                    </tbody>
                                </table>


                                <div class="container">

                                    <div class="row">


                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="subTotal" class="col-sm-3 control-label">Sub Amount</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="subTotal"
                                                        name="subTotal" disabled="true" />
                                                    <input type="hidden" class="form-control" id="subTotalValue"
                                                        name="subTotalValue" />
                                                </div>
                                            </div>
                                            <!--/form-group-->
                                            <!--/form-group-->
                                            <div class="form-group row">
                                                <label for="totalAmount" class="col-sm-3 control-label">Total
                                                    Amount</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="totalAmount"
                                                        name="totalAmount" disabled="true" />
                                                    <input type="hidden" class="form-control" id="totalAmountValue"
                                                        name="totalAmountValue" />
                                                </div>
                                            </div>
                                            <!--/form-group-->
                                            <div class="form-group row">
                                                <label for="discount" class="col-sm-3 control-label">Discount</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="discount"
                                                        name="discount" onkeyup="discountFunc()" autocomplete="off" />
                                                </div>
                                            </div>
                                            <!--/form-group-->
                                            <div class="form-group row">
                                                <label for="grandTotal" class="col-sm-3 control-label">Grand
                                                    Total</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="grandTotal"
                                                        name="grandTotal" disabled="true" />
                                                    <input type="hidden" class="form-control" id="grandTotalValue"
                                                        name="grandTotalValue" />
                                                </div>
                                            </div>
                                            <!--/form-group-->
                                            <div class="form-group row">
                                                <label for="vat" class="col-sm-3 control-label gst">GST 18%</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="vat" name="gstn"
                                                        readonly="true" />
                                                    <input type="hidden" class="form-control" id="vatValue"
                                                        name="vatValue" />
                                                </div>
                                            </div>
                                        </div>
                                        <!--/col-md-6-->

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="paid" class="col-sm-3 control-label">Paid Amount</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="paid" name="paid"
                                                        autocomplete="off" onkeyup="paidAmount()" />
                                                </div>
                                            </div>
                                            <!--/form-group-->
                                            <div class="form-group row">
                                                <label for="due" class="col-sm-3 control-label">Due Amount</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="due" name="due"
                                                        disabled="true" />
                                                    <input type="hidden" class="form-control" id="dueValue"
                                                        name="dueValue" />
                                                </div>
                                            </div>
                                            <!--/form-group-->
                                            <div class="form-group row">
                                                <label for="customerContact" class="col-sm-3 control-label">Payment
                                                    Type</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="paymentType" id="paymentType">
                                                        <option value="">~~SELECT~~</option>
                                                        <option value="1">Cheque</option>
                                                        <option value="2">Cash</option>
                                                        <option value="3">Credit Card</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/form-group-->
                                            <div class="form-group row">
                                                <label for="customerContact" class="col-sm-3 control-label">Payment
                                                    Status</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="paymentStatus"
                                                        id="paymentStatus">
                                                        <option value="">~~SELECT~~</option>
                                                        <option value="1">Full Payment</option>
                                                        <option value="2">Advance Payment</option>
                                                        <option value="3">No Payment</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/form-group-->
                                            <div class="form-group row">
                                                <label for="customerContact" class="col-sm-3 control-label">Payment
                                                    Place</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="paymentPlace" id="paymentPlace">
                                                        <option value="">~~SELECT~~</option>
                                                        <option value="1">In Gujarat</option>
                                                        <option value="2">Out Of Gujarat</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--/form-group-->
                                        </div>
                                        <!--/col-md-6-->




                                    </div>

                                </div>




                                <div class="form-group submitButtonFooter">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="button" class="btn btn-default" onclick="addRow()" id="addRowBtn"
                                            data-loading-text="Loading..."> <i class="mdi mdi-plus-circle"></i> Add Row
                                        </button>

                                        <button type="submit" id="createOrderBtn" data-loading-text="Loading..."
                                            class="btn btn-success"><i class="mdi mdi-checked"></i> Save
                                            Changes</button>

                                        <button type="reset" class="btn btn-default" onclick="resetOrderForm()"><i
                                                class="mdi mdi-erase"></i> Reset</button>
                                    </div>
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