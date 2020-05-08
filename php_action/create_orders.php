<?php

include "check_if_logged_in.php";

require "../includes/db.php";

// inserting brands

if ($_REQUEST['t'] == 'true') {

    if (isset($_SESSION['fullName'])) {
        $created_by = $_SESSION['fullName'];
    }

    $orderDate = date('Y-m-d', strtotime(clean($_POST['orderDate'])));
    $clientName = clean($_POST['customerName']);
    $clientContact = clean($_POST['customerContact']);
    $subTotalValue = clean($_POST['subTotalValue']);
    $vatValue = clean($_POST['vatValue']);
    $totalAmountValue = clean($_POST['totalAmountValue']);
    $discount = clean($_POST['discount']);
    $grandTotalValue = clean($_POST['grandTotalValue']);
    $paid = clean($_POST['paid']);
    $dueValue = clean($_POST['dueValue']);
    $paymentType = clean($_POST['paymentType']);
    $paymentStatus = clean($_POST['paymentStatus']);
    $paymentPlace = clean($_POST['paymentPlace']);
    $gstn = clean($_POST['gstn']);
    $client_id = $_SESSION['client_id'];

    $sql = "INSERT INTO orders (order_date, client_name, client_contact, sub_total, vat, total_amount, discount, grand_total, paid, due, payment_type, payment_status,payment_place, gstn,order_status,user_id)
	VALUES ('$orderDate', '$clientName', '$clientContact', '$subTotalValue', '$vatValue', '$totalAmountValue', '$discount', '$grandTotalValue', '$paid', '$dueValue', $paymentType, $paymentStatus,$paymentPlace,$gstn, 1,$client_id)";

    $order_id;
    $orderStatus = false;
    if ($connection->query($sql) === true) {
        $order_id = $connection->insert_id;
        $valid['order_id'] = $order_id;
        $orderStatus = true;
    }

    // echo clean(clean($_POST['productName'];
    $orderItemStatus = false;

    for ($x = 0; $x < count($_POST['product_name']); $x++) {
        $updateProductQuantitySql = "SELECT products.quantity FROM products
		 WHERE products.product_id = " . $_POST['product_name'][$x] . "";
        $updateProductQuantityData = $connection->query($updateProductQuantitySql);

        while ($updateProductQuantityResult = $updateProductQuantityData->fetch_row()) {
            $updateQuantity[$x] = $updateProductQuantityResult[0] - $_POST['quantityTaken'][$x];
            // update product table
            $updateProductTable = "UPDATE products SET quantity = '" . $updateQuantity[$x] . "' WHERE product_id = " . $_POST['product_name'][$x] . "";
            $connection->query($updateProductTable);

            $totalPerProduct =  (int)$_POST['quantityTaken'][$x] * (float)$_POST['price'][$x];

            //echo $totalPerProduct;

            // add into order_item
            $orderItemSql = "INSERT INTO order_item (order_id, product_id, quantityTaken ,total, order_item_status)
				VALUES ('$order_id', '" . $_POST['product_name'][$x] . "', '" . $_POST['quantityTaken'][$x] . "', $totalPerProduct,1)";

            $query = query($orderItemSql);

            //out stock records


            if ($x == count($_POST['product_name'])) {
                $orderItemStatus = true;
            }
        } // while
    } // /for quantity

    if ($query) {
        $feed_back = array('status' => true, 'msg' => 'success');
    } else {
        $feed_back = array('status' => false, 'msg' => mysqli_error($connection));
    }

    $dataX = json_encode($feed_back);
    header('Content-Type: application/json');
    echo $dataX;

    $connection->close();

}
