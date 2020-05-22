<?php

include "check_if_logged_in.php";

require "../includes/db.php";

if ($_REQUEST['t'] == 'true') {

    $orderId = clean($_POST['orderId']);
    $payAmount = clean($_POST['payAmount']);
    $paymentType = clean($_POST['paymentType']);
    $paymentStatus = clean($_POST['paymentStatus']);
    $paidAmount = clean($_POST['paidAmount']);
    $grandTotal = clean($_POST['grandTotal']);

    $updatePaidAmount = $payAmount + $paidAmount;
    $updateDue = $grandTotal - $updatePaidAmount;

    $query = query("UPDATE orders SET paid = '$updatePaidAmount', due = '$updateDue', payment_type = '$paymentType', payment_status = '$paymentStatus' WHERE order_id = {$orderId}");

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
